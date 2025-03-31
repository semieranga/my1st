<?php
require "connection.php";

$name = $_POST["name"];
$price = $_POST["price"];
$discription = $_POST["discription"];

$length = sizeof($_FILES);

    if($length >0){
        $allowed_img_extentions = array ("image/jpg","image/png","image/jpeg","image/svg+xml");

            if(isset($_FILES["image"])){

                $img_file = $_FILES["image"];
                $file_extention = $img_file["type"];

                if(in_array($file_extention,$allowed_img_extentions)){

                    $new_img_extention;

                    if($file_extention == "image/jpg"){
                        $new_img_extention = ".jpg";
                    }else if($file_extention == "image/jpeg"){
                        $new_img_extention = ".jpeg";
                    }else if($file_extention == "image/png"){
                        $new_img_extention = ".png";
                    }else if($file_extention == "image/svg+xml"){
                        $new_img_extention = ".svg";
                    }
m ''
                    $file_name = "image//"."_".uniqid().$new_img_extention;
                    move_uploaded_file($img_file["tmp_name"],$file_name);

                    Database::iud("INSERT INTO `food` (`name`,`price`,`img`,`discription`) VALUES ('".$name."','".$price."','".$file_name."','".$discription."')");

                    echo("Product added successfully");

                }else{
                    echo("Invalid Image type");
                }

            }
        
        

    }else{
        echo("Select image");
    }
   
     