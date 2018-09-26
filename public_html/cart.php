<html>
    <head>
        <title>My Cart</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/cart.css">
    </head>
    <body background = "images/backgrounds/cart_background.jpg">
        <?php include_once './components/header.php'; ?>
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

            <div id = "cart_table">
                <center>
                    <form action = "" method="POST">
                        <?php
                        $id = $_SESSION['id'];
                        $sql = "SELECT * FROM cart WHERE customerId = $id";
                        $result = $con->query($sql);
                        $rows = $result->num_rows;
                        if ($rows > 0) {
                            ?>
                            <table border = "1" class="tableSize">
                                <tr><th>Item</th><th>Description</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    $i = 0;
                                    $itemID = $row["itemId"];
                                    $itemName = $row["itemName"];
                                    $price = $row["price"];
                                    $qty = $row["quantity"];
                                    $total = $row["price"] * $qty;
                                    $image = $row["image"];
                                    $item[$i][$itemID] = $itemID;
                                    $item[$i][$itemName] = $itemName;
                                    $item[$i][$price] = $price;
                                    $item[$i][$qty] = $qty;
                                    $item[$i][$total] = $total;
                                    $item[$i][$image] = $image;
                                    ?>
                                    <tr>
                                        <td>
                                            <img src = "<?php echo $item[$i][$image] ?>" width = '100px' height = '100px'/>
                                        </td>
                                        <td>
                                            <label><?php echo $item[$i][$itemName] . $item[$i][$itemID] ?></label>
                                        </td>
                                        <td>
                                            <?php echo $item[$i][$price] ?>
                                        </td>
                                        <td style="width: 15%;">
                                            <?php echo $item[$i][$qty] ?>
                                        </td>
                                        <td style="width: 10%;">
                                            <?php echo $item[$i][$total] ?><input type ="submit" name ="<?php echo $item[$i][$itemID] ?>" style="float: right;" value = "delete">
                                        </td>
                                    </tr>

                                    <?php
                                    ++$i;
                                }
                                
                                for ($j = 0; $j < 10; ++$j) {
                                    if (isset($_POST[$j])){
                                        $sqldel = "DELETE FROM cart WHERE itemId = $j";
                                        $resultDel = $con -> query($sqldel);
                                        if($resultDel == true){
                                            echo "Successful!";
                                        }else{
                                            echo "Unsuccessful!";
                                        }
                                    }
                                }
                                
                            }else {
                                echo "<label style = 'color: red; font-size: 20px;'>Cart is Empty</label>";
                            }
                            ?>

                        </table>
                    </form>
                </center>
            </div>
        </div>
        <?php include_once './components/footer.php'; ?>
    </body>
</html>