<?php require "header.php"; ?>
<?php
include 'dbconfig.php';
if(isset($_REQUEST['submit'])){
    $user=$_SESSION['username'];
    $issue = $_REQUEST['issue'];
    $que="select * from contact where binary id='$user'";
    $x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
    header('location:report.php?msg=Again Sent Your Query');
}
else{
    $sql="INSERT INTO `issue` (`username`, `issue`) VALUES ('$user','$issue')";
    mysqli_query($conn,$sql);
    header('location:report.php?msg=Query Sent Succesfully');
}
}
?>
