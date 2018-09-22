<?php

if (isset($_POST['1'])) {
    $sql = "SELECT * FROM item WHERE itemID = 1 and categoryId = 1";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $itemName = $row["itemName"];
            $price = $row["price"];
        }
    }else{
        echo "No results";
    }
    $insert = "INSERT INTO myCart values(1, $itemName, $price, 1, $price)";
    $results = $con->query($insert);
}
    ?>