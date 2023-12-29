<?php
include "connection.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=md5($_POST['password']);
$gender=$_POST['gender'];

//for validation in email

$checkemail="SELECT * FROM register WHERE email=?";
$checkemail->bind param("s",$email);
$checkemail= execute();
$result= $checkemail->get_result();

if($result->num_rows>0){
echo" this email already exist"; 

}else{
$sql="INSERT INTO register (fname, lname, email, pass, gender) VALUES ('$fname','$lname','$email','$pass','$gender')";

if ($conn->query($sql)=== TRUE) {
	echo"your are sucessefully registered";
}else{
	echo" you are not registered";
}

}
$conn->close();

?>