<?php
session_start();
include('dbconfig.php');
$flag=0;
$error=null;
if(!isset($_SESSION['$username']))
{
header('location:login.php?msg=Invalid Access!');
}
else {
  $user=$_SESSION['$username'];
  if(isset($_POST['submit']))
  {
    $pass=md5($_POST['newpass']);
    $cpass=md5($_POST['confirmpass']);
    if ($pass!=$cpass) {
      $error="&#9888; Passwords Don't Match!";
    }
    else {
      $conn=mysqli_query($conn,"update user set password='$pass', cpassword='$cpass' where username='$user'");
      $flag=1;
      $_SESSION = array();
      session_destroy();
      if($flag==1)
      {
        header('location:login.php?msg1=Password Changed Successfully!');
      }
    }
  }
}
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Change Password</title>
     <link rel="stylesheet" href="css/forget.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   </head>
   <body>
     <div class="header">
       <img class="headerlogo" src="picture/mainlogo.png">
       <form action="checkotp.php" method="post">
       <button type="submit" name="exitbutton" class="exitbutton"><span title="Back to Login!" class="material-icons" style="font-size: 40px;">exit_to_app</span></button>
       </form>
       <div class="form-div">
         <div class="heading">
           <h1 class="headingtext">Enter New Password</h1>
         </div>
         <div class="formdesign">
     <form action="changepassword.php" method="post">
       <input type="password" class="inputbox" name="newpass" placeholder="New Password">
       <input type="password" class="inputbox" name="confirmpass" placeholder="Confirm Password">
       <p><?php echo $error; ?></p>
       <input type="submit" class="submitbutton" name="submit" value="Submit">
     </form>
   </div>
 </div>
   </body>
 </html>
