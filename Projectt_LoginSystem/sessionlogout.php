<?php 
session_start();
$message="";
if(count($_POST)>0) {
    $con=mysqli_connect('localhost','root','','demo1') or die('Unable to connect');
    $result=mysqli_query($con,"SELECT * from login where username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    $row= mysqli_fetch_array($result);
    if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
    } 
    else {
        $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["id"])) {
    header("Location:index11.php");
    }

?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
<strong>Username:</strong><br>
<input type="text" name="user_name" required>
<br><br>
<strong>Password:</strong><br>
<input type="password" name="password" required>
<br><br>
<input type="submit" name ="submit" value="Submit" required>
<input type="reset">
</form>
</body>
</html>