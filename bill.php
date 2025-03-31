<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bill/style.css">
</head>

<body>

    <?php
    require "connection.php";

    $id = $_GET["id"];

    $rs = Database::serch("SELECT * FROM `bill`
        INNER JOIN `user` ON `user`.`user_id` = `bill`.`user_user_id`
        WHERE `bill`.`bill_id` = '" . $id . "'");

    $data = $rs->fetch_assoc();
    ?>

    <div class="invoice-wrapper" id="print-area">
        <div class="invoice">
            <div class="invoice-container">
                <div class="invoice-head">
                    <div class="invoice-head-top">
                        <div class="invoice-head-top-left text-start">
                            <img src="image/logo2.jpeg">
                        </div>
                        <div class="invoice-head-top-right text-end">
                            <h3>Receipt</h3>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-middle">
                        <div class="invoice-head-middle-left text-start">
                            <p><span class="text-bold">Thank You..!</span></p>
                        </div>
                        <div class="invoice-head-middle-right text-end">
                           
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="invoice-head-bottom">
                        <div class="invoice-head-bottom-left">
                            <ul>

                                <li>Name : <?php echo ($data["name"]) ?></li>
                                <li>Email : <?php echo ($data["email"]) ?></li>
                                <li>Table no : <?php echo ($data["table"]) ?></li>


                            </ul>
                        </div>
                       
                    </div>
                </div>
                <div class="overflow-view">
                    <div class="invoice-body">
                        <table>
                            <thead>

                                <tr>

                                    <td class="text-bold">Item</td>
                                    <td class="text-bold">Price</td>
                                    <td class="text-bold">QTY</td>
                                    <td class="text-bold text-end">Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $FoodRs = Database::serch("SELECT * FROM `bill_details`
                                    INNER JOIN `food` ON `food`.food_id = `bill_details`.`food_food_id`
                                    WHERE `bill_details`.`bill_bill_id` = '" . $id . "'");

                                $tot = 0;
                                for ($i = 0; $i < $FoodRs->num_rows; $i++) {
                                    $FoodData = $FoodRs->fetch_assoc();
                                    $tot = $tot + intval($FoodData["price"])*intval($FoodData["qty"]);
                                ?>
                                    <tr>
                                        <td><?php echo($FoodData["name"]) ?></td>
                                        <td>Rs. <?php echo($FoodData["price"]) ?></td>
                                        <td><?php echo($FoodData["qty"]) ?></td>
                                        <td class="text-end">Rs. <?php echo(intval($FoodData["price"])*intval($FoodData["qty"])) ?></td>
                                    </tr>
                                <?php
                                }

                                ?>

                            </tbody>
                        </table>
                        <div class="invoice-body-bottom">
                            <div class="invoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Sub Total:</div>
                                <div class = "info-item-td text-end"> Rs. <?php echo($tot) ?></div>
                            </div>
                            <div class="invoice-body-info-item border-bottom">
                                <div class="info-item-td text-end text-bold">Tax:</div>
                                <div class = "info-item-td text-end"> Rs. 0</div>
                            </div>
                            <div class="invoice-body-info-item">
                                <div class="info-item-td text-end text-bold">Total:</div>
                                <div class = "info-item-td text-end"> Rs. <?php echo($tot) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="invoice-foot text-center">
                    


                    <div class="invoice-btns">
                        <button type="button" class="invoice-btn" onclick="printInvoice()">
                            <span>
                                <i class="fa-solid fa-print"></i>
                            </span>
                            <span>Print</span>
                        </button>
                        <button type="button" class="invoice-btn">
                            <span>
                                <i class="fa-solid fa-download"></i>
                            </span>
                           

                            
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="bill/script.js"></script>
</body>

</html>