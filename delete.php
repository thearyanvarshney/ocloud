<?php require "header.php"; ?>
<?php include('dbconfig.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Delete Files On One Go!</title>
<link rel="stylesheet" href="css/delete.css">
</head>

<body>
  <h1>Hello <?php echo $_SESSION['username']; ?>! Delete Your Files!</h1>
  <table>
    <tr>
      <th>Title</th>
      <th>File Name</th>
      <th>Date Of Creation</th>
      <th>Delete</th>
    </tr>
    <tbody>
                <?php
                $i = 1;
                $username = $_SESSION['username'];
                $sql1 = "select title,filename,date from userfiles where username='$username'" ;
                //$sql = "remove from userfiles where username='$username' and filename='$fname' ";
                if (file_exists($sql1)) {
                    $success = unlink($sql1);
                if (!$success) {
                    throw new Exception("Cannot delete $sql1");
                   }
                }
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['filename']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <button class="button button1" name="delete">Delete</button>
                            </td>
                    </tr>
                    
                <?php } ?>
            </tbody>
<script >
 var tr= document.getElementsByClassName("button1");
</script>

  </table>
</body>

</html>
