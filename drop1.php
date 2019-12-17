<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="drop table test";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "table drop sucessfully";
}
else
{
echo "plz try again";
}
mysqli_close($conn);
?>