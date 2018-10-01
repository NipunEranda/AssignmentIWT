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
            $getCategory = "SELECT * FROM category";
            $res1 = $con->query($getCategory);
            $num_rows = $res1->num_rows;
            if ($res1->num_rows > 0) {
                ?>
            <div id = "table_container">
                    <div class = "table_container1">
                        <center>
                            <h2>Current categories</h2>
                            <table border = "1" class = "category">
                                <tr>
                                    <th colspan = "2">Category Id</th>
                                    <th colspan ="2">CategoryName</th>
                                    <th colspan = "2">Remove</th>
                                </tr>
                                <?php
                                while ($row = $res1->fetch_assoc()) {
                                    $categoryId = $row['categoryId'];
                                    $categoryName = $row['categoryName'];
                                    ?>
                                    <tr>
                                        <td colspan = "2">
                                            <label><?php echo $categoryId ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <label><?php echo $categoryName ?></label>
                                        </td>
                                        <td colspan = "2">
                                            <a id ="deleteButton" href ="addCategory.php?delete=<?php echo $categoryId ?>" onclick = "return confirm('Are you sure?')">delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    if (isset($_GET['delete'])) {
                                        $id = $_GET['delete'];
                                        $delete = "DELETE FROM category WHERE categoryId = $id";
                                        if($con->query($delete) == true){
                                            header("location: Homepage.php");
                                        }
                                    }
                                }
                                ?>
                            </table>
                        </center>
                    </div>

                    <div class = "table_container2">
                        <center>
                            <h2>Add categories</h2>
                            <div class ="addCategory">
                                <form action = "" method = "post">
                                    <label>Input item id :   </label><input type = "text" name = "newItemId"/><br/><br/>
                                    <label>Input item Name :   </label><input type = "text" name = "newCategory"/><br/><br/>
                                    <input style = "float: right;margin-right: 5%;" type = "submit" name ="sub" value = "submit"/>
                                </form>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST['sub'])) {
                $itemId = $_POST['newItemId'];
                $itemName = $_POST['newCategory'];

                $insert = "INSERT INTO category values($itemId, '$itemName')";
                if ($con->query($insert) == true) {
                    header("location: Homepage.php");
                }
            }
        } else {
            echo "No categories";
        }
        ?>
    </div>
</body>
        <?php include_once 'components/footer.php'; ?>
</html>