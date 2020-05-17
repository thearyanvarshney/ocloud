<?php require "header.php"; ?>
<?php
include('dbconfig.php');
if (isset($_POST['delete'])) {
    //$fname = $_FILES['files']['name'];
    $username = $_SESSION['username'];
    $sql = "Delete from userfiles where username='$username'";
    if (mysqli_query($conn, $sql)) {
        header('location:delete.php?msg=File Delete Successfully');
    } else {
        header('location:delete.php?msg=Error In Delete');
    }
}

?>
