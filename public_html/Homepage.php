<!DOCTYPE html>

<?php
include 'components/header.php';
include 'components/logincheck.php';
$userId = $_SESSION['id'];

$sqlCurrency = "SELECT * FROM country_units WHERE country = (SELECT country FROM users WHERE user_id = $userId)";
$currencyRes = $con -> query($sqlCurrency);
while($row = $currencyRes->fetch_assoc()){
    $_SESSION['currency'] = $row['currency_unit'];
    $_SESSION['currencyName'] = $row['unitName'];
}

$currency = $_SESSION['currency'];
$currencyName = $_SESSION['currencyName'];
?>

<html>
    <head>
        <title>Home page</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/Homepage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "js/homepage.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background = "images/backgrounds/background2.jpg">

        <div id="maincontainer1">
            <!--BODY STARTS-->


            <div class="left column">
                <div class = "categories">
                    <label><b>Categories</b></label><br><br>
                    <label>Flowers</label><br>
                    <label>Greeting cards</label><br>
                    <label>Jewelries</label><br>
                    <label>Perfumes</label><br>
                    <label>More Gifts</label><br><br>
                    <label><b>Help</b></label><br><br>
                    <label>How to buy</label><br>
                    <label>Order status</label><br>
                    <label>Contact Help Desk</label><br>
                </div>
            </div>

                <div class="middle column">

                    <div class="fling-minislide">
                        <img src="images/slide1.jpg" alt="Slide 4" style = "height: 350px;">
                        <img src="images/slide2.jpg" alt="Slide 3" style = "height: 350px;">
                        <img src="images/slide3.jpg" alt="Slide 2" style = "height: 350px;">
                        <img src="images/slide4.jpg" alt="Slide 1" style = "height: 350px;" >
                    </div>
                    
                    <?php
                    
                    for($i=0; $i < 3; ++$i){ 
                        ?> 
                    
                    <div class = "image_left column">
                        <?php 
                        $items = $i * 3;
                        ++$items;
                        $sql1 = "SELECT * FROM item WHERE itemID = $items";
                        $result1 = $con -> query($sql1);
                        while ($row1 = $result1->fetch_assoc()) {
                                    $itemId = $row1["itemID"];
                                    $itemName = $row1["itemName"];
                                    $price = $row1["itemPrice"];
                                    $qty = $row1["quantity"];
                                    $total = $row1["price"] * $qty;
                                    $image = $row1["image"];
                        }
                        ?>
                        <img src = "<?php echo $image ?>" width ="100%" style = "border: 1px solid lightgray;">
                        <center><label><?php echo $itemName ?></label></center>
                        <center><label id = "price1"><?php echo $currencyName . ' : ' . number_format((float)  $price * $currency, 2, '.', '')?></label></center><br/>
                        <a id ="div_button" href = "cart.php?add=<?php echo $items ?>" onclick="alert_cart()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to the cart</a>
                    </div>

                    <div class = "image_middle column">
                        <?php 
                        ++$items;
                        $sql2 = "SELECT * FROM item WHERE itemID = $items";
                        $result2 = $con -> query($sql2);
                        while ($row2 = $result2->fetch_assoc()) {
                                    $itemId = $row2["itemID"];
                                    $itemName = $row2["itemName"];
                                    $price = $row2["itemPrice"];
                                    $qty = $row2["quantity"];
                                    $total = $row2["price"] * $qty;
                                    $image = $row2["image"];
                        }      
                        ?>
                        <img src = "<?php echo $image ?>" width ="100%" style = "border : 1px solid lightgrey;">
                        <center><label><?php echo $itemName ?></label></center>
                        <center><label id = "price1"><?php echo $currencyName . ' : ' . number_format((float)  $price * $currency, 2, '.', '') ?></label></center><br/>
                        <a id ="div_button" href = "cart.php?add=<?php echo $items ?>" onclick="alert_cart()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to the cart</a>
                    </div>

                    <div class = "image_right column">
                        <?php ++$items;
                        $sql3 = "SELECT * FROM item WHERE itemID = $items";
                        $result3 = $con -> query($sql3);
                        while ($row3 = $result3->fetch_assoc()) {
                                    $itemId = $row3["itemID"];
                                    $itemName = $row3["itemName"];
                                    $price = $row3["itemPrice"];
                                    $qty = $row3["quantity"];
                                    $total = $row3["price"] * $qty;
                                    $image = $row3["image"];
                        }
                        ?>
                        <img src = "<?php echo $image ?>" width ="100%" style = "border : 1px solid lightgrey;">
                        <center><label><?php echo $itemName ?></label></center>
                        <center><label id = "price1"><?php echo $currencyName . ' : ' . number_format((float)  $price * $currency, 2, '.', '') ?></label></center><br/>
                        <a id ="div_button" href = "cart.php?add=<?php echo $items ?>" onclick="alert_cart()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to the cart</a>
                    </div>
                    
                    <?php 
                    } ?>

                    <center>
                        <div class = "pagin">
                            <a href = "">&laquo;</a>
                            <a class = "active" href = "index.html">1</a>
                            <a href = "index2.html">2</a>
                            <a href = "index3.html">3</a>
                            <a href = "index4.html">4</a>
                            <a href = "index5.html">5</a>
                            <a href = "index6.html">6</a>
                            <a href = "index7.html">7</a>
                            <a href = "">&raquo;</a>
                        </div>
                    </center>
                </div>
            </form>




            <div class="right column sign whatsnew">
                <form class = "whatsnew">
                    <center><h3>WHAT'S NEW</h3>
                        <label><font size = "5px">New Branded watches, toys, Gift cards and gift vouchers are now available and you can search new items here. 
                            And we also published new discount offers for customers. Hope you'll enjoy</font></label>
                        <br/>
                        <br/>
                        <a href = "newbrands.html">New brands</a><br/>
                        <a href = "greetingcards.html">Greeting cards</a><br/>
                        <a href = "discountoffers">Discount offers</a><br/>
                        <a href = "categories">more</a><br/>
                    </center>
            </div>

            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>

    </body>
</html>
