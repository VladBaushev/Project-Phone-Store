<?php
$Login=$_POST['Login'];
$Password=$_POST['Password'];

$host="localhost";
$user="root";
$pass="";
$db="users";
$table="users";

$link= mysqli_connect($host, $user, $pass, $db) or die (mysqli_error($link));

$query=mysqli_query($link, "SELECT * FROM $table WHERE 
	Login='$Login' and Password='$Password'");

if (mysqli_num_rows($query)==1){
	header("Location: success.html");
}
else
	echo '<script>alert("Неправильный логин или пароль")</script>';
?>