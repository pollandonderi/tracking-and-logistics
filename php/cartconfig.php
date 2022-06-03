<?php
	$conn = new mysqli("localhost","root","","logitrack cartsystem");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>