<?php include_once './components/header.php'; ?>
<?php
$user = $_SESSION['id'];
?>
<html>
    <head>
        <title>Order</title>
    <head>
        <title>Payment Method</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/paymethod.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" tye="text/css" href="css/stylesheet.css"/>
        <link rel="main" href="scripts/main.js">        

        <style>
            body{
                background-image: url("images/backgrounds/background9.jpg");
            }
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                right: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 50%;
                height: 120%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }


        </style>

    </head>

</head>
<body>
    <div id="maincontainer1">
        <div class="PaymentMethod" style="background-color:black;opacity: 0.80;">
            <h3 style="font-size:150%;"><b> <font style="color:red;position:left; margin-left:10%;margin-top:-3%;">Payment Method</font> </b></h3>
            <br>
            <form action=" " method="post" enctype="text/plain">
                <table style>
                    <tr><td>  
                            <table class = "table_position">
                                <tr><td> 
                                        <button class="paypal " onclick = "location.href = 'http://paypal.com'">PayPal  <i class="fa fa-cc-paypal" style="font-size:40px;"></i></button><br/><br/>


                                        <button id="myBtn" class="paycards">Credit Card or Debit Card <i class="fa fa-credit-card" style="font-size:36px"></i></button><br/>

                                        <div id="myModal" class="modal">
                                            <div class="modal-content">
                                                <span class="close">&times;</span>

                                                <div id="maincontainer" style = "padding: 0px 10% 0px 20%;">

                                                    <table style=" position:absolute;margin-top:-10%;">
                                                        <tr>
                                                            <td>

                                                                ​  <div>
                                                                    <h2> <font style="color:red;position:left; margin-left:10%;margin-top:13%;">Payment Sheet</font></h2>
                                                                    <form id="payform" name="Payment" onSubmit="return validateForms()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                                        <br>


                                                                        <p><span class="error">* required field</span></p><br/>

                                                                        <b>
                                                                            <div style="textcolor:black;">
                                                                                <label for="prodect code"> Card Holder name :<br/></label><input type="text" name="name" style="width: 40%;margin-top: -3%;margin-left:0;" class = "form-control" id="prodect code" value="<?php echo $name; ?>" >
                                                                                <span class="error"> <?php echo "*" . $nameErr; ?></span>
                                                                            </div>
                                                                        </b>
                                                                        <br>


                                                                        <div style="textcolor:black;">
                                                                            <b><label for="cdtype" >Select the card type</label></b>

                                                                            <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype == "Visa") echo "checked"; ?> value="Visa"  />
                                                                            <span><i class="fa fa-cc-visa" style="font-size:30px;"></i> </span>

                                                                            <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype == "master") echo "checked"; ?> value="master" />
                                                                            <span><i class="fa fa-cc-mastercard" style="font-size:30px;"></i></span>

                                                                            <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype == "american") echo "checked"; ?> value="american" />
                                                                            <span><i class="fa fa-cc-amex" style="font-size:30px;"></i></span>

                                                                            <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype == "discover") echo "checked"; ?> value="discover" />
                                                                            <span><i class="fa fa-cc-discover" style="font-size:30px;"></i></span>  

                                                                        </div>
                                                                        <br>

                                                                        <div style="textcolor:black;">
                                                                            <label for="cdnumber">Card Number :</label></b>
                                                                            <input type="text" class="inputtext" id="cdnumber" name="cdnumber" placeholder="1111-2222-3333-4444" value="<?php echo $cdnumber; ?>" required />
                                                                            <span class="error">* <?php echo $cdnumberErr; ?></span>
                                                                        </div>
                                                                        <br>

                                                                        <div style="textcolor:black;">
                                                                            <b><label>Expiration Date</label>
                                                                                <select name="Month" value="<?php echo $Month; ?>">
                                                                                    <option> Month </option>
                                                                                    <option value="1"> 1 </option>
                                                                                    <option value="2"> 2 </option>
                                                                                    <option value="1"> 3 </option>
                                                                                    <option value="1"> 4 </option>
                                                                                    <option value="1"> 5 </option>
                                                                                    <option value="1"> 6 </option>
                                                                                    <option value="1"> 7 </option>
                                                                                    <option value="1"> 8 </option>
                                                                                    <option value="1"> 9 </option>
                                                                                    <option value="1"> 10 </option>
                                                                                    <option value="1"> 11 </option>
                                                                                    <option value="1"> 12 </option>
                                                                                    <span class="error"><?php echo $MonthErr; ?></span>
                                                                                </select>

                                                                                <select name="DOBYear" value="<?php echo $DOBYear; ?>">
                                                                                    <option> Year </option>
                                                                                    <option value="1995"> 2018 </option>
                                                                                    <option value="1996"> 2019 </option>
                                                                                    <option value="1997"> 2020 </option>
                                                                                    <option value="1998"> 2021 </option>
                                                                                    <option value="1999"> 2022 </option>
                                                                                    <option value="2000"> 2023 </option>
                                                                                    <option value="2000"> 2024 </option>
                                                                                    <option value="2000"> 2025 </option>
                                                                                    <option value="2000"> 2026 </option>
                                                                                    <option value="2000"> 2027 </option>
                                                                                    <option value="2000"> 2028 </option>
                                                                                    <option value="2000"> 2029 </option>
                                                                                    <option value="2000"> 2030 </option>
                                                                                    <option value="2000"> 2031 </option>
                                                                                    <option value="2000"> 2032 </option>
                                                                                    <option value="2000"> 2033 </option>
                                                                                    <option value="2000"> 2034 </option>
                                                                                    <option value="2000"> 2035 </option>
                                                                                    <option value="2000"> 2036 </option>
                                                                                    <option value="2000"> 2037 </option>
                                                                                    <option value="2000"> 2038 </option>
                                                                                    <option value="2000"> 2039 </option>
                                                                                    <option value="2000"> 2040 </option>
                                                                                    <option value="2000"> 2041 </option>
                                                                                    <span class="error"><?php echo $DOBYearErr; ?></span>
                                                                                </select>


                                                                        </div>
                                                                        <br>

                                                                        <div style="textcolor:black;">
                                                                            <label for="cvv">*Security Code </label>
                                                                            <input type="text" id="cvv" name="cvv" style="width:40%;" value="<?php echo $cvv; ?>" placeholder=" ">
                                                                            <span class="error"><?php echo $cvvErr; ?></span>

                                                                        </div>
                                                                        </b>
                                                                        <br>
                                                                        <input type="submit" name="submit" id="myBtn1" value="Submit">

                                                                        <p>

                                                                        </p>
                                                                </div>
                                                                </form>
                                                                <div id="myModal" class="modal">

                                                                    <!-- Modal content -->
                                                                    <div class="modal-content">
                                                                        <span class="close1">&times;</span>
                                                                        <p>	
                                                                            <?php
                                                                            echo "<h2>Payment Details </h2>";
                                                                            echo "<h3>Your Input:</h4>";
                                                                            echo $name;
                                                                            echo "</br>";
                                                                            echo "<h4>Your Input:</h4>";
                                                                            echo $cdnumber;
                                                                            echo "</br>";
                                                                            echo "<h4>Your Input:</h4>";
                                                                            echo $Month;
                                                                            echo $DOBYear;
                                                                            echo "</br>";
                                                                            echo "<h4>Your Input:</h4>";
                                                                            echo $cdtype;
                                                                            echo "</br>";
                                                                            echo "<h4>Your Input:</h4>";
                                                                            echo $cvv;
                                                                            ?>
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                                </div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    </table>


                                                </div>
                                                </p>
                                            </div>

                                        </div>
<br/>

                                        <p><button class="storepickup">Store Pickup <span class="glyphicon glyphicon-phone"></span>
                                            </button></p>
                                    </td></tr>
                            </table>
                        </td></tr>
                </table>
            </form>


            <!--Body Ends-->
        </div>
        <?php include_once './components/footer.php'; ?>
        
            <script>
        //card number check
        function checkcrd(form)
        {
            var a = document.forms["payform"]["cdnumber"].value;
            Check = /^(?:3[47][0-9]{13})$/;
            if (!a.match(Check)) {
                alert("Error: Not a valid Amercican Express credit card number! ");
                return false;
            }
        }
// Get the modal
        var modal = document.getElementById('myModal');

// Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }
        btn1.onclick = function () {
            modal.style.display = "block";
        }

// When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

// When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
