<?php 

include "config.php";

$del1=$_GET["id"];
//echo $del1;

$qrydel="delete from stud where id=".$del1;



$res=mysqli_query($con,$qrydel);

if($res)
{
    //$qry1="select *from stud";
  $res1=  mysqli_query($con,"select *from stud");
    while($row=mysqli_fetch_array($res1))
{
    echo $row[1];
}
    echo "data deleted";
}
else
{
    echo "data not deleted";
}

?>