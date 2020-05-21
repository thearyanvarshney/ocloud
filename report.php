<?php require "header.php"; ?>
<?php include('dbconfig.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Report An Issue</title>
  </head>
  <body>
    <form action="creport.php" method="post">
        <input class="input-field" type="text"  name="issue" placeholder="Describe the problem being faced, briefly!" rows="8" cols="80"></textarea>
      <button type="submit" value="submit"name="submit">Send</button>
    </form>
  </body>
</html>
