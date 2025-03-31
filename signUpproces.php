<?php
require "connection.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];

Database::iud("INSERT INTO `user` (`name`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')");

echo("Done");


?>


