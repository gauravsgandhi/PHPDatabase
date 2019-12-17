<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="alter table test add address varchar(255)";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "row added sucessfully";
}
else
{
echo "plz try again";
}
mysqli_close($conn);
?>