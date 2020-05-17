 <?php require "header.php"; ?>
<?php
include('dbconfig.php');
if (isset($_POST['uploadfile'])) {
    $fname = $_FILES['files']['name'];
    $title = $_POST['title'];
    $caption = $_POST['caption'];
    $username = $_SESSION['username'];
    $date = date("Y-m-d");
    $sql = "INSERT INTO userfiles(username,title,caption,filename,date) Values('$username','$title','$caption','$fname','$date')";
    if (mysqli_query($conn, $sql)) {
         move_uploaded_file($_FILES['files']['tmp_name'], "USerfiles/".$username.$fname);
        header('location:upload.html?msg=File Upload Successfully');
    } else {
        header('location:userinterface.php?msg=Error In Upload');
    }
}
?>
