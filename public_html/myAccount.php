<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/logincheck.php'; ?>
<?php $a = $_SESSION['id']; ?>
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
                        <form name="myForm" action=""onsubmit="return validateForm()" method="post">
                            <fieldset>
                                <?php
                                $sql = "SELECT * FROM users WHERE user_id = $a";
                                $result = $con->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <legend><strong style = "font-size: 40px">Account Information:</strong></legend>
                                        <p><strong style = "font-size: 30px;">Contact Informations</strong></p>
                                        <label>Full Name: </label><input type="text" name="fname" value="<?php echo $row["firstName"]; ?>"><br/><br/>
                                        <label>Last Name: </label><input type="text" name="lname" value="<?php echo $row["lastName"]; ?>"><br/><br/>
                                        <label>Address: </label><input type="text" name="address" value="<?php echo $row["address"]; ?>"><br/><br/>
                                        <label>Email: </label><input type="text" name="email" value="<?php echo $row["email"]; ?>"><br/><br/>
                                        <label>Contact number: </label><input type = "text" name = "contact" value="<?php echo $row["tele"]; ?>"><br/><br/>
                                        <label>Zip or Postal code: </label><input type = "text" name = "postal" value="<?php echo $row["postalCode"]; ?>"><br/><br/>
                                        <label>Password : </label><input type = "text" name = "password" value = "<?php echo $row["pass"]; ?>"><br/><br/>
                                        <input type = "submit" name = "change" value = "Save Changes" onclick="return confirm('Are you sure?')">
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                
                                if(isset($_POST['change'])){
                                    $firstName = $_POST['fname'];
                                    $lastName = $_POST['lname'];
                                    $address = $_POST['address'];
                                    $email = $_POST['email'];
                                    $tele = $_POST['contact'];
                                    $postalCode = $_POST['postal'];
                                    $password = $_POST['password'];
                                    $insert = "UPDATE users set firstName = '$firstName', lastName = '$lastName', address = '$address', email = '$email', tele = '$tele', postalCode = '$postalCode', pass = '$password' WHERE user_id = $a";
                                    $res = $con -> query($insert);
                                    if($res == true){
                                        echo "";
                                    }else{
                                        echo "Unsuccessful!";
                                    }
                                }

                                ?>
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
