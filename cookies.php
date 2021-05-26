<?php 


echo "Welcome to the world of cookies";

// Cookies | Sessions
echo time();
//syntax to set a cookie
setcookie("category", "Books", time() + 86400, "/"); // '/' means throughoutthe website mein cookie ko use kar sakte hain , 1din mein 86400 seconds
echo " <br> the cookie is set</br>";

?>