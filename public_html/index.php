<!DOCTYPE html>

<?php
include 'components/header.php';
include 'components/login.php';
?>

<html>
    <head>
        <title>Home page</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "js/index.js"></script>
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

                    <div class = "image_left column">
                        <img src = "images/bcake1.jpg" width ="100%" style = "border: 1px solid lightgray;"><br/>
                        <center><label>A red cake with a teddy bear</label></center>
                        <center><label id = "price1">$10.45</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_middle column">
                        <img src = "images/bear.jpg" width ="100%" style = "border : 1px solid lightgrey;"><br/>
                        <center><label>Teddy</label></center>
                        <center><label id = "price1">$4.24</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_right column">
                        <img src = "images/card1.jpg" width ="100%" style = "border : 1px solid lightgrey;"><br/>
                        <center><label>Best Mom</label></center>
                        <center><label id = "price1">$1.57</label></center><br/>
                        <button  class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_left column">
                        <img src = "images/card2.jpg" width ="100%" style = "border: 1px solid lightgrey;"><br/>
                        <center><label>I &hearts; THATHTHI greeting card</label></center>
                        <center><label id = "price1">$1.37</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_middle column">
                        <img src = "images/choco1.jpg" width ="100%" style = "border : 1px solid lightgrey;"><br/>
                        <center><label>Ferrero Rocher 30 pack</label></center>
                        <center><label id = "price1">$26.05</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_right column">
                        <img src = "images/choco3.jpg" width ="100%" style = "border: 1px solid lightgrey;"><br/>
                        <center><label>Ferrero Rocher pack & flowers</label></center>
                        <center><label id = "price1">$47.34</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_left column">
                        <img src = "images/jew1.jpg" width ="100%" style = "border : 1px solid lightgrey;"><br/>
                        <center><label>Crystal Water Drop</label></center>
                        <center><label id = "price1">$11.75</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

                    <div class = "image_middle column">
                        <img src = "images/dairymilk.jpg" width ="100%" style = "border : 1px solid lightgrey;"><br/>
                        <center><label>Cadbury Dairy Milk</label></center>
                        <center><label id = "price1">$9.27</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>


                    <div class = "image_right column">
                        <img src = "images/Fogg_scent.jpg" width ="100%" style = "border : 1px solid lightgrey;"><br/>
                        <center><label>Fogg Scent I Am Queen</label></center>
                        <center><label id = "price1">$13.71</label></center><br/>
                        <button class = "div_button1" onclick = "alert_guest_purchase()"><i class="fa fa-shopping-cart" style="font-size:15px; color:black;margin-right: 5px;"></i>Add to cart</button>
                    </div>

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


                <div class="right column sign">
                    <center><form name = "login" action = "" method = "POST" style = "margin: 8% 5% 15% 5%;">
                            <center>
                                <h1>LOGIN</h1>
                                <label style = "float: left;font-size: 20px;">Email</label><input type = "email" id ="usr_email" name="usr_email" placeholder = "Your email" required style = "height: 20px;width: 60%;float: right;"><br/><br/>
                                <label style = "float: left;font-size: 20px;">Password</label><input type = "password" id ="usr_password" name = "usr_password" placeholder = "Your password" required style = "height: 20px;width: 60%;float: right;"><br/>
                                <p><?php echo $error ?></p>
                                <input type = "submit" name = "usr_login" value = "Login" onclick = ""><br>
                                <br/>
                                <a href = "registration.php" style = "float: right;text-decoration: none;">Create an Account.</a>
                            </center>
                        </form>
                    </center>
                </div>


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
                    </form>
                </div>

                <!--Body Ends-->
            </div>

            <?php include_once 'components/footer.php'; ?>

    </body>
</html>
