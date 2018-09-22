<html>
    <head>
        <title>My Cart</title>
        <link rel = "stylesheet" href = "css/styles.css">
        <link rel = "stylesheet" href = "css/mycart.css">
    </head>
    <body>
        <?php include_once './components/header.php'; ?>
        <h1>Shopping Cart</h1>
    <center><table border = "1" class="tableSize">
            <tr><th>Item</th><th>Description</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
            <?php
            $count = 1;
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM cart WHERE customerId = $id";
            $result = $con->query($sql);
            $rows = $result->num_rows;
            if ($rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $itemID = $row["itemId"];
                    $itemName = $row["itemName"];
                    $price = $row["price"];
                    $qty = $row["quantity"];
                    $total = $row["total"];
                    $image = $row["image"];
                    
                    echo "<tr><td><img src = '$image' width = '100px' height = '100px'><td><label>$itemName</label></td></td><td>$$price</td><td>$qty</td><td>$total</td></tr>";
                }
            } else {
                echo "No results";
            }
            ?>
        </table></center>
    <?php include_once './components/footer.php'; ?>
</body>
</html>