<?php

$con = mysqli_connect("localhost","root","","demo");

if(!$con)
{
    die('error'.mysqli_connect_error());
}
else
{
    echo "data connection made ";
}
$fname=$_REQUEST["t1"];
$lname=$_REQUEST["t2"];
$address=$_REQUEST["t3"];

echo $fname;
echo $lname;
echo $address;

$qry="insert into stud(fname,lname,address) values('$fname','$lname','$address')";
$res = mysqli_query($con,$qry);
if($res)
{
    echo "data added ";
}
else
{
    echo "data not added";
}

?>