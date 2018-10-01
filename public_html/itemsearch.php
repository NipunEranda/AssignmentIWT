<?php include_once 'components/header.php'; ?>
<?php
if(empty($_SESSION['username'])){?>
    <script>document.getElementById('log').style.display = 'none';</script>
    <script>document.getElementById('profile').style.display = 'none';</script>
<?php
    }
?>

<html>
    <head>
        <title>My Cart</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/cart.css">
    </head>
    <body background = "images/backgrounds/cart_background.jpg">
        <div id="maincontainer1">

            <div class="left column">
                <div class = "categories">
                    <label><b>Categories</b></label><br><br>
                    <label>Flowers</label><br>
                    <label>Greeting cards</label><br>
                    <label>Jewelries</label><br>
                    <label>Perfumes</label><br>
                    <label>More Gifts</label><br><br>
                    <label><b>Help</b></label><br><br>
                    <label>How to buy</label><br>
                    <label>Order status</label><br>
                    <label>Contact Help Desk</label><br>
                </div>
            </div>
            <center>
                <div id = "cart_table">
                    <?php
                    if (isset($_POST['search'])) {
                        $searchId = $_POST['searchtext'];
                        $search = "SELECT * FROM item WHERE itemName LIKE '%$searchId%'";
                        $res = $con->query($search);
                        if ($res == true) {
                            if ($res->num_rows > 0) {
                                ?>
                                <center>
                                    <h1 style = "color: black;">Search Results</h1>

                                    <table border = "1" class="table" style = "text-align: center;">
                                        <tr>
                                            <th>View</th>
                                            <th>Item Name</th>
                                            <th>Item Price</th>
                                            <th>Item Availability</th>
                                        </tr>
                                        <?php
                                        while ($row = $res->fetch_assoc()) {
                                            $itemName = $row['itemName'];
                                            $itemPrice = $row['itemPrice'];
                                            $image = $row['image'];
                                            $qty = $row['quantity'];
                                            ?>
                                            <tr>
                                                <td><img src = "<?php echo $image; ?>" width = '100px' height = '100px' style = "margin: 2% 3% 2% 3%;"/></td>
                                                <td><?php echo $itemName ?></td>
                                                <td><?php echo $itemPrice ?></td>
                                                <td><?php if($qty == 0){echo 'Not Available';}else{echo $qty;} ?></td>
                                            </tr>

                                        <?php } ?>
                                    </table>
                                </center>
                                <?php
                            } else {
                                $msg = "No results";
                                ?>
                                <div id = "msg" onclick = "location.href = 'Homepage.php'"><label><?php echo $msg ?></label></div>
                                        <?php
                                    }
                                } else {
                                    echo "Something Wrong";
                                }
                            }
                            ?>
                </div>

            </center>
        </div>
    </body>
</html>
<?php include_once 'components/footer.php'; ?>