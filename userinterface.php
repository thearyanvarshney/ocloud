<?php require "header.php"; ?>
<?php include('dbconfig.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;
charset=UTF-8">
	<title>User's Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/userinterface.css">
	<script src="js/userinterface.js"></script>
</head>
<body>
	<!--DIV ==> Full Dashboard-->
	<div id="dash">
		<!--DIV ==> First column of dashboard which contain Logo's, files, places, profile and logout contain-->
		<div id="col1">
			<!--DIV ==> Logo contain div-->
			<div id="logo-div"></div>
			<!--DIV ==> home div or home page after sign in-->
			<div id="home-div">
				<a href="userinterface.php">
					<img src="icons/home-icon.png">Home</a>
			</div>
			<!--DIV ==> Files and options-->
				<p class="files-heading"><b>My Files</b></p><br>
				<div class="main">
				<div class="submain">
				<button class="button-one" onclick="runupload()"><img class="button-pic-1" src="picture/upload.png">Upload File</button>
			</div><br>
				<div class="submain">
					<button class="button-two" onclick="rundownload()"><img class="button-pic-2" src="picture/download.png"><span>View File</span></button>
				</div><br>
				<div class="submain">
					<button class="button-three" onclick="rundelete()"><img class="button-pic-3" src="picture/delete.png">Delete File</button>
				</div>
				</div><br>
			<!--DIV ==> Profile contain div-->
			<br><br>
				<button class="button-four" type="button" name="profile" onclick="runprofile()"><img class="button-pic-4" src="picture/smile.png">View Profile</button>
				<br>
				<button class="button-four"type="button" name="button"><span>&#9888;</span>Report An Issue!</button>
			<!--DIV ==> Logout Div-->

				<a href="logout.php"><button id="logout" class="button-five" onclick="window.open('logout.php','_self')">Sign Out</button>

		</div>


		<!--DIV ==> Second column of dashboard which contain Recent items and files viem option-->
		<div id="col2">

            <iframe id="pagecontainer" src="upload.php"></iframe>

		</div>

</div>
</body>
</html>
