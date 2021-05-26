<?php 


$cookie_name ="thinknext";
$cookie_value="mohali";

setcookie($cookie_name,$cookie_value,time()-(86400*30),"/");

?>

<html>
<body>
<?php 

if(isset($_COOKIE[$cookie_name]))
{
    echo "cookie named".$cookie_name." is not set";
}
else{
    echo "cookie set".$cookie_name."with value".$cookie_value
}
?>
</body>
</html>