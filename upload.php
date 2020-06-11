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
         move_uploaded_file($_FILES['files']['tmp_name'], "Userfiles/".$username.$fname);
        header('location:upload.php?msg=File Upload Successfully');
    } else {
        header('location:upload.php?msg=Error In Upload');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/upload.css">
</head>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">

    <h1><strong>Upload Your Files</strong></h1>

    <div class="form-group">
      <label for="title">Title <span>Use title case to get a better result</span></label>
      <input type="text" name="title" id="title" class="form-controll" required/>
    </div>
    <div class="form-group">
      <label for="caption">Caption <span>This caption should be descriptive</span></label>
      <input type="text" name="caption" id="caption" class="form-controll" />
    </div>

    <div class="form-group file-area">
      <label for="Files">Files <span>Choose Files To Upload</span></label>
      <input type="file" name="files" id="files"  multiple="multiple" required/>
      <div class="file-dummy">
        <div class="success">Great, your files are selected. Keep On!</div>
        <div class="default">Please select some files</div>
      </div>
    </div>
    <div class="alignclass">
        <div class="form-group">
            <p> <?php     echo $a=@$_GET['msg'];     ?></p>
        <button type="submit" name="uploadfile">Upload Files</button>
      </div>
      <div>

  </form>

</body>

</html>
