<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysql_connect($servername, $username, $password);

//$db=mysql_select_db("demo");

$sql="create database demo";
$result=mysql_query($sql);

if($result)
{
echo "database created successfully";
}
else
{
echo "try again";
}
mysql_close($conn);
?>