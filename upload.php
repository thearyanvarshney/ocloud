<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/upload.css">
</head>

<body>
  <form action="cupload.php" method="post" enctype="multipart/form-data">

    <h1><strong>Upload Your Files</strong></h1>

    <div class="form-group">
      <label for="title">Title <span>Use title case to get a better result</span></label>
      <input type="text" name="title" id="title" class="form-controll" />
    </div>
    <div class="form-group">
      <label for="caption">Caption <span>This caption should be descriptive</span></label>
      <input type="text" name="caption" id="caption" class="form-controll" />
    </div>

    <div class="form-group file-area">
      <label for="Files">Files <span>Choose Files To Upload</span></label>
      <input type="file" name="files" id="files" required="required" multiple="multiple">
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
