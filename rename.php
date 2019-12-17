<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="alter table test rename newPrime";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "table name change sucessfully";
}
else
{
echo "plz try again";
}
mysqli_close($conn);
?>