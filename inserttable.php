<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password, $db);

$username=$_POST['username'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lasttname=$_POST['lasttname'];
$mobileno=$_POST['mobileno'];
$address=$_POST['address'];

$pass=md5($password);

$sql="INSERT INTO newprime (username,password,firstname,lasttname,mobileno,address) values ('$username','$pass','$firstname','$lasttname','$mobileno','$address')";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "Record Inserted Sucessfully";
}
else
{
echo "Try again";
}
mysqli_close($conn);
?>