<?php
require "connection.php";
session_start();

$table = $_POST["table"];
$UniqId = uniqid();
$CartId;

Database::iud("INSERT INTO `bill` (`user_user_id`,`table`,`uniq`) 
VALUES ('" . $_SESSION["u"]["user_id"] . "','" . $table . "','" . $UniqId . "')");

$BillRs = Database::serch("SELECT * FROM `bill` WHERE `uniq` = '" . $UniqId . "'");
$BillData = $BillRs->fetch_assoc();

$CartRs = Database::serch("SELECT * FROM `cart` 
                INNER JOIN `cart_has_food` ON `cart`.`cart_id` = `cart_has_food`.`cart_cart_id`
                INNER JOIN `food` ON `cart_has_food`.`food_food_id` = `food`.`food_id`
                WHERE `cart`.`user_user_id` = '" . $_SESSION["u"]["user_id"] . "'");

if ($CartRs->num_rows > 0) {
    for ($i = 0; $i < $CartRs->num_rows; $i++) {
        $CartData = $CartRs->fetch_assoc();
        $CartId = $CartData["cart_cart_id"];
        Database::iud("INSERT INTO `bill_details` (`bill_bill_id`,`food_food_id`,`qty`)
        VALUES ('" . $BillData["bill_id"] . "','" . $CartData["food_food_id"] . "','" . $CartData["qty"] . "')");
    }
    Database::iud("DELETE FROM `cart_has_food` WHERE `cart_cart_id` = '" . $CartId . "'");
}

echo($BillData["bill_id"]);
?>
