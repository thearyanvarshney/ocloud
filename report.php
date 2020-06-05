<?php require "header.php"; ?>
<?php
$msg=null;
include 'dbconfig.php';
if(isset($_POST['submit']))
{
  $user=$_SESSION['username'];
  $issue = $_POST['issue'];
  $status="pending";
  $sql="INSERT INTO issue(username,issue,status) VALUES('$user','$issue','$status')";
  if(mysqli_query($conn,$sql))
  {
  $msg="Your Problem is Recorded. It'll be Resolved Soon!";
  }
  else
  {
    $msg="Something Went Wrong! Please Try Again!";
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
        <p><?php echo $msg; ?></p>
      <input type="submit" value="Send" name="submit" class="button">
    </form>
  </body>
</html>
