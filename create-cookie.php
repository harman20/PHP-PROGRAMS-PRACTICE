<?php 

$cookie_name="user";
$cookie_value="Harman";

setcookie($cookie_name,$cookie_value, time() +  (86400 * 30 ), "/");


?>

<html>
<body>
<?php

if(!isset($_COOKIE[$cookie_name])){


}
else{
echo $_COOKIE[$cookie_name];
}

?>
</body>
</html>