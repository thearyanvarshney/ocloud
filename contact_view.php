<?php
include 'dbconfig.php';
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $phone=$_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    $que="select * from contact where binary id='$user'";
    $x=mysqli_query($conn,$que);
if(mysqli_num_rows($x)==1)
{
    header('location:contactus.php?msg=Again Sent Your Query');
}
else{
    $sql="INSERT INTO `contact` (`name`, `phone`, `email`, `comment`) VALUES ('$name','$phone','$email','$comment')";
    mysqli_query($conn,$sql);
    header('location:contactus.php?msg=Query Sent Succesfully');
}
}
?>
