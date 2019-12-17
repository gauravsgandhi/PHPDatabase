<?php
$servername="localhost";
$username="root";
$password="";
$db="ajinkya";
$conn=mysqli_connect($servername, $username, $password,$db);
$sql="select * from gaurav";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
   echo $row[0];
   echo $row[1]."<br/>";            

}
mysqli_close($conn);
?>