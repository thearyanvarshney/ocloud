<?php
session_start();
include("dbconfig.php");

if(isset($_POST['Submit']))
{
 $user=$_SESSION['username'];
 $npass=$_POST['npassword'];
 $que="SELECT password FROM user where username='$user' ";
 $x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
 $conn=mysqli_query($conn,"update user set password=' $npass' where username='$user'");
echo"Password Changed";
}
else
{
echo"Old Password not match !!";
}
}
?>
