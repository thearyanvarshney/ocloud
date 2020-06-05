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
