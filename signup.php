<!DOCTYPE html>

<html>
<head>
  <title>Sign Up - Let's get started!</title>
  <link rel="stylesheet" href="css/signup.css" type="text/css">
	<script src="js/signup.js"></script>
</head>
  <body>
    <div id="header">
      <div id="header-left-logo">
          <!--<img height="90px;" src="picture/mainlogo.png">-->
      </div>

      <div id="header-right">
          <a class="header-right-menu" href="index.php">Home</a>
          <a class="header-right-menu" href="login.php">Login</a>
          <a class="header-right-menu active" href="signup.php">Sign Up</a>
          <a class="header-right-menu" href="aboutus.php">About</a>
          <a class="header-right-menu" href="contactus.php">Contact Us</a>
      </div>
    </div>
    <div class="breakclass"></div>
    <form id="signupform" action="login.php" method="post" >
     <h1 style="font-family: myfont; font-size: 40px;">Let's Get Started</h1>
        <input class="inputclass" type="text" name="FirstName" placeholder="First Name" required>
        <input class="inputclass" type="text" name="LastName" placeholder="Last Name">
        <br><br>
        <input class="inputclass" type="date" name="DateOfBirth" placeholder="Date Of Birth" required>
        <br><br>
        <input class="inputclass" type="tel" name="ContactNum" placeholder="Contact Number" maxlength="10" required>
        <br><br>
        <input class="inputclass" id="username" type="text" name="Username" placeholder="Username" onclick="reseterror2()" required>
        <br><br>
        <input class="inputclass" id="userpass1" type="password" name="Password" placeholder="Password" onClick="reseterror()1" required>
        <br><br>
        <input class="inputclass" id="userpass2" type="password" name="CPassword" placeholder="Confirm Password" onClick="reseterror()1" required><br><br>
        <div style="font-family:myfont;"><input type="checkbox" onclick="toggle()">Show Password</div>
        <center>
         <p class="errormessage"><?php     echo $a=@$_GET['msg'];     ?></p>
        <p id="innerpopup1" class="errormessage"></p>
        <p id="innerpopup2" class="errormessage"></p>
        </center>

          <br>
        <input style="font-family: myfont; font-size: 18px;" class="submitclass" type="submit" value="Sign Up!" name="SignUp" onClick="validateuserid();passmatch()">
        </form>

  </body>
</html>
