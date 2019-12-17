<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password, $db);


$sql="create table test(id int(11) not null AUTO_INCREMENT,name varchar(255),PRIMARY KEY(id))";

$result=mysqli_query($conn,$sql);

if($result)
{
echo "Table created";
}
else
{
echo "Try again";
}
mysqli_close($conn);
?>