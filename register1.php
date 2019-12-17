<html>
<head>
<title>
Registration Form
</title>
</head>
<body>
<center>
<h1>Registration Details</h1>
<form action="rdata2.php" method="POST" >
<table border="2">
<tr>
<td>First Name</td>
<td><input type="text" pleaseholder="First Name" name="firstname" /></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" pleaseholder="Last Name" name="lastname"/></td>
</tr>

<tr>
<td>User Name</td>
<td><input type="text" pleaseholder="User Name" name="username" /></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" pleaseholder="Password" name="password" /></td>
</tr>

<tr>
<td>Email</td>
<td><input type="email" pleaseholder="Email" name="email" /></td>
</tr>

<tr>
<td>Mobile No</td>
<td><input type="text" pleaseholder="Email" name="mobileno" /></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="M" />M<input type="radio" name="gender" value="F" />F</td>
</tr>

<tr>
<td>Address</td>
<td><textarea rows="6" cols="30" name="address" pleaseholder="Address"></textarea></td>
</tr>

<tr>
<td>Quaification</td>
<td><select name="qualification">
<option>BCA</option>
<option>MCA</option>
<option>Bcom</option>
<option>BBA</option>
</select>
</td>
</tr>

<tr>
<td colspan="2"><center><input type="checkbox" name="checked" required />Please accept terms and condiations</center></td>
</tr>

<tr>
<td colspan="2"><center><input type="submit" name="submit" value="Submit"/></center></td>
</tr>

<tr>
<td colspan="2"><center><h2><a href="register1.php">sign up</a> &nbsp; <a href="login1.php">sign in</a></h2></center></td>
</tr>


</table>
</form>
</center>
</body>
</html>