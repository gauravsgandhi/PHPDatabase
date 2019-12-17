<?php

$connect=mysql_connect("localhost","root","");

$db=mysql_select_db("users1",$connect);

echo $firstname=$_POST['firstname'];
echo $lastname=$_POST['lastname'];
echo $username=$_POST['username'];
echo $password=$_POST['password'];
echo $email=$_POST['email'];
echo $mobileno=$_POST['mobileno'];
echo $gender=$_POST['gender'];
echo $address=$_POST['address'];
echo $qualification=$_POST['qualification'];

$pass=md5($password);

$sql="insert into rusers1(firstname,lastname,username,password,email,mobileno,gender,address,qualification) values('$firstname','$lastname','$username','$pass','$email','$mobileno','$gender','$address','$qualification')";

if(mysql_query($sql))
{
    header("Location: login1.php"); 
}
else
{
    header("Location: register1.php");
}














?>