 <?php 
session_start();
//session_destroy();
?>
<html>
<head>
<title>User Login System</title>
</head>
<body>
<?php
if(isset($_SESSION['id']))
{
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.
<?php
}
else echo "<h1>Please login first .</h1>";
?>
</body>
</html>