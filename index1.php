<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body class="">

    <div class="container">
        <header>
            <h1>Your Shopping Cart</h1>

            <div class="shopping">
                <!-- <img src="image1/shopping.svg">
                <span class="quantity">0</span> -->
            </div>

        </header>

        <div class="list">

            <?php
            require "connection.php";
            session_start();

            $tot = 0;

            $CartRs = Database::serch("SELECT * FROM `cart` 
                INNER JOIN `cart_has_food` ON `cart`.`cart_id` = `cart_has_food`.`cart_cart_id`
                INNER JOIN `food` ON `cart_has_food`.`food_food_id` = `food`.`food_id`
                WHERE `cart`.`user_user_id` = '" . $_SESSION["u"]["user_id"] . "'");

            if ($CartRs->num_rows > 0) {
                for ($i = 0; $i < $CartRs->num_rows; $i++) {
                    $Data = $CartRs->fetch_assoc();

                    $tot = $tot + (intval($Data["price"]) * intval($Data["qty"]));
            ?>
                    <div class="item">
                        <img src="<?php echo($Data["img"]); ?>">
                        <div class="title"><?php echo($Data["name"]); ?></div>
                        <div class="price">Rs. <?php echo($Data["price"]); ?></div>
                        <div class="price">Qty :- <?php echo($Data["qty"]); ?></div>
                    </div>
            <?php
                }
            }
            ?>

            <div style="padding: 50px;">
                <h3>Total :- Rs. <?php echo($tot); ?></h3><br>
                <button style="width: 100%; height: 40px;  background-color: #ffe10d; cursor: pointer; border: none; border-radius: 20px; font-weight: bold;" onclick="window.location = 'Billing details.php'">Conform Order</button>
            </div>



        </div>

    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">

            <div class="total">0</div>
            <div class="checkout"><a href="#">Checkout</a></div>
            <div class="closeShopping">Close</div>

        </div>
    </div>

    <!-- <script src="app1.js"></script> -->
</body>

</html>