<?php
include 'dbconfig.php';
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $phone=$_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    $que="select * from contact where binary id='$user'";
    $x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
    header('location:contactus.php?msg=Again Sent Your Message');
}
else{
    $sql="INSERT INTO `contact` (`name`, `phone`, `email`, `comment`) VALUES ('$name','$phone','$email','$comment')";
    mysqli_query($conn,$sql);
    header('location:contactus.php?msg=Message Sent Succesfully');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - OCloud</title>
	<link rel="stylesheet" type="text/css" href="css/contactus.css">
</head>
<body>
	<div id="header">
		<div id="header-left-logo">
			<!--<img height="90px;" src="picture/mainlogo.png">-->
		</div>

		<div id="header-right">
			<a class="header-right-menu" href="index.php">Home</a>
          <a class="header-right-menu" href="login.php">Login</a>
          <a class="header-right-menu" href="signup.php">Sign Up</a>
          <a class="header-right-menu" href="aboutus.php">About</a>
          <a class="header-right-menu active " href="contactus.php">Contact Us</a>
		</div>
	</div>
		<div class="breakclass"></div>
	<div id="contactus">
		<div id="contactus-left">
			<p style="font-size: 28px;"><b><u>Contact Us</u></b></p><br>
			<p class="address">Address : 17km Stone, NH-19, Chaumuhan, Mathura-281 406 (U.P.)</p>
			<p class="address">Phone No. : 1234567890, 9876543210</p>
			<p class="address">Email Address : abcd@gla.ac.in</p><br><br>

			<div id="developers">
				<p style="font-size:28px;"><b><u>Developers</u></b></p><br>

				<ul class="address">
					<li>
						<b>Anuj Arora(+91 99971 69094)</b>
						<p style="margin-left: 10px;">- Front-End Developer & Javascript</p>
					</li><br>
					<li>
						<b>Yogesh Kumar(+91 78308 09342)</b>
						<p style="margin-left: 10px;">- Front-End Developer & Javascript</p>
					</li><br>
					<li>
						<b>Aryan Varshney(+91 94573 57157)</b>
						<p style="margin-left: 10px;">- Back-End Developer</p>
					</li><br>
					<li>
						<b>Adarsh Pandey(+91 95328 67633)</b>
						<p style="margin-left: 10px;">- Front-End & Documentation</p>
					</li><br>
					<li>
						<b>Abhishek Gupta(+91 91199 85652)</b>
						<p style="margin-left: 10px;">- Documentation</p>
					</li><br>
					<li>
						<b>Shivam Sharma(+91 90275 76156)</b>
						<p style="margin-left: 10px;">- Documentation</p>
					</li>
				</ul><br><br>
			</div>

		</div>

		<div id="contactus-right">
			<center><h2><b>For Any Query or Suggestion..</p></h2><center>
				<br>
			<form id="contact-form" action="contactus.php">

			  	<input class="textbox" type="text" name="name" placeholder="Name" required><br><br>
			  	<input class="textbox" type="tel" name="phone" placeholder="Phone no." required><br><br>
			  	<input class="textbox" type="text" name="email" placeholder="Email" required><br><br>
			  	<input class="textbox" type="text" name="comment" placeholder="Comment" required><br><br>
					<p> <?php     echo $a=@$_GET['msg'];     ?></p>
			  	<div id="submit-button">
			  		<button type="submit" value="submit"name="submit">Submit</button>
			  	</div>

			</form>
		</div>
	</div>
</body>
</html>
