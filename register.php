<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
      $email = mysqli_real_escape_string($db,$_POST['email']);

      $query = "INSERT INTO users (username, password, email)
    			  VALUES('$username', '$password', '$email')";
    	mysqli_query($db, $query);

    	$_SESSION['login_user'] = $username;
    	$_SESSION['success'] = "You are now logged in";

      header('location: home.php');
   }
?>
<html>
<head>
	<title>Sign Up</title>
</head>
<body background="background.jpg">
<font style="font-family:Comic Sans, MS;font-weight:bold;color:#FFF">
	<br><div align="center">
	<table width=100% border=0>
		<tr align="center">
			<td><img src="sign.png" width="150"></td>
			<td><h1><i><a style="color:#000080;">Sign Up</i></h1></td>
			<td><img src="painting.jpg" width="150"></td>
		</tr>
	</table>
</div><br>
	<div align="center">
		<tr>
			<td width="25%" rowspan="2" valign="top">
				<h3><u><a style="color:#800080;">Sign up by filling the following form:</u></h3>

        <form action = "" method = "post">
           <label>Username :</label><input type = "text" name = "username" class = "box"/><br /><br />
           <label>Password :</label><input type = "password" name = "password" class = "box" /><br/><br />
           <label>Email :</label><input type = "email" name = "email" class = "box" /><br/><br />
           <input type = "submit" value = " Submit "/><br />
        </form>
			</td>
		</tr>
	</div><br><br>
	<div align="center"><a href="home.php" style="color:#000080;"><b>HOME</b></a></div><br><br><br>
</font>
</body>
</html>
