<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/aboutUs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background = "images/backgrounds/background9.jpg">
        
        <?php include 'components/header.php'; ?>
        
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
                            <a href = "companyInfo.html">
                                <img src = "images/company.jpg" width="100%">
                                <br/><br/>
                                <label>Company info</label>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div id = "img_container">
                            <a href = "customerCare.html">                            
                                <img src = "images/customercare.jpg" width="100%">
                                <br/><br/>
                                <label>Customer Care</label>
                            </a>
                        </div>
                    </center>
                </div>

                <div class = "about_middle left">
                    <center>
                        <div id = "img_container">
                            <a href = "ownerDetails.html">
                                <img src = "images/owner.jpg" width="100%">
                                <br/><br/>
                                <label>Owner Details</label>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div id = "img_container">
                            <a href = "companyinfo.html">
                                <img src = "images/privacy_policy.jpg" width="100%">
                                <br/><br/>
                                <label>Privacy Policy</label>
                            </a>
                        </div>
                    </center>
                </div>

                <div class = "about_right left">
                    <center>
                        <div id = "img_container">
                            <a href = "staffInfo.html">
                                <img src = "images/staff.jpg" width="100%">
                                <br/><br/>
                                <label>Staff info</label>
                            </a>
                        </div>
                    </center>

                    <center>
                        <div id = "img_container">
                            <a href = "contact.html">
                                <img src = "images/contactinfo.jpg" width="100%">
                                <br/><br/>
                                <label>Contact info</label>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>
        
    </body>
</html>
