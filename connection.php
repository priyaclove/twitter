<?php
$servername="localhost";
$username="root";
$password="root";
$db="twitter";
$conn=new mysqli($servername,$username,$password,$db);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}

?>