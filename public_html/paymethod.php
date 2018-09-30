
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Payment Method</title>
        <link rel = "stylesheet" href = "css/styles.css">
		<link rel = "stylesheet" href = "css/paymethod.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" tye="text/css" href="style/stylesheet.css"/>
        <link rel="main" href="scripts/main.js">        
		
		<style>
		body {
				background-image: url("images/pay.jpg");
                font-family: Arial, Helvetica, sans-serif;
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
    <body>
	<?php
// define variables and set to empty values
$nameErr =  $cdnumberErr = $cdtypeErr = $cvvErr = $MonthErr = $DOBYearErr = "";
$name =  $cdnumber = $cdtype = $comment = $Month = $DOBYear = $cvv = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = " ";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["cdnumber"])) {
    $emailErr = "Card number is required";
  } else {
    $cdnumber = test_input($_POST["cdnumber"]);
    // check if e-mail address is well-formed
    //if (!filter_var($cdnumber, FILTER_VALIDATE_EMAIL)) {
     // $emailErr = "Invalid email format"; 
    //}
  }
    
  if (empty($_POST["Month"])) {
    $MonthErr = "Month is required";
  } else {
    $Month = test_input($_POST["Month"]);
  }
  
  if (empty($_POST["DOBYear"])) {
    $DOBYearErr = "Year is required";
  } else {
    $DOBYear = test_input($_POST["DOBYear"]);
  }
  
  

  if (empty($_POST["cvv"])) {
    $cvvErr = "*";
  } else {
    $cvv = test_input($_POST["cvv"]);
  }

  if (empty($_POST["cdtype"])) {
    $cdtypeErr = "Card type is required";
  } else {
    $cdtype = test_input($_POST["cdtype"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	
	
        <ul class = "heading_ul">
            <li id = "header_li"><a class = "active" href = "index.html">Home</a></li>
            <li id = "header_li"><a href = "aboutUs.html">About Us</a></li>
            <li id = "header_li"><a href = "contactUs.html">Contact Us</a></li>
            <li id = "header_li"><a href = "feedBack.html">Rate Us</a></li>
            <li id = "header_li"><a href = "myAccount.html">My Account</a></li>
        </ul>


        <div class = "header1">
            <img src = "images/ico4.png" width = "200px" height = "200px" alt = "icon" style = "padding: 5px 0px 0px 5px;">
            <b class = "topic">GIFT BAY</b>
            <table style = "float : right; padding : 55px 3px;color:white;">
                <tr><td>My cart &nbsp;&nbsp;&nbsp;</td></tr>
                <tr><td>0 items</td></tr>
            </table>
            <img class = "cart" src = "images/cart_white.png" width = "100" height = "80" alt = "cart_image">
        </div>
        <div class="navbar">
            <div class = "dropDown">
                <button class = "dropDownbtn">All Categories</button>
                <div class = "dropDown-content">
                    <a href = "">Gift Baskets</a>
                    <a href = "">Gift For Her</a>
                    <a href = "">Gift For Him</a>
                    <a href = "">Books</a>
                    <a href = "">Chocolates</a>
                    <a href = "">Electronics</a>
                    <a href = "">Perfume</a>
                    <a href = "">Gift Vouchers</a>
                    <a href = "">Teddy bears</a>
                    <a href = "">Clothes</a>
                    <a href = "">Jewelry</a>
                    <a href = "">Fathers Day Gifts</a>
                    <a href = "">Cakes</a>
                </div>
            </div>
            
        </div>
        <div id="maincontainer">
            <!--BODY STARTS-->
		
               <div class="PaymentMethod" style="background-color:black;opacity: 0.80;">
                    <h3 style="font-size:150%;"><b> <font style="color:red;position:left; margin-left:10%;margin-top:-3%;">Payment Method</font> </b></h3>
                    <br>
                    <form action=" " method="post" enctype="text/plain">
                        <table style>
                            <tr><td>  
								<table class = "table_position">
									<tr><td> 
											<p><button class="paypal ">PayPal  <i class="fa fa-cc-paypal" style="font-size:40px;"></i></button></p>	


											<button id="myBtn" class="paycards">Credit Card or Debit Card <i class="fa fa-credit-card" style="font-size:36px"></i></button>

                    <div id="myModal" class="modal">
                    <div class="modal-content">
                     <span class="close">&times;</span>
                                    
                    <div id="maincontainer" style = "padding: 0px 10% 0px 20%;">

                         <table style=" position:absolute;margin-top:-10%;">
                          <tr>
                         <td>
                         
                        ​  <div>
                                     <h2> <font style="color:red;position:left; margin-left:10%;margin-top:13%;">Payment Sheet</font></h2>
                          <form id="payform" name="Payment" onSubmit="return validateForms()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <br>
                    
                                     
                                <p><span class="error">* required field</span></p>
       
                          <b>
                            <div style="textcolor:black;">
                                <label for="prodect code"> Card Holder name :</label>                                     
                                <input type="text" name="name" style="width: 40%;margin-top: -3%;margin-left:0;" class = "form-control" id="prodect code" value="<?php echo $name;?>" >
								<span class="error">* <?php echo $nameErr;?></span>
                            </div>
                         </b>
                        <br>
                            
                            
                            <div style="textcolor:black;">
                            <b><label for="cdtype" >Select the card type</label></b>
                            
                                <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype=="Visa") echo "checked";?> value="Visa"  />
                                <span><i class="fa fa-cc-visa" style="font-size:30px;"></i> </span>
                                
                                <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype=="master") echo "checked";?> value="master" />
                                <span><i class="fa fa-cc-mastercard" style="font-size:30px;"></i></span>
                                    
                                <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype=="american") echo "checked";?> value="american" />
                                <span><i class="fa fa-cc-amex" style="font-size:30px;"></i></span>
                                   
                                <input type="radio" class="inputtext" id="cdtype" name="cdtype" <?php if (isset($cdtype) && $cdtype=="discover") echo "checked";?> value="discover" />
                                <span><i class="fa fa-cc-discover" style="font-size:30px;"></i></span>  
                                
                            </div>
                            <br>
                            
                             <div style="textcolor:black;">
                              <label for="cdnumber">Card Number :</label></b>
                                <input type="text" class="inputtext" id="cdnumber" name="cdnumber" placeholder="1111-2222-3333-4444" value="<?php echo $cdnumber;?>" required />
								<span class="error">* <?php echo $cdnumberErr;?></span>
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
							<span class="error"><?php echo $MonthErr;?></span>
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
							<span class="error"><?php echo $DOBYearErr;?></span>
                            </select>
                        

                            </div>
                            <br>
                            
                            <div style="textcolor:black;">
                              <label for="cvv">*Security Code </label>
                                <input type="text" id="cvv" name="cvv" style="width:40%;" value="<?php echo $cvv;?>" placeholder=" ">
								<span class="error"><?php echo $cvvErr;?></span>
								
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
echo  $name;
echo "</br>";
echo "<h4>Your Input:</h4>";
echo $cdnumber;
echo "</br>";
echo "<h4>Your Input:</h4>";
echo  $Month;
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


                        											<p><button class="storepickup">Store Pickup <span class="glyphicon glyphicon-phone"></span>
                        											</button></p>
                        									</td></tr>
                        								</table>
                        							</td></tr>
                                                </table>
                                            </form>
                   

                                    <!--Body Ends-->
  </div>
                        			
  <div class="footercontainer0" style = "margin-bottom:0%;margin-top:60%;background: lightgrey;">

      <div class = "footercontainer1">
          <table style = "border-right-style: solid;border-right-width: 01px;border: 165px;">
              <tr><th colspan="2"><label>BROWSE MORE GIFTS</label></th><tr>
              <tr><th colspan="3"><hr class = "footerhr"></th><tr>
              <tr><td><label>For Birthdays</label></td><td></td><td>Cakes</td></tr>
             <tr><td><label>For Anniversaries</label></td><td></td><td>Flowers</td></tr>
              <tr><td><label>For Love</label></td><td></td><td>Chocolate</td></tr>
              <tr><td><label>For Christmas</label></td><td></td><td>Toys</td></tr>
              <tr><td><label>You and Me Collection</label></td>
          </table>
      </div>
			
            <div style="background-color:#222222;padding:13px;width:50%;position:absolute;margin-left:50%;text-align:right;">
         
                <img src = "images/send.png" width="25px" height="15px"/><label>Follow Us</label><br/>
                <img src = "images/instagram.png" width="27px" height="17px"/>&nbsp;&nbsp;&nbsp;<img src = "images/google.png" width="17px" height="17px"/>&nbsp;&nbsp;&nbsp;<img src = "images/twitter.png" width="17px" height="17px"/>&nbsp;&nbsp;&nbsp;<img src = "images/facebook.png" width="17px" height="17px"/><br/><br/>
                <label>Central office - Sri Lanka</label><br/>
                <label>Company Address</label><br/>
                <label>Hotline : 0770514865</label></br>
                <label>E-mail : giftbay@gmail.com</label></br>
            </div>

            <div class = "footercontainer0" style = "position:absolute;margin-top:14%;height: 30px;text-align: left;">
                <label>Copyright &copy; 2018 Gift Bay Powered by SLIIT. Online shopping for Sri Lankans around the world.</label>
                <img src = "images/visa.png"  width="30px" height="30px" style = "float: right;padding-right: 5px">
                <img src = "images/paypal.png"  width="30px" height="30px" style = "float: right;padding-right: 5px">
                <img src = "images/mastercard.png" width="30px" height = "30px" style = "float : right;padding-right: 5px;">
                <img src = "images/americanExpress.png" width="30px" height="30px" style = "float: right;padding-right: 5px">
            </div>
			</div>
	</div>
	</div>

        <script> 
            //card number check
      function checkcrd(form)  
      {  
       var a = document.forms["payform"]["cdnumber"].value; 
            Check = /^(?:3[47][0-9]{13})$/;
        if(!a.match(Check)) {  
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
    btn.onclick = function() {
        modal.style.display = "block";
    }
    btn1.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
        </script>

    </body>
</html>
