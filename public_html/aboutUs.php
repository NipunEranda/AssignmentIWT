<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php if (empty($_SESSION['username'])) { ?>
    <script>document.getElementById('log').style.display = 'none';</script>
    <script>document.getElementById('profile').style.display = 'none';</script>
    <?php
}
?>
<html>
    <head>
        <title>About Us</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/aboutUs.css">
        <link rel = "stylesheet" href = "css/floatingForm.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "js/floatingForm.js"></script>
        <script src = "js/index.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background = "images/backgrounds/background9.jpg">


        <div id="maincontainer" style = "padding: 0px 10% 0px 10%;">
            <!--BODY STARTS-->

            <div id = "container2">

                <div class = "container1">
                    <div style = "margin-bottom: 2%;">
                        <label style = "font-size: 65px;font-weight: bold;">About Us</label>
                    </div>
                    <div class = "intro">
                        <i class="fa fa-gift"></i>&nbsp;<label>GiftBay.com is the best Online Gift Shop in Sri Lanka. We have unique gifts for your beloved ones on their Birthday, Anniversary, Romantic, Wedding, Get well and many more. Whoever is the recipient, Send Surprise Gifts to your Loved Ones in Sri Lanka!!</label>
                    </div>
                </div>

                <div class = "about_left left">
                    <center>
                        <div id = "img_container">
                            <img src = "images/company.jpg" width="100%" onclick="document.getElementById('au1').style.display = 'block'">
                            <br/><br/>
                            <label>Company info</label>
                        </div>

                        <div id = "au1" class = "modal">

                            <div class="modal-content animate">

                                <div class="top">
                                    <span onclick="document.getElementById('au1').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <img class = "cover" src = "images/cover.jpg"/><br/>
                                    <h1>The Gift Bay Online Gift Shop</h1>
                                    <p> created by 2018 SLIIT FOC Group 1 Project Group 6.</p>
                                    <h2>Developing Team</h2>
                                    <br/>
                                    <label>Nipun Eranda</label><br/>
                                    <label>Dulsara Dilitha</label><br/>
                                    <label>Nishadini Karunarathne</label><br/>
                                    <label>Ninthujan Thileepan</label><br/>
                                    <label>Tharshigan</label><br/>

                                </div>

                            </div>
                        </div>
                    </center>

                    <center>
                        <div id = "img_container">                          
                            <img src = "images/customercare.jpg" width="100%" onclick="document.getElementById('au2').style.display = 'block'">
                            <br/><br/>
                            <label>Customer Care</label>
                        </div>

                        <div id = "au2" class = "modal">

                            <div class="modal-content animate">

                                <div class="top">
                                    <span onclick="document.getElementById('au2').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <img src = "images/backgrounds/customerCare.png" style = "width: 90%;">
                                    <h1>Customer care</h1>
                                    <p>Call us when you need informations, or Help. We Are Here.</p>
                                    <br/>
                                    <div class = "cCbuttons" onclick="document.getElementById('pass').style.display = 'block'">
                                        Changing your password
                                    </div><br/>
                                    <div class = "cCbuttons" onclick="document.getElementById('Userdetails').style.display = 'block'">
                                        Changing your contact details
                                    </div><br/>
                                </div>

                                <div id = "pass" class = "modal">

                                    <div class="modal-content animate">

                                        <div class="top">
                                            <span onclick="document.getElementById('pass').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                        </div>

                                        <div class="innercontainer">
                                            <p>Whether you've simply forgotten your password and need to reset it,<br/> or want to make a change for security reasons, it's easy to change your Gift Bay password. To protect your account though, we'll always first ask you to confirm your identity using email or text.</p>
                                            <h4>To change your password, select the button below and then follow these steps:</h4><br/><br/>

                                            <div class = "liset">
                                                <ol>
                                                    <li>Enter your email address or username and select Continue.</li><br/>
                                                    <li>Choose how you'd like to change your password:</li><br/>
                                                    <ul>
                                                        <li>Email: We'll send you an email that should arrive within five minutes. Then click the button in the email, or copy and paste the link</li><br/>
                                                        <li>Text: We'll text a PIN to your mobile number. Enter the PIN you receive, then select Continue</li><br/>
                                                    </ul>

                                                    <li>Enter your new password, and select <b>Continue</b>.</li><br/>

                                                    <p>Both the email link and the PIN are valid for 24 hours from when we send them to you.</p>
                                                </ol>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id = "Userdetails" class = "modal">

                                    <div class="modal-content animate">

                                        <div class="top">
                                            <span onclick="document.getElementById('Userdetails').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                        </div>

                                        <div class="innercontainer">
                                            <p>If you change your address or phone number, or set up a new email address,<br/>
                                                make sure to update your contact details so your Gift Bay account information remains correct.</p>
                                            <h3>How to change your registered email address</h3>

                                            <div class = "liset">
                                                <p>Your registered email address is where we'll send you notifications on all of your account activity, so it's important to keep it up to date.
                                                    <br/>If you need to change your registered email address, select the button below or follow these instructions:</p><br/>
                                                <ol>
                                                    <li>Go to My Account and there you can find Account informations</li>
                                                    <li>There you can enter new details to the form.</li>
                                                    <li>Then click Save changes.</li>
                                                    <li>You will receive a email if entering details succeed.</li>
                                                </ol>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                    </center>
                </div>

                <div class = "about_middle left">
                    <center>
                        <div id = "img_container">
                            <img src = "images/owner.jpg" width="100%" onclick="document.getElementById('Owner').style.display = 'block'">
                            <br/><br/>
                            <label>Owner Details</label>
                        </div>

                        <div id = "Owner" class = "modal">

                            <div class="modal-content animate">

                                <div class="top">
                                    <span onclick="document.getElementById('Owner').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <?php
                                    $selectOwner = "SELECT * FROM users WHERE is_owner = '1'";
                                    $result = $con->query($selectOwner);
                                    if ($result->num_rows > 0) {
                                        ?>
                                        <?php
                                        while ($row = $result->fetch_assoc()) {
                                            $tele = $row['tele'];
                                            $email = $row['email'];
                                            $fname = $row['firstName'];
                                            $lname = $row['lastName'];
                                            ?>

                                            <img class = "profiles" src = "<?php echo $row['image'] ?>">

                                        <?php }
                                    }
                                    ?><br/>

                                    <label style = "font-size: 60px;"><?php echo $fname . " " . $lname ?></label>
                                    <p style = "font-size: 30px;">Creator of the GiftBay Online Gift shop.</p>

                                    <label>Mobile : <?php echo $tele ?></label><br/>
                                    <label>Email : <?php echo $email ?></label>

                                </div>

                            </div>
                        </div>
                    </center>

                    <center>
                        <div id = "img_container">
                            <img src = "images/privacy_policy.jpg" width="100%" onclick="document.getElementById('Policy').style.display = 'block'">
                            <br/><br/>
                            <label>Privacy Policy</label>
                        </div>

                        <div id = "Policy" class = "modal">

                            <div class="modal-content animate">

                                <div class="top">
                                    <span onclick="document.getElementById('Policy').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <h1>Privacy Policy</h1>
                                </div>

                            </div>
                        </div>

                    </center>
                </div>

                <div class = "about_right left">
                    <center>
                        <div id = "img_container">
                            <img src = "images/staff.jpg" width="100%" onclick="document.getElementById('staff').style.display = 'block'">
                            <br/><br/>
                            <label>Staff info</label>
                        </div>

                        <div id = "staff" class = "modal">

                            <div class="modal-content animate">

                                <div class="top">
                                    <span onclick="document.getElementById('staff').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                                </div>

                                <div class="container">
                                    <label style = "font-size: 50px;">Our Staff</label><br/><br/><br/>
                                    <?php
                                    $select = "SELECT * FROM users WHERE in_staff = '1' or is_owner = '1'";
                                    $res = $con->query($select);
                                    if ($res->num_rows > 0) {
                                        ?>
                                        <?php while ($row = $res->fetch_assoc()) { ?>
                                            <img class = "profiles" src = "<?php echo $row['image'] ?>">
                                        <?php } ?>
<?php } ?>
                                </div>

                            </div>
                        </div>

                    </center>

                    <center>
                        <div id = "img_container">
                            <img src = "images/contactinfo.jpg" width="100%" onclick = "location.href = 'Contact.php'">
                            <br/><br/>
                            <label>Contact info</label>
                        </div>

                    </center>
                </div>
            </div>
            <!--Body Ends-->
        </div>

<?php include_once 'components/footer.php'; ?>

    </body>
</html>
