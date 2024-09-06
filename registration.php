<?php
$Login=$_POST['Login'];
$Password=$_POST['Password'];
$Phone=$_POST['Phone'];
$Email=$_POST['Email'];

$host="localhost";
$user="root";
$pass="";
$db="Users";
$table="Users";


$link = mysqli_connect($host, $user, $pass, $db) or die (mysqli_error($link));
$query = "insert into $table (Login, Password, Phone, Email) values 
	('$Login', '$Password', '$Phone', '$Email')";
$result = mysqli_query($link, $query) or die (mysqli_error($link));

if($result)
	header("Location: successreg.html");

?>
