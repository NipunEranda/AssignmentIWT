<?php include_once './components/header.php'; ?>
<?php
$userId = $_SESSION['id'];
$user = $_SESSION['username'];

$sqlCurrency = "SELECT * FROM country_units WHERE country = (SELECT country FROM users WHERE user_id = $userId)";
$currencyRes = $con->query($sqlCurrency);
while ($row = $currencyRes->fetch_assoc()) {
    $_SESSION['currency'] = $row['currency_unit'];
    $_SESSION['currencyName'] = $row['unitName'];
}
?>

<?php
if (isset($_GET['clear'])) {
    if ($_GET[clear]) {
        unset($_SESSION['cart']);
        $clear = "DELETE FROM cart WHERE customerId = $userId";
        $con->query($clear);
        header("location: cart.php");
        exit();
    }
}

if (isset($_GET['add'])) {
    $item;
    $sql = "SELECT * FROM item WHERE itemID = " . $_GET['add'];
    $result = $con->query($sql);
    $item = mysqli_fetch_assoc($result);
    
    if (!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    if (!in_array($item, $_SESSION['cart'])) {
        array_push($_SESSION['cart'], $item);
        header("location: cart.php");
        exit();
    } else {
        header("location: Homepage.php");
        exit();
    }
}

if (isset($_GET['delete'])) {
    foreach ($_SESSION['cart'] as $cartItemId => $cartItem) {
        if ($cartItem['itemID'] == $_GET['delete']) {
            unset($_SESSION['cart'][$cartItemId]);
            $number = $_GET['delete'];
            $delete = "DELETE FROM cart WHERE itemId = $number";
            $con->query($delete);
            header("location: cart.php");
            exit();
        }
    }
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
            <div class = "cart_backround">

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

                        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
                            <table class="table">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                                <tbody>
                                    <?php
                                    $_SESSION['sum'] = 0;
                                    $_SESSION['totalQuantity'] = 0;
                                    foreach ($_SESSION['cart'] as $item) {
                                        $itemId = $item['itemID'];
                                        $itemName = $item['itemName'];
                                        $itemPrice = $item['itemPrice'];
                                        $itemImage = $item['image'];
                                        $itemQuantity = 1;
                                        $insert = "INSERT INTO cart VALUES($userId, $itemId, '$itemImage', '$itemName', $itemPrice, $itemQuantity, $itemPrice * $itemQuantity)";
                                        $con->query($insert);
                                        ?>
                                        <tr>
                                            <td><img src = "<?php echo $item['image']; ?>" width = '100px' height = '100px' style = "margin: 2% 3% 2% 3%;"/></td>
                                            <td><center><label><?php echo $item['itemName']; ?></label></center></td>
                                    <td><center><label><?php echo $itemQuantity; ?></label></center></td>        
                                    <td><center><label><?php echo $_SESSION['currencyName'] ?> <?php echo number_format((float) $item['itemPrice'] * $_SESSION['currency'], 2, '.', ''); ?></label></center></td>
                                    <td><a id ="div_buttonset_clear" style = "width: 50%;margin-left: 25%;" href = "cart.php?delete=<?php echo $item['itemID'] ?>" onclick="return confirm('Are you sure?');">delete</a></td>
                                    </tr>
                                    <?php
                                    $_SESSION['sum'] += $item['itemPrice'] * $_SESSION['currency'];
                                    $_SESSION['totalQuantity'] += $itemQuantity;
                                }
                                ?>
                                <tr>
                                    <td><a id ="div_buttonset_order" href = "Homepage.php">Continue shopping</a></td>
                                    <td><a id ="div_buttonset_order" href = "order.php">Confirm the order</a></td>
                                    <td><center><label>Total items : <?php echo $_SESSION['totalQuantity']; ?></label></center></td>    
                                <td><center><h4><label id = "div_total">Total : <?php echo $_SESSION['currencyName'] ?>  <?php echo number_format((float) $_SESSION['sum'], 2, '.', ''); ?></label></h4></center></td>
                                <td><a id ="div_buttonset_clear" href = "cart.php?clear=true" onclick="return confirm('Are you sure?');">Clear All</a></td>
                                </tr>
                                </tbody>
                            </table>
                            <br/>


                            <?php
                        } else {
                            $msg = "Add some to the cart";
                            $del = "DELETE FROM cart WHERE customerId = $userId";
                            $con->query($del);
                            ?>
                            <div id = "msg" onclick = "location.href = 'Homepage.php'"><label><?php echo $msg ?></label></div>
                                <?php } ?>

                    </div>
                </center>
            </div>
        </div>
        <?php include_once './components/footer.php'; ?>
    </body>
</html>