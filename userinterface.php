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
				<button class="button-one" onclick="runupload()">Upload File</button>
			</div><br>
				<div class="submain"><button class="button-two" onclick="rundownload()"><span>Download File</span></button></div><br>
				<div class="submain"><button class="button-three" onclick="rundelete()">Delete File</button></div>
				</div><br>
			<!--DIV ==> Profile contain div-->
			<div id="profile">
				<a href="profile.html">
					<img id="profile-pic" src="picture/smile.png">
				</a>
			</div>

			<!--DIV ==> Logout Div-->
			
				<button id="logout" class="button-four" onclick="window.open('login.php','_self')">Sign Out</button>
				
		</div>


		<!--DIV ==> Second column of dashboard which contain Recent items and files viem option-->
		<div id="col2">

            <iframe id="pagecontainer" src="upload.html"></iframe>

		</div>

</div>
</body>
</html>
