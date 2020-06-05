<?php include('dbconfig.php');
$msg1 = null;
$msg2 = null;
$successmsg = null;
if(isset($_POST['SignUp']))
{
$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
$dob=$_POST['DateOfBirth'];
$phone=$_POST['ContactNum'];
$user=$_POST['Username'];
$email=$_POST['EmailId'];
$pass=md5($_POST['Password']);
$cpass=md5($_POST['CPassword']);
$type="normal";
$flag=0;
$que1="select * from user where binary username='$user'";
$que2="select * from user where binary emailid='$email'";
$x=mysqli_query($conn,$que1);
$y=mysqli_query($conn,$que2);
if(mysqli_num_rows($x)==1)
{
  $msg1 = 'Username Already Exist!';
  $flag=1;
}
if(mysqli_num_rows($y)==1)
{
  $msg2 = 'Email Address Already Exist!';
 $flag=1;
}
if($flag==1){
}
else
{
$sql1= "INSERT INTO user(fname,lname,dob,phone,username,emailid,password,cpassword,usertype) VALUES('$fname','$lname','$dob','$phone','$user','$email','$pass','$cpass','$type')";
$sql2="INSERT INTO otpgen(username,email) VALUES('$user','$email')";
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
$successmsg = 'Account Created Successfully!';
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - Let's Get Started!</title>
  <link rel="stylesheet" href="css/signup.css" type="text/css">
	<script src="js/signup.js"></script>
</head>
  <body>
    <div id="header">
      <div id="header-left-logo">
          <!--<img height="90px;" src="picture/mainlogo.png">-->
      </div>

      <div id="header-right">
          <a class="header-right-menu" href="index.php">Home</a>
          <a class="header-right-menu" href="login.php">Login</a>
          <a class="header-right-menu active" href="signup.php">Sign Up</a>
          <a class="header-right-menu" href="aboutus.php">About</a>
          <a class="header-right-menu" href="contactus.php">Contact Us</a>
      </div>
    </div>
    <div class="breakclass"></div>
    <div id="signupformdesign">
    <form id="signupform" action="signup.php" method="post" autocomplete="off">
     <h1 style="font-family: myfont; font-size: 40px;">Let's Get Started!</h1>
        <input class="inputclass inlineinput" type="text" name="FirstName" placeholder="First Name" required>
        <input class="inputclass inlineinput" type="text" name="LastName" placeholder="Last Name">
        <input class="inputclass" type="date" name="DateOfBirth" placeholder="Date Of Birth" required>
        <input class="inputclass" id="emailid" type="email" name="EmailId" placeholder="Email Address" required>
        <input class="inputclass" id="mobnum" type="tel" name="ContactNum" placeholder="Contact Number" maxlength="10" oninput="reseterror3()" required>
        <input class="inputclass" id="username" type="text" name="Username" placeholder="Username" oninput="reseterror2()" required>
        <input class="inputclass" id="userpass1" type="password" name="Password" placeholder="Password" oninput="reseterror1()" required>
        <input class="inputclass" id="userpass2" type="password" name="CPassword" placeholder="Confirm Password" oninput="reseterror1()" required>
        <div class="showpassdiv"><input type="checkbox" onclick="toggle()">Show Password</div>
        <center>
        <p class="errormessage"><?php     {echo $msg1;}     ?></p>
        <p class="errormessage"><?php     {echo $msg2;}     ?></p>
        <p class="successmessage"><?php     {echo $successmsg;}     ?></p>
        <p id="innerpopup1" class="errormessage"></p>
        <p id="innerpopup2" class="errormessage"></p>
        <p id="innerpopup3" class="errormessage"></p>
        <p id="innerpopup4" class="errormessage"></p>
        </center>

          <br>
        <input style="font-family: myfont; font-size: 18px;" class="submitclass" type="submit" value="Sign Up!" name="SignUp" onClick="validate()">
        </form>
        </div>

  </body>
</html>
