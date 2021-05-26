<?php 

session_start();

$_SESSION["username"]="thinknext";
$_SESSION["password"]="mohali";

echo $_SESSION["username"];
echo "<br>";

echo $_SESSION["password"];

print_r($_SESSION);
//session_destroy();

?>