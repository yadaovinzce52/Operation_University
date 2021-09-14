<?php

session_start();
header('location:login.php');

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'users');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username'";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Username Already Taken";
}else{
	$reg = "INSERT INTO user(username, password) VALUES ('$username', '$password')";
	mysqli_query($connect, $reg);
	echo "Registration Successsful!";
}

?>