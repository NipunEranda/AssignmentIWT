<?php

require 'connection.php';
session_start();



    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $nic = $_POST['nic'];
        $addr = $_POST['address'];
		$mail= $_POST['user_email'];
        $code = $_POST['itemcode'];
        $date = $_POST['datetime'];

        $sql = "INSERT INTO storepickup VALUES ('$name', '$nic', '$addr','$mail', '$code','date')";
		$result = ($con -> query($sql));
		
		if($result == true){
			echo "Successfully insert";
		}else{
			echo "failed";
		}
	}
	?>