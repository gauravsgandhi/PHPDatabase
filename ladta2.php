<?php

$connect=mysql_connect("localhost","root","");

$db=mysql_select_db("users1",$connect);

$username=$_POST['username'];
$password=$_POST['passsword'];

$pass=md5($password);


$sql="SELECT username,password from rusers1 where username='$username' and password='$password'";

if(mysql_query($sql))
{
	$_SESSION['username']=$username;
	$_SESSION['pass']=$pass;
	header("Location: profile2.php");
}
{	
	header("Location: login1.php");	
}



?>