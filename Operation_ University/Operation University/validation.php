<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connect, 'users');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' && password='$password'";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $username;
	header('location:home.php');
}else{
	header('location:login.php');
}

?>