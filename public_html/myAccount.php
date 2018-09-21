<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/logincheck.php';?>
<html>
    <head>
        <title>My Account</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/myAccount.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "js/myAccount.js"></script>
    </head>
    <body background = "images/backgrounds/background10.jpg">


        <div id="maincontainer">
            <!--BODY STARTS-->
            <div id = "container2">

                <div class = "myAccount_left left">
                    <div class="btn-group"> 
                        <button><strong>My Account</strong></button>
                        <button>Account Dashboard</button>
                        <button>Account info</button>
                        <button>My Orders</button>
                        <button>Product Reviews</button>
                        <button>Bookmarked Products</button>
                        <button>My Tags</button>
                    </div>
                </div>

                <div id = "inner-container" class = "myAccount_middle left">
                    <div>
                        <div class = "leftside left">
                            <img src = "images/user.jpg" class = "user">
                        </div>
                        <div class = "rightside left">
                            <button>Remove Image</button><br/><br/>
                            <button>Edit profile picture</button>
                        </div>
                    </div>
                    <div>
                        <form name="myForm" action=""onsubmit="return validateForm()" method="post">
                            <fieldset>
                                <legend><strong style = "font-size: 40px">Account Information:</strong></legend>
                                <p><strong style = "font-size: 30px;">Contact Informations</strong></p>
                                <label>Full Name: </label><input type="text" name="fname"><br/><br/>
                                <label>Last Name: </label><input type="text" name="lname"><br/><br/>
                                <label>Address: </label><input type="text" name="address"><br/><br/>
                                <label>Email: </label><input type="text" name="email"><br/><br/>
                                <label>Contact number: </label><input type = "text" name = "contact"><br/><br/>
                                <label>Zip or Postal code: </label><input type = "text" name = "postal"><br/><br/>
                                <button>Change Password</button><input type = "submit" name = "change" value = "Save Changes">
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class = "myAccount_right left">
                    <center>
                        <div class= "checkout">
                            <form action = "accountSettings.html">
                                <p><strong>Checkout Defaults</strong></p>
                                <label class = "left">Shipping method: </label>&nbsp;&nbsp;&nbsp;&nbsp;<label name = "shipping_method" class = "right"></label><br/><br/>
                                <label class = "left">Shipping address: </label>&nbsp;&nbsp;&nbsp;&nbsp;<label name = "shipping_address" class = "right">24/F, Galwarusawa road,<br/> Athurugiriya,<br/> Sri Lanka</label><br/><br/><br/>
                                <label class = "left">Credit Card: </label>&nbsp;&nbsp;&nbsp;&nbsp;<label name = "credit_card" class = "right">XXXXXXX</label><br/><br/>
                                <button>Edit</button>
                            </form>
                        </div>
                    </center>
                </div>
            </div>

            <!--Body ends-->

        </div>

        <?php include_once 'components/footer.php'; ?>

    </body>
</html>
