<?php
session_start();
include('dbconfig.php');
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
    $conn=mysqli_query($conn,"update user set password='$pass', cpassword='$cpass' where username='$user'");
    echo "Password Changed Successfully";
  }

}
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Change Password</title>
   </head>
   <body>
     <form action="changepassword.php" method="post">
       <input type="password" name="newpass" placeholder="New Password">
       <input type="password" name="confirmpass" placeholder="Confirm Password">
       <input type="submit" name="submit" value="Submit">
     </form>
   </body>
 </html>
