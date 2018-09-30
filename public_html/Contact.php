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
        <title>Contact Us</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/contactUs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src = "js/index.js"></script>
    </head>
    <body background = "images/backgrounds/contactUs.jpg">

        <div id="maincontainer1">
            <!--BODY STARTS-->

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4076.8568354901954!2d79.97165226854082!3d6.914898079163185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri+Lanka+Institute+of+Information+Technology!5e0!3m2!1sen!2slk!4v1533391229496" width="75%" height="550" frameborder="0" style="border:1px solid black;" allowfullscreen></iframe>
                <br/>
                <div class = "border">
                    <img src = "images/earth.png" width = "25px" width = "25px">
                    <label style = "font-size: 25px;">Our Office</label><br/><hr style = "width: 25%;display: inline-block;height: 1.5px; background-color: white; border: 1px solid black;"/>
                    <br/>
                    <label style = "font-size: 25px;"><b>Gift Bay</b></label><br/><br/>
                    <label>No 17,<br/>New Kandy road,<br/>Malabe.<br/></label><br/>
                    <label>Contact no : &nbsp;&nbsp;+94xx xxxx XXX(imo/Whtsapp/Viber)</label>
                    <br/><br/>
                    <label>Email : giftbay@gmail.com</label>
                </div>
            </div>


            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>

    </body>
</html>
