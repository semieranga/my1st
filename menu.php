<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="short icon" href="image/logo1.jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!--Navigation Bar-->

    <nav>

        <div class="logo">
            <a href="index.php">
                <img src="image/logo2.jpeg">
            </a>
        </div>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="index1.php">Shoping Cart</a></li>

        </ul>

        

        
    </nav>





    <!--Banner-->

    <div class="banner_bg">
        <h1>Our<span>Menu</span></h1>
    </div>



    <!--Menu-->

    <div class="menu" style="margin-bottom: 100px;">

        <div class="menu_box anim">


            <?php
            require "connection.php";

            $rs = Database::serch("SELECT * FROM `food`");
            $num = $rs->num_rows;

            for ($i = 0; $i < $num; $i++) {

                $data = $rs->fetch_assoc();
            ?>

                <div class="menu_card">

                    <div class="menu_img">
                        <img src="<?php echo($data["img"]); ?>">
                    </div>

                    <div class="menu_text">

                        <h2><?php echo($data["name"]); ?></h2>
                       
                        <p class="price">Rs.<?php echo($data["price"]); ?></p>
                        <p class="discription"><?php echo($data["discription"]); ?></p>


                        <button class="menu_btn" onclick="AddToCart(<?php echo($data['food_id']); ?>);">Add to cart</button>

                    </div>

                </div>

            <?php
            }

            ?>






        </div>

    </div>




    <!--Footer-->

    <footer>

        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>Anuradhapura distric</p>
                <p>Medawachchiya</p>
                <p>Poonewa</p>

            </div>

            <div class="footer_tag">
                <h2>Quick Link</h2>
                <p>Home</p>
                <p>About</p>
                <p>Menu</p>
                

            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>0719927000</p>
               

                <p>boooyanaturesourt@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Our Services</h2>
                <p>Fast Delivery</p>
                <p>Easy Payments</p>

                <p>24 hours Service</p>
            </div>

           
        </div>



    </footer>
<script src="script.js"></script>
</body>

</html>