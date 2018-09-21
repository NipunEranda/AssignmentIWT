<!DOCTYPE html>
<?php include 'components/header.php'; ?>
<?php include 'components/logincheck.php';?>
<html>
    <head>
        <title>FeedBack</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/feedback.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script src = "js/feedback.js"></script>
    </head>
    <body background = "images/backgrounds/background7.jpg">
        
        <div id="maincontainer">
            <div class = "form">
                <form action = "" method="POST">
                    <center>
                        <div>
                            <span style="font-size:100px;color:orange;">&starf;</span><label style = "font-size:60px; font-weight: bold;">FEEDBACK</label>
                        </div>
                        <br/>

                        <img src = "images/user.jpg" style = "width:15%; border: 1px solid black;margin-bottom: 1%">
                        <br/><br/>
                        <label style = "font-size: 30px">Rate Us</label>
                        <div class="rating">
                            <span><input type="radio" name="rating" id="str5" value="5"><label for="str5">&starf;</label></span>
                            <span><input type="radio" name="rating" id="str4" value="4"><label for="str4">&starf;</label></span>
                            <span><input type="radio" name="rating" id="str3" value="3"><label for="str3">&starf;</label></span>
                            <span><input type="radio" name="rating" id="str2" value="2"><label for="str2">&starf;</label></span>
                            <span><input type="radio" name="rating" id="str1" value="1"><label for="str1">&starf;</label></span>
                        </div>

                        <textarea></textarea>
                        <br/>
                        <input type = "submit" value = "Send" name = "send" style = "width: 100px;height: 45px; margin-bottom: 2%;">
                    </center>

                </form>
            </div>
            
            <?php include_once 'components/footer.php'; ?>
            
    </body>
</html>
