<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charsey="utf-8">
<title></title>
</head>
<body>
<?php
if(isset($_SESSION["favcolor"])){
echo "Favourite color : ". $_SESSION["favcolor"];
}
?>
</body>
</html>