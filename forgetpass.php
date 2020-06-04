<?php
session_start();
include('dbconfig.php');
$successmsg = null;
$email = null;
$flag=0;
if(isset($_POST['submit']))
{
$otp=rand(1000,9999);
$_SESSION['$email']=$_POST['emailid'];
$_SESSION['$username']=$_POST['username'];

$que = "select * from user where username= '" . $_SESSION['$username'] . "' and emailid='" . $_SESSION['$email'] . "'";
$x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
$result=mysqli_fetch_assoc($x);
$sql="update otpgen set otp='$otp' where username='" . $_SESSION['$username'] . "'";
mysqli_query($conn,$sql);
mail($_SESSION['$email'],'Recover Password','Your One Time Password is: '.$otp,'From: ocloudbca@gmail.com');
$successmsg="Mail Sent Successfully!";
header('location:');
}
else
{
  echo "<script>
  alert('Incorrect Details Entered.');
  </script>";
  $_SESSION = array();
  session_destroy();
}
}
if(isset($_POST['validate']))
{
  if(isset($_SESSION['$username']))
  {
  $otpinput=$_POST['otp'];
  $otpver="select * from otpgen where username= '" . $_SESSION['$username'] . "' and email='" . $_SESSION['$email'] . "'";
  $y=mysqli_query($conn,$otpver);
  $value=mysqli_fetch_assoc($y);
  echo "qqqq . $otpinput . qqq";
  if($value['otp']==$otpinput)
  {
  // header('location:changepassword.php');
  }
  else
  {
    echo "<script>
    alert('Incorrect OTP!');
    </script>";
    $_SESSION = array();
    session_destroy();
  }
  }
  else {
    echo "Mail hasn't been sent yet! [Session Not Created]";
  }
}
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget Password?</title>
    </style>
    <link rel="stylesheet" href="css/forget.css">
  </head>
  <body>
    <main>
      <form class="formdesign"  action="forgetpass.php" method="post">
        <input type="text" class="inputclass" name="emailid" placeholder="Enter Email Address">
        <input type="text" class="inputclass" name="username" placeholder="Enter Username">
        <p class="successmessage"><?php     {echo $successmsg;}     ?></p>
        <input type="submit" name="submit" value="Send Mail">
      </form>
      <br>
      <form class="formclass" style="" action="forgetpass.php" method="post">
        <input type="number" id="myText" name="otp" placeholder="Enter OTP">
        <input type="submit" id="Button" name="validate" value="Verify">
      </form>
    </main>
  </body>
</html>
