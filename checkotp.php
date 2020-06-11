<?php
session_start();
include('dbconfig.php');
if(!isset($_SESSION['$username']))
{
header('location:login.php?msg=Invalid Access!');
}
else {
  if(isset($_POST['validate']))
  {
    $otpinput=$_POST['otp'];
    $otpver="select * from otpgen where username= '" . $_SESSION['$username'] . "' and email='" . $_SESSION['$email'] . "'";
    $y=mysqli_query($conn,$otpver);
    $value=mysqli_fetch_assoc($y);
    if($value['otp']==$otpinput)
    {
    header('location:changepassword.php');
    }
    else
    {
      echo "<script>
      alert('Incorrect OTP!');
      </script>";
    }
  }
  if(isset($_POST['exitbutton']))
  {
    $_SESSION = array();
    session_destroy();
    header('location:login.php?msg=Session Terminated!');
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/forget.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <title>Verify OTP</title>
   </head>
   <body>
     <div class="header">
       <img class="headerlogo" src="picture/mainlogo.png">
       <form action="checkotp.php" method="post">
       <button type="submit" name="exitbutton" class="exitbutton"><span title="Back to Login!" class="material-icons" style="font-size: 40px;">exit_to_app</span></button>
       </form>
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
