<?php
$servername="localhost";
$username="root";
$password="";
$db="demo";
$conn=mysqli_connect($servername, $username, $password, $db);
$sql="SELECT * from newprime order by name asc"; 
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
   echo $row['id'];
   echo $row['name']."<br/>";            

}
mysqli_close($conn);
?>