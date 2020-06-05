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
    echo "qqqq . $otpinput . qqq";
    if($value['otp']==$otpinput)
    {
    header('location:changepassword.php');
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
}
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>VErify OTP!</title>
   </head>
   <body>
     <form class="formclass" action="checkotp.php" method="post">
       <input type="number" id="myText" name="otp" placeholder="Enter OTP">
       <input type="submit" id="Button" name="validate" value="Verify">
     </form>
   </body>
 </html>
