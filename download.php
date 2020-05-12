<?php require "header.php"; ?>
<?php include('dbconfig.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>View Your Files</title>
		<link rel="stylesheet" href="css/download.css">
	</head>
	<body>
		<center><h1 class="home-title"><span>Hello <?php echo $_SESSION['username']; ?>!</span>
			<span>View, Edit & Download Your Files!</span></h1></center>
			<br>
<div class="container">
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>My Files</th>
				<th>Date of Creation</th>
				<th>Modify/Download</th>
			</tr>
		</thead>
		<tbody>
			<!--Table Content (Aryan ka kaam)-->
			<?php
                        $i = 1;
			$username = $_SESSION['username'];
                        $sql1 = "select title,filename,date from userfiles where username='$username'";
                        $result = mysqli_query($conn, $sql1);
                        while ($row = mysqli_fetch_array($result))
                                {
                            ?>
                            <tr>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['filename']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
																	<a href="USerfiles/<?php echo $username.$row['filename']; ?>" target="_blank"><button class="button button2">View</button></a>
                                	<a href="USerfiles/<?php echo $username.$row['filename']; ?>" download><button class="button button1" name="download">Download</button></a>
																	<a href=""><button class="button button3">Delete</button></a>
																</td>
                            </tr>
                        <?php } ?>
		</tbody>
	</table>
</div>
</body>
</html>
