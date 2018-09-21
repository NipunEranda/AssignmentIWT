<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/config.php'; ?>

<html>
    <head>
        <title>Registration</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/createAccount.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "js/registration.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body  background = "images/backgrounds/background1.jpg" style = "background-repeat: no-repeat;">

        <div id="maincontainer">
            <!--BODY STARTS-->

            <div class = "createAccount">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit = "validateForm()">
                    <label>Create Account</label>
                    <div>
                        <div class = "form">
                            <ul style = "list-style-type: none;">
                                <li >Personal Details</li>
                                <ul>
                                    <li>First Name <input class="frmInput" type="text" name="firstName" id = "firstName"/></li>
                                    <li>Last Name <input class="frmInput" type="text" name="lastName" id = "lastName"></li>
                                    <li>E-mail <input class="frmInput" type="text" name="email" id = "email"></li>
                                    <li>Telephone Number <input class="frmInput" type="text" name="telNo" id = "telNo"></li>
                                </ul>
                                <li>Address</li>
                                <ul style = "list-style-type: none;">
                                    <li>Company Name <input class="frmInput" type="text" name="CompanyName" id = "CompanyName"></li>
                                    <li>Company ID <input class="frmInput" type="text" name="CompanyId" id = "CompanyId"></li>
                                    <li>Address <input class="frmInput" type="text" name="Address" id = "Address"></li>
                                    <li>Postal Code <input class="frmInput" type="text" name="postalCode" id = "postalCode"></li>
                                    <li>Country
                                        <select class="frmInput" name="country">
                                            <option>Sri Lanka</option>
                                            <option>India</option>
                                            <option>china</option>
                                        </select>
                                    </li>
                                </ul>
                                <li>Password</li>
                                <ul style = "list-style-type: none;">
                                    <li>Password <input class="frmInput" type="password" name="password" id = "password"></li>
                                    <li>Confirm Password <input class="frmInput" type="password" name="Cpassword" id = "cPassword"></li>
                                </ul>
                            </ul>
                        </div>


                        <div>
                            <input class="frmButton" type="reset">
                            <input class="frmButton" type="submit" value="Register" style = "margin-right: 3%;">
                        </div>
                    </div>
                </form>
            </div>

            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>

    </body>
</html>
