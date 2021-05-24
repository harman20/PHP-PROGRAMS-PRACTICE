<?php

interface Shape{
    public function calArea();
}
function areaCuboid($l, $h, $b)
{
	return ($l * $h * $b);
}

function surfaceAreaCuboid($l, $h, $b)
{
	return (2 * $l * $b + 2 * $b *
				$h + 2 * $l * $h);
}


$l = 1;
$h = 5;
$b= 7;
echo "Area = " ,
	areaCuboid($l, $h, $b) , "\n";
echo "Total Surface Area = ",
	surfaceAreaCuboid($l, $h, $b);

?>
