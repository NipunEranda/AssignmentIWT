<?php include_once './components/header.php'; ?>
<?php
$user = $_SESSION['id'];
?>
<html>
    <head>
        <title>Order</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/cart.css">
        <link rel = "stylesheet" href = "css/order.css">
    </head>
    <body background = "images/backgrounds/background10.jpg">
        <div id="maincontainer1">

            <center><div class = "topBox"><h1 style="font-size: 40px;">Order item details</h1><div></center>
                        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
                            <center>
                                <div id = "cart_table">
                                    <table border = "1">
                                        <tr>
                                            <th>View</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                        </tr>
                                        <?php
                                        $_SESSION['sum'] = 0;
                                        $cart = array();
                                        foreach ($_SESSION['cart'] as $item) {
                                            $itemId = $item['itemID'];
                                            $_SESSION['sum'] += $item['itemPrice'];
                                            ?>
                                            <tr>
                                                <td><img src = "<?php echo $item['image']; ?>" width = '150px' height = '150px' style = "margin: 2% 3% 2% 3%;"/></td>
                                                <td><center><label><?php echo $item['itemName']; ?></label></center></td>
                                            <td><center><label><?php echo $_SESSION['currencyName'] ?> : <?php echo number_format((float) $item['itemPrice'] * $_SESSION['currency'], 2, '.', ''); ?></label></center></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>    
                                    </table>
                                </div>
                            </center>
                        <div class = "buttonset">
                            <a id ="paymentbtn">payment Methods</a>   
                            <a id ="back" href = "cart.php">Back to changes</a> 
                        </div>
                            <?php
                        } else {
                            echo 'Your cart is empty';
                        }
                        ?>
                    </div>
                    <?php include_once './components/footer.php'; ?>
                    </body>
                    </html>