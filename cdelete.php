<?php require "header.php"; ?>
<?php
include('dbconfig.php');
if (isset($_POST['delete'])) {
    //$fname = $_FILES['files']['name'];
    $username = $_SESSION['username'];
    $sql = "Delete from userfiles where username='$username'";
    if (mysqli_query($conn, $sql)) {
        header('location:upload.php?msg=File Delete Successfully');
    } else {
        header('location:upload.php?msg=Error In Delete');
    }
}

?>
