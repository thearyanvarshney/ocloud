<?php 
session_start();
session_destroy();
if(isset($_SESSION['username'])==$s)
{
session_destroy();
echo "<script>location.href='login.php'</script>";
}
else
{
echo "<script>location.href='login.php'</script>";
}
?>