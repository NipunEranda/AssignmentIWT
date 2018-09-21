<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/logincheck.php';?>
<html>
    <head>
        <title>Packing solutions</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/packingSolutions.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background = "images/backgrounds/background11.jpg">
        
        <div id="maincontainer">
            <!--BODY STARTS-->
            <div class="topic_PS" style = "margin-left: 10%;">
                <label style = "font-size: 80px;font-weight: bold;">Packing solutions</label><br/>
                <label>Choose solution</label>
            </div>
            <br/><br/>
            <div style = "margin-bottom: 50%;">
                <form action="" method="POST" style = "margin-bottom: 1%;">
                    
                    <div class = "setrow1" style = "font-size: 30px;">
                        <div class="set1left">
                            <label>Heavy cardboard</label><br/>
                            <img src = "images/hardcardboard1.jpg">
                            <div class = "right input_boxes">
                                Length : <div class="right"><input type = "text" name = "HC_len" placeholder="cm"></div>
                                <br/><br/>Width : <div class="right"><input type = "text" name = "HC_wid" placeholder="cm"></div>
                            </div>
                        </div>
                        <div class="set1right">
                            <label>Bubble wrap</label><br/>
                            <img src = "images/bubblewrap.jpg">
                            <div class = "right input_boxes">
                                Length : <div class="right"><input type = "text" name = "BW_len" placeholder="cm"></div>
                                <br/><br/>Width : <div class="right"><input type = "text" name = "BW_wid" placeholder="cm"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class = "setrow2" style = "font-size: 30px;">
                        <div class="set2left">
                            <label>Decorations</label><br/>
                            <img src = "images/decorations.JPG">
                            <div class = "right input_boxes">
                                <input type = "radio" name = "decoration" value = "no decorations">No decorations
                                <br/><br/>
                                <input type = "radio" name = "decoration" value = "need decorations" checked>Need decorations
                            </div>
                        </div>
                        <div class = "set2right">
                            <label>Rigifoam Packing</label><br/>
                            <img src = "images/Rigifoam_packaging.png">
                            <div class = "right input_boxes">
                                Length : <div class="right"><input type = "text" name = "RP_len" placeholder="cm"></div>
                                <br/><br/>Width : <div class="right"><input type = "text" name = "RP_wid" placeholder="cm"></div>
                                <br/><br/>Loads up to 20kg : <div class="right"><input type = "text" id = "RP_wei" placeholder="kg"></div>
                            </div>
                        </div>
                        <div class="right buttonset">
                            <input type = "reset" Value = "Cancel" id = "cancel">
                            <input type = "submit" value = "Submit" id = "submit" onclick="weight()">
                        </div>
                    </div>
                </form>
            </div>
            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>
        
    </body>
</html>
