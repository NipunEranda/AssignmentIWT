<?php

$id = $_SESSION['id'];
$user = $_SESSION['username'];

for ($i = 1; $i < 10; ++$i) {
    if (isset($_POST[$i])) {
        $sql = "SELECT * FROM item WHERE itemID = $i";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $itemName = $row["itemName"];
                $price = $row["itemPrice"];
                $image = $row["image"];
            }
        } else {
            echo "No results";
        }
        $insert = "INSERT INTO cart VALUES($id, '$user', $i, '$image', '$itemName', '$price', 1, '$price')";
        $results = $con->query($insert);
    }
}
?>
