<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/config.php'; ?>

<?php
if (isset($_POST['submit'])) {

    $cou = "SELECT * FROM users";
    $res = $con->query($cou);
    $count = $res->num_rows;
    $userCount = $count + 1;
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $telNo = $_POST['telNo'];
    $CompanyName = $_POST['CompanyName'];
    $CompanyId = $_POST['CompanyId'];
    
    if($CompanyName == NULL && $CompanyName == NULL){
        $CompanyName = 'NULL';
        $CompanyId = 'NULL';
    }else if($CompanyName){
        $CompanyName = 'NULL';
    }else if($CompanyId == NULL){
        $CompanyId = 'NULL';
    }
    
    $Address = $_POST['Address'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $cpassword = $_POST['Cpassword'];

    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['telNo']) && !empty($_POST['Address'])  && !empty($_POST['postalCode']) && !empty($_POST['country'])) {
        if ($password == $cpassword) {
            $sql = "INSERT INTO users VALUES($userCount, '$firstName', '$lastName', '$email', '$telNo', '$Address', '$CompanyName', '$CompanyId', '$postalCode', '$country', '$password', 'NULL', '0', '0', '0')";
            $result = $con->query($sql);
            if($result == true){
            header('location: Homepage.php');
            }
        } else {
            ?>
            <center><div id = "msg"><label>Fill again.</label></div></center>
        <?php }
    } else {
        ?>
        <center><div id = "msg"><label>Fill again.</label></div></center>
        <?php
    }
}
?>

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
                <form name ="form1" action="" method="POST" >
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
                                    <li>Company Name(Optional) <input class="frmInput" type="text" name="CompanyName" id = "CompanyName"></li>
                                    <li>Company ID(Optional) <input class="frmInput" type="text" name="CompanyId" id = "CompanyId"></li>
                                    <li>Address <input class="frmInput" type="text" name="Address" id = "Address"></li>
                                    <li>Postal Code <input class="frmInput" type="text" name="postalCode" id = "postalCode"></li>
                                    <li>Country
                                        <select class="frmInput" name="country">
                                            <option>SriLanka</option>
                                            <option>India</option>
                                            <option>china</option>
                                            <option>Australia</option>
                                            <option>Brazil</option>
                                            <option>Canada</option>
                                            <option>Indonesia</option>
                                            <option>Qatar</option>
                                            <option>Singapore</option>
                                            <option>Zimbabwe</option>
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
                            <input class="frmButton" type="submit" value="Register" name ="submit" style = "margin-right: 3%;" onclick = "validateForm()">
                        </div>
                    </div>
                </form>
            </div>

            <!--Body Ends-->
        </div>

<?php include_once 'components/footer.php'; ?>

    </body>
</html>
