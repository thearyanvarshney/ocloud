<?php 
$conn=mysqli_connect('localhost','root','') or die(mysqli_error($conn));
$db=mysqli_select_db($conn,"ocloud") or die(mysqli_error($conn));
?>