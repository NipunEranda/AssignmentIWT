<?php
require 'config.php';

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["update"])){
    $first = $_POST["firstName"];
    $last = $_POST["lastName"];
	$address = $_POST["address"];
    $email = $_POST["email"];
    $contact = $_POST["tele"];
	$postal = $_POST["postalCode"];
	$password = $_POST["password"];



if(empty($firstName) || empty($lastName) || empty($email) || empty($address) || empty($tele) || empty($postalCode) || empty($password)) {
    if(empty($firstName)) {
        echo "<font color='red'> First name field is empty.</font><br/>";
    }

    if(empty($lastName)) {
        echo "<font color='red'> Last name field is empty.</font><br/>";
    }
	    if(empty($address)) {
        echo "<font color='red'> address field is empty.</font><br/>";
    }

    if(empty($email)) {
        echo "<font color='red'>Email field is empty.</font><br/>";
    }

    if(empty($tele)) {
        echo "<font color='red'>contact field is empty.</font><br/>";
    }
	if(empty($postalCode)) {
        echo "<font color='red'>postal field is empty.</font><br/>";
    }
	if(empty($password)) {
        echo "<font color='red'>change password field is empty.</font><br/>";
    }



}
else {
    $sql = "UPDATE customer_acc SET first = '$firstName', last = '$lastName' , address = '$address' , email = '$email' , contact = '$tele' , postal = '$postalCode' , password = '$password' ";


    if ($con->query($sql) === TRUE) {
        echo "Updated successfully";
    }
    else {
        echo "Error updating record: " . $con->error;
    }
}}
if(isset($_POST["delete"])){
    $delete_sql = "Delete from customer_acc where id = 2";
    if ($con->query($delete_sql) === TRUE) {
        echo "Deleted successfully";
    }
    else {
        echo "Error deleting record: " . $con->error;
    }

}


$con->close();

?>