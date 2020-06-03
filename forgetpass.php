<?php
include('dbconfig.php');
$successmsg = null;
if(isset($_POST['submit']))
{
$email=$_POST['emailid'];
$username=$_POST['username'];
$que="select * from user where username='$username' and emailid='$email'";
$x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
$result=mysqli_fetch_assoc($x);
mail($email,'Recover Password','Your Password is: '.$result["password"],'From: ocloudbca@gmail.com');
$successmsg="Mail Sent Successfully!";
}
else
{
  echo "<script>
  alert('Incorrect Details Eentered.');
  </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget Password?</title>
    <link rel="stylesheet" href="css/forget.css">
  </head>
  <body>
    <main>
      <form class="formdesign" action="forgetpass.php" method="post">
        <input type="text" name="emailid" placeholder="Enter Email Address">
        <input type="text" name="username" placeholder="Enter Username">
        <p class="successmessage"><?php     {echo $successmsg;}     ?></p>
        <input type="submit" name="submit" value="Send Mail">
      </form>
    </main>
  </body>
</html>
