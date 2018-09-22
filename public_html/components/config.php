<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '4212');
define('DB_NAME', 'giftBay');
 
$con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 
if($con === false){
    die("ERROR: Could not connect. " . $con->connect_error);
}
?>