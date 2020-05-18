<?php include('dbconfig.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin's Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
	<script type="text/javascript" src="js/adminpanel.js"></script>
</head>

<body>
	<div id="head-div">
		<div id="head-left">
			<div id="logo-div">

			</div>
		</div>
		<div id="head-right">
			<div id="search-bar">
				<form>
					<input id="head-search" type="search" placeholder="Search...">
				</form>
			</div>
			<div id="profile-div">
				<div id="profile-left">
					<a href="#">
						<img src="picture/smile.png">
					</a>
				</div>
				<div id="profile-right">
					<a href="#">
						<p>Hello Admin!</p>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="body">
		<div id="body-left">
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivuser()">Users</button></div>
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivissue()">Reports</button>
			</div>
			<div id="logout-div">
				<a href="logout.php">
					Logout
				</a>
			</div>
		</div>

		<div id="body-right">
			<div id="userdetail" class="rightcontent" style="display:inline-block">
				<table>
					<tr>
                    <th> ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Contact Number</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql1 = "select id,fname,lname,dob,phone,username from user";
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        
                                        </tr>
                    
                <?php } ?>
				</tbody>
				</table>
			</div>
			<div id="issueblockview" class="rightcontent">
				<p>Division 2!</p>
				<!--Issue dekhne ki php script-->
			</div>
		</div>
	</div>
</body>

</html>
