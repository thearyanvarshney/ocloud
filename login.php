<?php include('dbconfig.php');
if(isset($_POST['SignUp']))
{
$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
$dob=$_POST['DateOfBirth'];
$phone=$_POST['ContactNum'];
$user=$_POST['Username'];
$pass=md5($_POST['Password']);
$cpass=$_POST['CPassword'];
$que="select * from user where binary username='$user'";
$x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{

 header('location:signup.php?msg=User Name already Exist');
}
else
{
$sql= "INSERT INTO user(fname,lname,dob,phone,username,password) VALUES('$fname','$lname','$dob','$phone','$user','$pass')";
mysqli_query($conn,$sql);
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login here</title>
		<link rel="stylesheet" href="css/login.css">
		<script src="js/login.js"></script>
	</head>
	<body>
		<div id="header">
			<div id="header-left-logo">
				<!--<img height="90px;" src="picture/mainlogo.png">-->
			</div>

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
			<h1 style="text-align:center; margin: 24px 0; padding: 10px; font-size:45;">Login</h1>

			<form action="checklogin.php" method="post" autocomplete="on">
			<input class="input-field" id="userid" type="text" placeholder="Username" name="Username" required>
			<br><br>
			<input class="input-field" id="userpass" type="password" placeholder="Password" name="Password" pattern=".{6,}" required>
			<br><br>
			<div align="center"><input type="checkbox" onClick="toggle()">Show Password</div>
      <br>
      <p style="  color:white;background-color: red;border-radius:5px;width: 100%;"><?php     echo $a=@$_GET['msg'];     ?></p>
			<!--<div><?php echo $_GET['password_error'];?></div>-->
			<input id="login-button" type="submit" name="Submit" value="Login" onClick="validuser()">
			<br><br>
			</form>
		</div>

		<div class="login-text" style="margin-top: 1%;">
			<p style="padding:10px; font-color: white"><a style="color: darkblue;" href="#">Forget Password?</a></p>
		</div>

		<div class="login-text" style="margin-top: 1%;">
			<p style="padding:10px; font-color: white">New User? <a style="color: darkblue;" href="signup.php">  Sign Up!</a></p>
		</div>

	</body>
</html>
