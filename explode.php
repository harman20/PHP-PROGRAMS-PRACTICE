<?php

$biodata = "My name is Harmanjit Singh.";

$r = explode(" ",$biodata);

print_r($r);

foreach ($r as $val) {
echo $val;    
}

?>