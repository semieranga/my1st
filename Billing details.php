<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
      margin-bottom: 50px;
    }

    .container2 {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
      width: 80%;
      margin-left: 10%;
      margin-bottom: 50px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .icon-container2 {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #04AA6D;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

   
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>
  </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
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
          <p><span><?php echo($Data["name"]); ?></span> <span class="price">Rs. <?php echo($Data["price"]); ?> x <?php echo($Data["qty"]); ?></span></p>
      <?php
        }
      }
      ?>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs. <?php echo($tot); ?></b></span></p>
    </div>
  </div>
  </div>

  <!-- <h2>Responsive Checkout Form</h2> -->
  <!-- <p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p> -->
  <div class="row">
    <div class="col-75">
      <div class="container2">
        <div >

        <?php
        $UserRs = Database::serch("SELECT * FROM `user` WHERE `user_id` = '".$_SESSION["u"]["user_id"]."'");

        $data = $UserRs->fetch_assoc();
        
        ?>

          <div class="row">
            <div class="col-50">
              <h3>Billing Details</h3>
              <label for="fname"><i class="fa fa-user"></i> Name</label>
              <input type="text" id="name" name="firstname" placeholder="semini eranga" value="<?php echo($data["name"]); ?>" disabled >
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="semieranga@gmail.com" value="<?php echo($data["email"]); ?>" disabled >
              <label for="id"><i class="fa fa-id-card-o"></i> ID NO</label>
              <input type="text" id="id" name="idno" placeholder="200*****">
              <label for="mobile"><i class="fa fa-mobile-phone"></i> Mobile No</label>
              <input type="text" id="mobile" name="mobileno" placeholder="070*******">
              <label for="tableno"><i class=""></i> Table No</label>
              <input type="text" id="table" name="tableno" placeholder="6">

              <button class="btn" onclick="order();">ORDER</button>
    </div>
      </div>

    </div>

    <script src="script.js"></script>
</body>

</html>