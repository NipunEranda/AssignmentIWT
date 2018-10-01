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
    <body>
        <div id="maincontainer1">
            <?php
            $getItem = "SELECT * FROM item";
            $res1 = $con->query($getItem);
            $num_rows = $res1->num_rows;
            if ($res1->num_rows > 0) {
                ?>
                <div id = "table_container">
                    <div class = "table_container1">
                        <center>
                            <h2>Current Items</h2>
                            <table border = "1" class = "category">
                                <tr>
                                    <th colspan = "2">Item Id</th>
                                    <th colspan = "2">Category Id</th>
                                    <th colspan = "2">Item Name</th>
                                    <th colspan = "2">Item Price</th>
                                    <th colspan = "2">Item Quantity</th>
                                    <th colspan = "2">Item Weight</th>
                                    <th colspan = "2">Remove</th>
                                </tr>
                                <?php
                                while ($row = $res1->fetch_assoc()) {
                                    $itemId = $row['itemID'];
                                    $categoryId = $row['categoryId'];
                                    $itemName = $row['itemName'];
                                    $itemPrice = $row['itemPrice'];
                                    $qty = $row['quantity'];
                                    $weight = $row['itemWeight'];
                                    ?>
                                    <tr>
                                        <td colspan = "2">
                                            <label><?php echo $itemId ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <label><?php echo $categoryId ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <label><?php echo $itemName ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <label><?php echo $itemPrice ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <label><?php echo $qty ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <label><?php echo $weight ?>kg</label>
                                        </td>
                                        <td colspan = "2">
                                            <a id ="deleteButton" href ="addItem.php?delete=<?php echo $itemId ?>" onclick = "return confirm('Are you sure?')">delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    if (isset($_GET['delete'])) {
                                        $id = $_GET['delete'];
                                        $delete = "DELETE FROM item WHERE itemID = $id";
                                        if ($con->query($delete) == true) {
                                            header("location: Homepage.php");
                                        }
                                    }
                                }
                                ?>
                            </table><?php
                        } else {
                            echo "No categories";
                        }
                        ?>
                    </center>
                </div>
                <div class = "table_container2">
                    <center>
                        <h2>Add Item</h2>
                        <div class ="addCategory">
                            <form action = "" method = "post">
                                <label>Input item id :   </label><input type = "text" name = "newItemId"/><br/><br/>
                                <label>Input category id :   </label><input type = "text" name = "categoryId"/><br/><br/>
                                <label>Input item Name :   </label><input type = "text" name = "newItemName"/><br/><br/>
                                <label>Input item Price :   </label><input type = "text" name = "newItemPrice"/><br/><br/>
                                <label>Input item Quantity :   </label><input type = "text" name = "newItemQuantity"/><br/><br/>
                                <label>Input item Weight :   </label><input type = "text" name = "newItemWeight"/><br/><br/>
                                <input style = "float: right;margin-right: 5%;" type = "submit" name ="sub" value = "submit"/>
                            </form>
                        </div>
                    </center>
                </div>

                <?php
                if (isset($_POST['sub'])) {
                    $itemId = $_POST['newItemId'];
                    $itemName = $_POST['newItemName'];
                    $categoryId = $_POST['categoryId'];
                    $itemPrice = $_POST['newItemPrice'];
                    $qty = $_POST['newItemQuantity'];
                    $weight = $_POST['newItemWeight'];

                    $insert = "INSERT INTO item VALUES($itemId, $categoryId, '$itemName', $itemPrice, $weight, 'FEGFER', $qty)";
                    if ($con -> query($insert) == true) {
                        header("location: Homepage.php");
                    }
                }
                ?>
            </div>
    </body>
<?php include_once 'components/footer.php'; ?>
</html>