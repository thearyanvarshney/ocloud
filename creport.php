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
