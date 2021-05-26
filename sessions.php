<?php 
/*
Step 1:  session_start();
Step 2: $_SESSION[name]= value; //set session name and value
Step 3: echo $_SESSION[name]; //get session value

DELETE SESSION-
Step 1:   session_unset(); //Remove all session variables
Step 2:   session_destroy(); //Destroy the session


*/
session_start();

$_SESSION["username"]="thinknext";
$_SESSION["password"]="mohali";

echo $_SESSION["username"];
echo "<br>";

echo $_SESSION["password"];

print_r($_SESSION);
//session_destroy();

?>
