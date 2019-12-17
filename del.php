<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="delete from test where id='1' ";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "delated";
}
else
{
echo "tray again";
}
mysqli_close($conn);
?>