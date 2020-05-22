<?php require "header.php"; ?>
<?php
include('dbconfig.php');
$user=$_SESSION['username'];
if (isset($_POST['delete'])) {
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i];
    mysqli_query($conn,"Delete from userfiles where id='".$del_id."'");
	$message = "&#10004; File Deleted Successfully!";
}
}
$result = mysqli_query($conn,"SELECT * FROM userfiles");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Delete Files On One Go!</title>
<link rel="stylesheet" href="css/delete.css">
<script type="text/javascript" src="js/delete.js">

</script>
</head>

<body>
  <form id="formclass" action="" method="post" enctype="multipart/form-data">
  <h1>Hello <?php echo $_SESSION['username']; ?>! Delete Your Files!</h1>
  <table table="table">
    <p id="blankline"><br></p>
    <p id="errormessage"><?php if(isset($message)) { echo $message; } ?></p>
    <tr>
       <th><input type="checkbox" id="checkAl" onclick="toggle()"> Title</th>
      <th>File Name</th>
      <th>Date Of Creation</th>

    </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"> <?php echo $row['title']; ?></td>
                        <td><?php echo $row['filename']; ?></td>
                        <td><?php echo $row['date']; ?></td>


                    </tr>


                <?php } ?>

  </table>
  <button type="submit" name="delete" class="button"onclick="validate()">Delete</button>

</form>
</body>
</html>
