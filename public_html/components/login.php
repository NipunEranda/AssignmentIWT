<?php
require_once 'components/config.php';


if (isset($_POST['usr_email']) and isset($_POST['usr_password'])) {

    $email = $_POST['usr_email'];
    $password = $_POST['usr_password'];

    $sql = "SELECT customer_id, firstName FROM customer WHERE email = '$email' and pass = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["customer_id"];
            $_SESSION['id'] = $id;
            $user = $row["firstName"];
            $_SESSION['username'] = $user;
        }

        if (!empty($_SESSION['username']) and isset($_SESSION['username'])){
            header("location: Homepage.php");
        }else
        {
            header("location: index.php");
        }
    } else {
        $error = "Incorrect username or password";
        header("location: index.php");
    }
}

$con -> close();
?>