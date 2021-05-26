<?php
$con=mysqli_connect("localhost","root","","class");
if(!$con)
{
  die( mysqli_connect_error());
}
$name1=$_POST["name1"];
$email1=$_POST["email1"];
$pwd1=$_POST["pwd1"];
$cnt1=$_POST["cnt1"];


$qry=mysqli_query($con,"insert into filetable(name,email,pwd,contact) values('$name1','$email1','$pwd1',$cnt1)");

if($qry)
{
    echo "form submitted";
    $qry="select * from filetable";
    $qry1=mysqli_query($con,$qry);
    echo "<table border=1><tr><td>id</td><td>name</td><td>email</td><td>pwd</td><td>contact</td></tr>";
    while($row=mysqli_fetch_array($qry1))
    {
        echo "<tr><td>";
        echo $row[0];
        echo "</td><td>";
        echo $row[1];
        echo "</td><td>";
        echo $row[2];
        echo "</td><td>";
        echo $row[3];
        echo "</td><td>";
        echo $row[4];
        echo "</td></tr>";

    }
echo "</table>";

}
else
{
    echo "form not submitted";
}

?>