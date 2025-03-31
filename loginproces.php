<?php
require "connection.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$ResultSet = Database::serch("SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$password."'");

if($ResultSet->num_rows == 1){
    $data = $ResultSet->fetch_assoc();
    $_SESSION["u"] = $data;
    echo("done");
}else{
    echo("Pleace check your email and password");
}
?>


