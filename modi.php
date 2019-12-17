<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="alter table test modify name varchar(300)";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "modified sucessfully";
}
else
{
echo "plz try again";
}
mysqli_close($conn);
?>