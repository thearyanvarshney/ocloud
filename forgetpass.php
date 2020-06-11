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
<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/forget.css">
     <title>Verify OTP</title>
   </head>
   <body>
     <div class="header">
       <div class="headerlogo"></div>
     </div>
     <div class="form-div">
       <div class="heading">
         <h1 class="headingtext">Enter OTP</h1>
       </div>
       <div class="formdesign">
         <form action="checkotp.php" method="post">
           <input type="number" class="inputbox" name="otp" placeholder="Enter OTP">
           <input type="submit" class="submitbutton" name="validate" value="Verify">
         </form>
       </div>
     </div>
   </body>
</html>
