<?php
require "connection.php";
session_start();

$id = $_POST["id"];

if (!isset($_SESSION["u"])) {
    echo ("login");
} else {

    $UserId = $_SESSION["u"]["user_id"];

    $CartRs = Database::serch("SELECT * FROM `cart` WHERE `user_user_id` = '".$UserId."'");
    $CartId;

    if ($CartRs->num_rows == 0) {

        Database::iud("INSERT INTO `cart` (`user_user_id`) VALUES ('" . $UserId . "')");

        $CartRs2 = Database::serch("SELECT * FROM `cart` WHERE `user_user_id` = '".$UserId."'");

        $CartData2 = $CartRs2->fetch_assoc();
        $CartId = $CartData2["cart_id"];


    }else{

        $CartData = $CartRs->fetch_assoc();
        $CartId = $CartData["cart_id"];


    }

        $CartFoodRs = Database::serch("SELECT * FROM `cart_has_food` 
        WHERE `cart_has_food`.`cart_cart_id` = '" . $CartId . "' AND `food_food_id` = '" . $id . "'");

        if($CartFoodRs->num_rows == 0){

            Database::iud("INSERT INTO `cart_has_food` (`cart_cart_id`,`food_food_id`,`qty`) 
            VALUES ('".$CartId."','".$id."','1')");

        }else{

            Database::iud("UPDATE `cart_has_food` SET `qty` = `qty`+1 
            WHERE `cart_cart_id` = '".$CartId."' AND `food_food_id` = '".$id."'");

        }

        echo("Done");
    
}
