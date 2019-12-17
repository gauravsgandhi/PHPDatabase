<?php

$link = mysql_connect("localhost", "root", "");

$db=mysql_select_db("users",$link);

$username=$_POST['username'];

$sql="insert into rusers(username) values ('$username')"; 

if(mysql_query($sql))
{

echo "<h2>sucess</h2>";
  			
}
 else
{
echo "<h2>sorry</h2>";
}

 
?>