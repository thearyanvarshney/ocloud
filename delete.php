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
  <table table="table">
    <tr>
      <th>Title</th>
      <th>File Name</th>
      <th>Date Of Creation</th>
      <th>Delete</th>
    </tr>
                <?php
                $i = 1;
                $username = $_SESSION['username'];
                $sql1 = "select title,filename,date from userfiles where username='$username'" ;
                $result = mysqli_query($conn, $sql1);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['filename']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                            <form action="cdelete.php" method="post" enctype="multipart/form-data">
                            <button type="submit" name="delete">Delete</button>
                            </form>
                            </td>
                    </tr>

                <?php } ?>
            </tbody>

  </table>

</body>

</html>
