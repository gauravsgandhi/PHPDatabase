<?php
$servername="localhost";
$username="root";
$password="";
$db="ajinkya";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="insert into gaurav(id,name) values('','aji2')";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "inserted";
}
else
{
echo "not insertedted";
}
mysqli_close($conn);
?>