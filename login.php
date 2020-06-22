<?php
session_start();
?>
<?php
 include('dbconfig.php');
 if(isset($_REQUEST['Submit']))
 {
 $name=$_REQUEST['Username'];
 $pass=md5($_REQUEST['Password']);
 $que="select * from user where binary username='$name' and binary password='$pass'";
 $x=mysqli_query($conn,$que);
 $result=mysqli_fetch_assoc($x);

 if($result["usertype"] == 'admin' and mysqli_num_rows($x)==1)
 {
   $_SESSION['username']=$name;
   header('location:adminpanel.php');
 }
 else if($result["usertype"] == 'normal' and mysqli_num_rows($x)==1)
 {
  $_SESSION['username']=$name;
  header('location:userinterface.php');
 }
 else
 {
 header('location:login.php?msg=Either UserName or Password is Incorrect!');
 }

}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login - OCloud</title>
		<link rel="stylesheet" href="css/login.css">
		<script src="js/login.js"></script>
	</head>
	<body>
		<div id="header">
			<div id="header-left-logo"></div>
			<div id="header-right">
				<a class="header-right-menu" href="index.php">Home</a>
				<a class="header-right-menu active" href="login.php">Login</a>
				<a class="header-right-menu" href="signup.php">Sign Up</a>
				<a class="header-right-menu" href="aboutus.php">About</a>
				<a class="header-right-menu" href="contactus.php">Contact Us</a>
			</div>
		</div>
<br><br><br><br><br>
		<div class="login-text" style="margin-top: 7%;">
			<h1 class="heading">Login</h1>

			<form action="login.php" method="post">
			<input class="input-field" id="userid" type="text" placeholder="Username" name="Username" required>
			<br><br>
			<input class="input-field" id="userpass" type="password" placeholder="Password" name="Password" pattern=".{6,}" required>
			<br><br>
			<div align="center"><input type="checkbox" onClick="toggle()">&nbsp;&nbsp;Show Password</div>
      <br>
      <p class="errormessage"><?php     echo $a=@$_GET['msg'];     ?></p>
      <p class="successmessage"><?php     echo $a=@$_GET['msg1'];     ?></p>
			<input id="login-button" type="submit" name="Submit" value="Login" onClick="validuser()">
			<br><br>
			</form>
		</div>

		<div class="login-text min" style="margin-top: 1%;">
			<p style="padding:10px; color: rgb(230,230,230);">Forget Password?&nbsp;&nbsp;<a style="color:#007FFF; text-decoration:none;" href="forgetpass.php">Click Here!</a></p>
		</div>

		<div class="login-text min" style="margin-top: 1%;">
			<p style="padding:10px; color: rgb(230,230,230)">New User?&nbsp;&nbsp;<a style="color:#007FFF; text-decoration: none;" href="signup.php">Sign Up!</a></p>
		</div>

	</body>
</html>
