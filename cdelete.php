<?php require "header.php"; ?>
<?php
include('dbconfig.php');
if (isset($_POST['delete'])) {
    //$fname = $_FILES['files']['name'];
    $username = $_SESSION['username'];
    $sql = "Delete from userfiles where username='$username'";
    if (mysqli_query($conn, $sql)) {
        echo 'File Delete successfully';
    } else {
        echo 'Error in Delete';
    }
}

?>
        
