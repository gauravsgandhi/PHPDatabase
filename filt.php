<?php
$servername="localhost";
$username="root";
$password="";
$db="ajinkya";
$conn=mysqli_connect($servername, $username, $password,$db);

$sql="select * from gaurav where name like='%hil%'";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "filter sucessfully";
}
else
{
echo "plz try again";
}
mysqli_close($conn);
?>