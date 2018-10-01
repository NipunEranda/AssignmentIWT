<?php include_once 'components/header.php'; ?>
<?php
$user = $_SESSION['id'];
?>
<html>
    <head>
        <title>
            Add Category
        </title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/admin.css">
    </head>
    <body background = "images/backgrounds/background9.jpg">
        <div id="maincontainer1">
<center>
            <div id ="buttonSet">
                <div id = "btn1" class = "cCbuttons" onclick = "location.href = 'addItem.php'">
                    Add items
                </div>
                <div id = "btn2" class = "cCbuttons" onclick = "location.href = 'addCategory.php'">
                    Add categories
                </div>
            </div>
    </center>
    </div>
</body>
        <?php include_once 'components/footer.php'; ?>
</html>