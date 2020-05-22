<?php require "header.php"; ?>
<?php
include('dbconfig.php');
$user=$_SESSION['username'];
if (isset($_POST['delete'])) {
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i]; 
    mysqli_query($conn,"Delete from userfiles where id='".$del_id."'");
	$message = "Data deleted successfully !";
}
}
$result = mysqli_query($conn,"SELECT * FROM userfiles");
?>
<!DOCTYPE html>
<html>

<head>
  <title>Delete Files On One Go!</title>
<link rel="stylesheet" href="css/delete.css">
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
  <h1>Hello <?php echo $_SESSION['username']; ?>! Delete Your Files!</h1>
  <table table="table">
    <p> <?php if(isset($message)) { echo $message; } ?></p>
    <tr>
        <th><input type="checkbox" id="checkAl"> Select All</th>
       <th>Title</th>
      <th>File Name</th>
      <th>Date Of Creation</th>
      
    </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>"></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['filename']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        

                    </tr>
                    

                <?php } ?>
            </tbody>

  </table>
  <button type="submit" name="delete" class="button button3">Delete</button>
  
</form>
    <script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</body>

</html>
