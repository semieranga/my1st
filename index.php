<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="short icon" href="image/logo1.jpeg">
</head>

<body>

    <section id="Home">

        <nav>

            <div class="logo">
                <a href="index.php"><img src="image/logo2.jpeg"></a>
            </div>

             
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="#">New</a></li>
                
            </ul>

            <?php
            session_start();

            if (isset($_SESSION["u"])) {
            ?>
                <div class="login">
                    <a href="#p">Logout</a>
                </div>
            <?php
            }else{
                ?>
                <div class="login">
                <a href="loglog.php">Login</a>
                </div>
                <?php
            }
            ?>




        </nav>

        <div class="main anim">

            <div class="main_text">

                <h1>Get Fresh<span> Food</span><br>in a Easy Way</h1>

                <p>
                    Get your Order and get a very delicious meal from us.Order Now...
                </p>

                <a href="menu.php" class="btn"><i class="fa-solid fa-burger"></i>Order Now</a>

            </div>

            <div class="main_image">
                <img src="image/main_img.png">
            </div>

        </div>

    </section>




    <!--About-->

    <div class="about">

        <div class="about_main">

            <div class="about_image">
                <img src="image/about.png">
            </div>

            <div class="about_text">

                <h1><span>About</span>Us</h1>
                <h3>why food choose us?</h3>
                <p>
                    We will deliver the food you need very quickly..We are commited to providing you with delicious meal
                    ...we will deliver your order to you in a very short time.We will also work to valuable discounts for
                    your order...!
                </p>

                <div class="about_services">

                    <div class="s_1">
                        <i class="fa-solid fa-truck-fast"></i>
                        <a href="#">Fast Delivery</a>
                    </div>

                    <div class="s_1">
                        <i class="fa-brands fa-amazon-pay"></i>
                        <a href="#">Easy Payment</a>
                    </div>

                    <div class="s_1">
                        <i class="fa-solid fa-headset"></i>
                        <a href="#">24 hours Services</a>
                    </div>

                </div>

                <a href="menu.php" class="about_btn">
                    <i class="fa-solid fa-burger"></i>Order Now
                </a>

            </div>

        </div>

    </div>




    <!--Menu-->

    <div class="menu">

        <h1>Our<span>Menu</span></h1>

        <div class="menu_box">

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_1.jpg">
                </div>

                <div class="menu_text">

                    <h2>Buger</h2>
                  
                   
                  

                    <p class="price">RS.750.00<sub><del>Rs.850.00</del></sub></p>
                    
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_2.jpg">
                </div>

                <div class="menu_text">

                    <h2>Drink</h2>


                  
                    <p class="price">Rs450.00<sub><del>Rs.500.00</del></sub></p>

                   
                </div>

            </div>

            <div class="menu_card">

                <div class="menu_img">
                    <img src="image/menu_3.png">
                </div>

                <div class="menu_text">

                    <h2>Pizza</h2>


                   
                    <p class="price">Rs.2600.00<sub><del>Rs.3000.00</del></sub></p>

                   
                </div>

            </div>

        </div>

    </div>




    <!--Banner-->

    <div class="banner">

        <h1>Special Offer</h1>

        <div class="banner_center">
            <h2>50%<br><span>Off</span></h2>
        </div>
       
    </div>




    <!--Gallery-->

    <div class="gallery">

        <h1>Popular<span>Gallery</span></h1>

        <div class="gallery_box">

            <div class="gallery_image">
                <img src="image/gallary_1.jpg">
            </div>

            <div class="gallery_image">
                <img src="image/gallary_2.jpg">
            </div>

            <div class="gallery_image">
                <img src="image/gallary_3.webp">
            </div>

        </div>

    </div>



    <!--Offer-->

    <div class="offer">

        <div class="offer_box">

            <div class="offer_card_1">

                <div class="offer_img">
                    <img src="image/offer_1.jpg">
                </div>

                <div class="offer_tag">

                    <h2>Triplae Food</h2>
                    
                    <p>
                        Here is a valuable opportunity for you..!Chicken burger, chips with cocacola now available
                        from us with 40% discount..Place your order with us now....!
                    </p>
                    
                </div>

            </div>

            <div class="offer_card_2">

                <div class="offer_img">
                    <img src="image/offer_2.png">
                </div>

                <div class="offer_tag">


                    <h2>Buy 2 pizza and get a <br>free Drink</h2>
                    <p>
                        Here is a valuable opportunity for you..!
                        If you buy two pizzas,We will give you a free coca-cola drink...
                        Place your order now....!
                    </p>
                    

                </div>

            </div>

        </div>

    </div>




    


    
    <!--Footer-->

    <footer>

        <div class="footer_main">

            <div class="footer_tag">

                <h2>Location</h2>
                <p>Sri Lanka</p>
                <p>Anuradhapura Distric</p>
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

            
    </footer>




</body>

</html>