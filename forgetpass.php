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
header('location:checkotp.php');
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
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Forget Password?</title>
    <link rel="stylesheet" href="css/forget.css">
    </style>
    <link rel="stylesheet" href="css/forget.css">
  </head>
  <body>
    <div class="header">
      <img class="headerlogo" src="picture/mainlogo.png">
      <a href="login.php"><span title="Back to Login!" class="material-icons exiticon">exit_to_app</span></a>
    </div>
      <div class="form-div">
        <div class="heading">
          <h1 class="headingtext">Enter Details to Reset Password</h1>
        </div>
        <div class="formdesign">
          <form action="forgetpass.php" method="post">
            <input type="text" class="inputbox" class="inputclass" name="emailid" placeholder="Enter Email Address">
            <input type="text" class="inputbox" name="username" placeholder="Enter Username">
            <p class="successmessage"><?php     {echo $successmsg;}     ?></p>
            <input type="submit"class="submitbutton" name="submit" value="Send Mail">
          </form>
        </div>
      </div>
  </body>
</html>
