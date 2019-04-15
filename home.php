<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
   include('session.php');
?>
<html>
<title>Art Attack</title>
<head>
<br><br>
<font size =30><i><b><div align="center">Art Attack</div></font size=30></i></b>
<?php if ($login_session !== null): ?>
<div align="right" style="font-size: 30px" >Logged in as: <?php echo $login_session ?></div>
<?php endif; ?>
</head>
<body background="background.jpg">
<br><br><br><br>
<table border=0 width=100%>
<tr align="center">
<td><a href="about_us.php" style="color:#800080;"><font size=6>About Us</a></td>
<td><a href="services.php" style="color:#800080;"><font size=6>Services</a></td>
<td><a href="contact.php" style="color:#800080;"><font size=6>Contact</a></td>
<?php if ($login_session !== null): ?>
<td><a href="logout.php" style="color:#800080;"><font size=6>Log out</a></td>
<?php else: ?>
  <td><a href="register.php" style="color:#800080;"><font size=6>Sign Up</a></td>
  <td><a href="login.php" style="color:#800080;"><font size=6>Log In</a></td>

<?php endif; ?>
</tr>
</table>
<br><br><br><br><br><br>
<div align="center"><img src="BG.gif"><br><br><br>
<a href="home.php" style="color:#000080;"><b>HOME</b></a>
</div>
</font>
</body>
<hr>
<p align=center>Mara Alina Damian</p>
<br>
<p align=center>12B promotia 2018-2019</p>
</html>
