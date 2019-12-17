<html>
    <head>
        <title>
            Registration
        </title>

    </head>
    <body>
        <h1>Registration Form</h1>
        <form method="POST" action="inserttable.php">
            <table border="2">
                <tr>
                    <td>Username</td>
                    <td><input id="username" type="text" name="username" pleaseholder="username" /></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="password" pleaseholder="passsword" /></td>
                </tr>

                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="firstname" id="firstname" pleaseholder="First Name" /></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lasttname" id="lastname" pleaseholder="Last Name" /></td>
                </tr>

                <tr>
                    <td>Mobile No</td>
                    <td><input type="text" name="mobileno" id="mobilno" pleaseholder="Mobile No" /></td>
                </tr>


                <tr>
                    <td>Address</td>
                    <td><textarea rows="6" cols="25" pleaseholder="address" id="address" name="address"></textarea></td>
                </tr>

                <tr>
                    <td colspan="2"><center><input type="submit" id="submit" class="submit_button" name="submit_button" value="submit_button" /><input type="reset" value="Reset" /></center></td>
                </tr>

                <tr>
                    <td colspan="2"><center><h3><a href="register.php">Sign up</a>  &nbsp;  &nbsp;  <a href="login.php">Sign In</a><h3></center></td>
                            </tr>

                            </table>
                            </form>
                            </body>
                            </html>