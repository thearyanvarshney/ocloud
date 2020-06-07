<?php require "header.php"; ?>
<?php include('dbconfig.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin's Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script type="text/javascript" src="js/adminpanel.js"></script>
</head>

<body>
	<div id="head-div">
		<div id="head-left">
			<div id="logo-div">

			</div>
		</div>
		<div id="head-right">

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
			<!--ID: 0-->
			<div id="body-left-menu">
				<a href="#dashboard"><button type="button" class="body-left-options" onclick="showdiv(0)">Dashboard</button></a>
			</div>
			<!--ID: 1-->
			<div id="body-left-menu">
				<a href="#userdetails"><button type="button" class="body-left-options" onclick="showdiv(1)">User's Details</button></a>
			</div>
			<!--ID: 2-->
			<div id="body-left-menu">
				<a href="#queries"><button type="button" class="body-left-options" onclick="showdiv(2)">Queries</button></a>
			</div>
			<!--ID: 3-->
			<div id="body-left-menu">
				<a href="#issues"><button type="button" class="body-left-options" onclick="showdiv(3)">Issues</button></a>
			</div>
			<div id="logout-div">
				<a href="logout.php"><button type="button">Logout</button></a>
			</div>
		</div>

		<div id="body-right">
			<!--Admin Dashboard-->
			<div class="rightcontent" style="display:inline-block">
				<div class="firstdiv">
					<div class="seconddiv bg-orange">
						<span class="material material-icons" style="font-size: 80px;">person</span>
		      </div>
					<div class="thirddiv">
						<p class="detail">Total Number of Users: <span><?php
						$sql="select count(*) as total from user where usertype='normal'";
						$result=mysqli_query($conn,$sql);
						$data=mysqli_fetch_assoc($result);
						echo $data['total'];
						?></span></p>
					</div>
					<hr>
					<div class="fourthdiv">
						<p class="para"><span class="material-icons clock">update</span>Just Updated</p>
					</div>

				</div>
				<div class="firstdiv">
					<div class="seconddiv bg-blue">
						<span class="material material-icons" style="font-size: 70px; padding-top: 8%">folder</span>
		      </div>
					<div class="thirddiv">
						<p class="detail">Total Number of Files: <span><?php
						$sql="select count(*) as total from userfiles";
						$result=mysqli_query($conn,$sql);
						$data=mysqli_fetch_assoc($result);
						echo $data['total'];
						?></span></p>
					</div>
					<hr>
					<div class="fourthdiv">
						<p class="para"><span class="material-icons clock">update</span>Just Updated</p>
					</div>
				</div>
				<div class="firstdiv">
		      <div class="seconddiv bg-green">
		      </div>
				</div>
			</div>
			<!--User Details  Division-->
				<div class="rightcontent">
				<table>
					<thead>
						<th>User No.</th>
            <th>ID</th>
            <th>Full Name</th>
						<th>Username</th>
						<th>Email Id</th>
            <th>Date of Birth</th>
            <th>Contact Number</th>

          </thead>
            <tbody>
                <?php
                $sql1 = "select id,fname,lname,emailid,dob,phone,username from user where usertype='normal'";
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
												<td></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['emailid']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['phone']; ?></td>

										</tr>

                <?php } ?>
				</tbody>
				</table>
			</div>
			<!--Query Division-->
			<div class="rightcontent">
				<center><h3>Your Users are facing following Problems:</h3></center>
				<table>
					<thead>
						<th>Query No.</th>
						<th> ID</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Comment</th>
					</thead>
						<tbody>
								<?php
								$sql2 = "select id,name,phone,email,comment from contact";
								$result = mysqli_query($conn, $sql2);
								while ($row = mysqli_fetch_array($result)) {
										?>
										<tr>
											<td></td>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['name']; ?></td>
											<td><?php echo $row['phone']; ?></td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['comment']; ?></td>
										</tr>

								<?php } ?>
				</tbody>
				</table>
			</div>
			<!--Issue/Problem Division-->
			<div class="rightcontent">
				<table>
					<thead>
								<th>Sr No.</th>
                <th>ID</th>
                <th>Username</th>
                <th>Issue/Problem</th>
								<th>Status</th>
								<th>Commit</th>
        </thead>
            <tbody>
                <?php
                $sql3 = "select id,username,issue,status from issue";
                $result = mysqli_query($conn, $sql3);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
												<td></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['issue']; ?></td>
			    							<td><?php echo $row['status']; ?></td>
												<td><button type="button" name="button">Solved</button></td>
											</tr>

                <?php } ?>
				</tbody>
				</table>
			</div>

		</div>
	</div>
</body>

</html>
