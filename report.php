<?php require "header.php"; ?>
<?php
include 'dbconfig.php';
if(isset($_REQUEST['submit'])){
    $user=$_SESSION['username'];
    $issue = $_REQUEST['issue'];
    $status="pending";
    $que="select * from issue where binary id='$user'";
    $flag=0;
    $x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
    header('location:report.php?msg=Again Sent Your Query');
    $flag=1;
}
else{
    $sql="INSERT INTO `issue` (username,issue,status) VALUES ('$user','$issue',$status)";
    mysqli_query($conn,$sql);
    header('location:report.php?msg=Query Sent Succesfully');
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/report.css">
    <meta charset="utf-8">
    <title>Report An Issue</title>
  </head>
  <body>
    <br>
    <h1>Report An Issue or Give Feedback!</h1>
    <h3>Feel free to share your problem or views with us.</h3>

    <form class="formclass" action="report.php" method="post">
        <textarea class="input-field" type="text"  name="issue" placeholder="Describe the problem being faced, briefly! Or Give Suggestions!" rows="8" cols="80" required></textarea><br>
      <input type="submit" value="Send" name="submit" class="button">
    </form>
  </body>
</html>
