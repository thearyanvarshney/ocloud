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
				<button type="button" class="body-left-options" onclick="showdivdash()">Dashboard</button></div>
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivuser()">User's Details</button></div>
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivquery()">Queries</button>
			</div>
			<div id="body-left-menu">
				<button type="button" class="body-left-options" onclick="showdivissue()">Issues</button>
			</div>
			<div id="logout-div">
				<a href="adminlogin.html"><button type="button">Logout</button></a>
			</div>
		</div>

		<div id="body-right">
			<!--Admin Dashboard-->
			<div class="rightcontent" style="display:inline-block">
				<div class="firstdiv">
                                    <?php
                                    $sql="select count(*) as total from user";
                                    $result=mysqli_query($conn,$sql);
                                    $data=mysqli_fetch_assoc($result);
                                    echo "Total Number of Users are ".$data['total'];    
                                    ?>
		      <div class="seconddiv bg-orange">
		      </div>
				</div>
				<div class="firstdiv">
                                    <?php
                                    $sql="select count(*) as total from userfiles";
                                    $result=mysqli_query($conn,$sql);
                                    $data=mysqli_fetch_assoc($result);
                                    echo "Total Number of Files are ".$data['total'];    
                                    ?>
                                    
		      <div class="seconddiv bg-blue">
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
            <th> ID</th>
            <th>Full Name</th>
            <th>Date of Birth</th>
            <th>Contact Number</th>
            <th>Username</th>
          </thead>
            <tbody>
                <?php
                $sql1 = "select id,fname,lname,dob,phone,username from user";
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
												<td></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['username']; ?></td>
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
                $sql1 = "select id,username,issue from issue";
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
												<td></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['issue']; ?></td>
												<td></td>
												<td><button type="button" name="button">Solved</button> </td>

                                        </tr>

                <?php } ?>
				</tbody>
				</table>
			</div>

		</div>
	</div>
</body>

</html>
