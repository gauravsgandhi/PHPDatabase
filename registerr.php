<html>
    <head>
        <title>User Registration Using PHP Ajax</title>
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
           $(document).ready(function(){
		 $(".submit").click(function() 
	  {
                    var x = document.getElementById("password").value;
                    alert(x);
                    $.ajax({
                        type: "POST",
                        url: "ajax.php",
                        data: "username=" + username + "&password=" + password + "&email=" + email,
                        success: function (html) {
                           alert('hi'); 
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div id="load" style="">
        </div>
        <div id="box">
        </div>
        <form method="post" action="" id="form2">
            <div id="line">USERNAME: <input type="text" name="username" id="username" /></div>
            <div id="line">PASSWORD:<input type="password" name="password" id="password" /></div>
            <div id="line">EMAIL:<input type="text" name="email" id="email" /></div>
            <input type="submit" id="submit" class="submit" name="submit" />
        </form>

    </body>
</html>