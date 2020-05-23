<?php require "header.php"; ?>
<?php include('dbconfig.php');?>
<!DOCTYPE html>
<html>

<head>
  <title>Personal Profile</title>
  <link rel="stylesheet" href="css/profile.css">
  <script src="js/profile.js"></script>
</head>
<body onclick="closewindow(event)">
  <div class="inner">
      <?php
        $username =$_SESSION['username'];
        $sql1="SELECT * FROM user where username='$username'";
        $result=mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_array($result))
        {
            ?>
    <div class="profile">
      <br>
      <img src="picture/smile.png">
      <h1 style="margin-top:5px"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h1>
    </div>
    <div class="content">
            <br><br>
            <h3><b>Name:</b><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h3>
            <h3><b>Contact:</b> <?php echo $row['phone']; ?></h3>
            <h3><b>Username:</b> <?php echo $row['username']; ?></b></h3>
            <h3><b>Password:</b> <?php echo("********"); ?></h3>
      <button id="myBtn" type="button" name="ChPassword" onclick="openmodal()">Click To Change Password</button>
      <div id="myModal" class="modal" >
        <div class="modal-content">
          <div class="modal-header">
              <h1 class="heading">Change Password<span class="close" onclick="closemodal()">&times;</span></h1>
        </div>
        <div class="passwordcontent">
          <form id="passform" action="changepassword.php" method="post">
            <input class="inputclass" type="password" name="curpassword" placeholder="Current Password" required>
            <input class="inputclass" id="passchange1" type="password" name="npassword" placeholder="New Password" required>
            <input class="inputclass" id="passchange2" type="password" name="cPassword" placeholder="Confirm Password" required>
            <p id="inner"><br></p>
            <input class="buttonstyle" type="submit" name="Submit" value="Change Password" onclick="validate()" >

          </form>


        </div>



        </div>

      </div>
      <?php } ?>
    </div>
  </div>

</body>

</html>
