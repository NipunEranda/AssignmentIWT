<!DOCTYPE html>
<html>
    <head>
        <title>Store Pickup</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/storePickup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style src = "js/storepickup.js"></style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background = "images/backgrounds/background5.jpg">
        
        <?php include 'components/header.php'; ?>
        
        <div id="maincontainer">
            <!--BODY STARTS-->

            <div class = "frame">
                <center><label class = "topic_form">STORE PICKUP</label></center><br/><br/>
                <form action = "" method = "POST" onsubmit="validate()">
                    <ul style = "list-style-type: none;">
                        <li><label>Customer name</label><input type = "text" name = "name" id = "Cname">
                            <select style = "float: right; height: 25px; margin-right: 30px;">
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Miss</option>
                            </select>
                        </li><br/>
                        <li><label>Address</label><input type = "text" name = "address1" id = "Address1"><label class = "label_position">(Line 1)</label></li><br/>
                        <li><input type = "text" name = "address2" id = "Address2"><label class = "label_position">(Line 2)</label></li><br/><br/>
                        <li><input type = "text" name = "city" id = "city"><label class = "label_position">(City)</label></li><br/><br/>
                        <li><input type = "text" name = "state" id = "state"><label class = "label_position">(State)</label></li><br/><br/>
                        <li><input type = "text" name = "postalCode" id = "postalCode"><label class = "label_position">(Postal Code)</label></li><br/><br/>
                        <li><label>E-mail Address</label><input type = "text" name = "e-mail" id = "email"></li><br/>
                        <li><label>Item Code</label><input type = "text" name = "itemCode" id = "itemCode"></li><br/>
                        <li><input type = "submit" name = "order" value = "Order" style = "float: right; width: 15%;height: 35px; border-radius: 10px;"></li>
                    </ul>
                </form>
            </div>
            <!--Body Ends-->
        </div>

        <?php include_once 'components/footer.php'; ?>
        
    </body>
</html>
