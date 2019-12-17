<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="update test set name='ram' where id='1'";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "Record Updated";
}
else
{
echo "Try again";
}
mysqli_close($conn);
?>