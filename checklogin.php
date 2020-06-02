<?php
session_start();
?>
<?php
 include('dbconfig.php');
 if(isset($_REQUEST['Submit']))
 {
 $name=$_REQUEST['Username'];
 $pass=md5($_REQUEST['Password']);
 $que="select * from user where binary username='$name' and binary password='$pass'";
 $x=mysqli_query($conn,$que);
 $result=mysqli_fetch_assoc($x);

 if($result["usertype"] == 'admin' and mysqli_num_rows($x)==1)
 {
   $_SESSION['username']=$name;
   header('location:adminpanel.php');
 }
 else if($result["usertype"] == 'normal' and mysqli_num_rows($x)==1)
 {
  $_SESSION['username']=$name;
  header('location:userinterface.php');
 }
 else
 {
 header('location:login.php?msg=Either UserName or Password is Incorrect!');
 }

}
?>
