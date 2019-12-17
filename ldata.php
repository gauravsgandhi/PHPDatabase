<?php

$connect=mysqli_connect("localhost","root","","demo");

$username=$_POST['username'];
$password=$_POST['password'];

$pass=md5($password);

$sql="SELECT * FROM newprime where username='$username' and password='$pass'";

if(mysqli_query($connect,$sql))
{
   session_start();
   $_SESSION['username'] = $username;
   $_SESSION['pass'] = $pass; 
   header("Location: profile.php");  
   
}
else
{
	header("Location: login.php");  
	
}
?>