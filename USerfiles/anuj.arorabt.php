<!DOCTYPE html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("bg.jfif");
background-repeat: no-repeat;
background-size: cover;}

form {border: 0px; width: 60%;; }

input[type=text] {
  width: 150%;
height:80 px;
  padding: 12px 0px;
  margin: 7px 0;
  display: block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 57%;
}
</style>
</head>
<body>
<?php
$conn=mysqli_connect("localhost","root","","immersion");
$a=mysqli_query($conn,"select * from company where name='bt' ");
$i=0;
while($ab=mysqli_fetch_assoc($a))
{
$about=$ab['about'];
;
$i++;
}
?>
<div class ="container">
<form action="update.php" method="post">
  <label for="about">About:</label><br>
<textarea cols="160" placeholder="data" rows="40" name="data" required><?php echo $about ; ?></textarea><br><br>
 
</form>
</body>
</html>