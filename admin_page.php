<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="Add product/css/style.css">

</head>

<body>
<a href="admin_addproduct.php" class="btn" style="background-color: #06e676; width:min-content;"> <i class="fas fa-edit"></i> Add Product </a>


   <div class="container">

      <div class="product-display">
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Bill Id</th>
                  <th>Table</th>
                  <th>User name</th>
                  <th>action</th>


                  
               </tr>
            </thead>

            <?php
            require "connection.php";

            $BillRs = Database::serch("SELECT * FROM `bill`
               INNER JOIN `user` ON `user`.`user_id` = `bill`.`user_user_id`");

            for ($i = 0; $i < $BillRs->num_rows; $i++) {
               $BillData = $BillRs->fetch_assoc();

            ?>
               <tr>
                  <td><?php echo($BillData["bill_id"]); ?></td>
                  <td><?php echo($BillData["table"]); ?></td>
                  <td><?php echo($BillData["name"]); ?></td>
                  <td>
                     <a href="bill.php?id=<?php echo($BillData["bill_id"]) ?>" class="btn" style="background-color: #06e676;"> <i class="fas fa-edit"></i> View </a>
                     
                  </td>
               </tr>
            <?php
            }
            ?>



         </table>
      <!-- </div>

      <div class="admin-product-form-container">

         <div class="form">
            <h3>add a new product</h3>
            <input type="text" placeholder="enter product name" id="name" class="box">
            <input type="number" placeholder="enter product price" id="price" class="box">
            <input type="discription" placeholder="enter discription" id="discription" class="box">
            
            
            <input type="file" accept="image/png, image/jpeg, image/jpg" id="img" class="box">
            <button class="btn" onclick="AddProduct();">add product</button>
         </div>

      </div>



   </div> -->

<script src="script.js"></script>
</body>

</html>