<?php
session_start();
?>
<?php
 include('dbconfig.php');
 if(isset($_REQUEST['Submit']))
 {
 $name=$_REQUEST['Username'];
 $pass=$_REQUEST['Password'];
 $que="select * from user where binary username='$name' and binary password='$pass'";
 $x=mysqli_query($conn,$que);
 if(mysqli_num_rows($x)==1)
 {
  $_SESSION['username']=$name;
  header('location:userinterface.php');
 }
 else
 {
 header('location:login.php?msg=Either UserName or Password is Incorrect');
 }
}
?>
