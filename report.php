<?php require "header.php"; ?>
<?php include('dbconfig.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/report.css">
    <meta charset="utf-8">
    <title>Report An Issue</title>
  </head>
  <body>
    <br>
    <h1>Report An Issue or Give Feedback!</h1>
    <h3>Feel free to share your problem or views with us.</h3>

    <form class="formclass" action="creport.php" method="post">
        <textarea class="input-field" type="text"  name="issue" placeholder="Describe the problem being faced, briefly! Or Give Suggestions!" rows="8" cols="80" required></textarea><br>
      <input type="submit" value="Send" name="submit" class="button">
    </form>
  </body>
</html>
