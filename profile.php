<?php require "header.php"; ?>
<?php include('dbconfig.php');?>
<?php $username =$_SESSION['username'];
$sql1="SELECT * FROM user where username='$username'";
$y=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($y);
?>
<?php
$msg1=null;
if(isset($_POST['Submit']))
{
   $curpass=md5($_POST['curpassword']);
   $npass=md5($_POST['npassword']);
   $cnpass=md5($_POST['cpassword']);
   $que="SELECT * FROM user where username='$username'";
   $x=mysqli_query($conn,$que);
   $result=mysqli_fetch_assoc($x);
  if(mysqli_num_rows($x)==1)
  {
    if($result["password"]==$curpass)
    {
   $conn=mysqli_query($conn,"update user set password='$npass', cpassword='$cnpass' where username='$username'");
   $msg1="Password Changed Successfully!";
    }
    else{
      $msg1="Old Password is Incorrect!";
    }
  }
  else
  {
      $msg1="Something Went Wrong, Please Try Again!";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Personal Profile</title>
  <link rel="stylesheet" href="css/profile.css">
  <script src="js/profile.js"></script>
</head>
<body onclick="closewindow(event)">
  <div class="inner">
    <div class="profile">
      <br>
      <img src="picture/smile.png">
      <h1 style="margin-top:5px"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h1>
    </div>
    <div class="content">
          <div style="height:75%">
            <br><br>
            <h3><b>Name:</b><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h3>
            <h3><b>Contact:</b> <?php echo $row['phone']; ?></h3>
            <h3><b>Username:</b> <?php echo $row['username']; ?></b></h3>
            <h3><b>Email Id:</b> <?php echo$row["emailid"]; ?></h3>
            <p class="inner"><?php     {echo $msg1;}     ?></p>
          </div>
            <button id="myBtn" type="button" name="ChPassword" onclick="openmodal()">Click To Change Password</button>
      </div>
      <div id="myModal" class="modal" >
        <div class="modal-content">
          <div class="modal-header">
              <h1 class="heading">Change Password<span class="close" onclick="closemodal()">&times;</span></h1>
        </div>
        <div class="passwordcontent">
          <form id="passform" action="profile.php" method="post">
            <input class="inputclass" type="password" name="curpassword" placeholder="Current Password" required>
            <input class="inputclass" id="passchange1" type="password" name="npassword" placeholder="New Password" required>
            <input class="inputclass" id="passchange2" type="password" name="cpassword" placeholder="Confirm Password" required>
            <input class="buttonstyle" type="submit" name="Submit" value="Change Password" onclick="validate()" >

          </form>
        </div>
        </div>
      </div>


  </div>

</body>

</html>
