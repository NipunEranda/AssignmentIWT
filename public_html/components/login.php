<?php

session_start();
require_once 'components/server_Config.php';

$error = "";
if (isset($_POST["usr_login"])) {

    $email = $_POST['usr_email'];
    $password = $_POST['usr_password'];

    $sql = "SELECT firstName FROM customer WHERE email = '$email' and pass = '$password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user = $row["firstName"];
        }

        $_SESSION['username'] = $user;
        if (isset($_SESSION['username'])) {
            header("location: index.php");
        }
    } else {
        $error = "Incorrect username or password";
        header("location: Homepage.php");
    }
}

$con -> close();
?>