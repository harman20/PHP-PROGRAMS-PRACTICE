<?php 
$con=mysqli_connect("localhost","root","","class");

$qry=mysqli_query($con,"insert into filetable(name,email,pwd,contact) values('$name','$email','$pwd','$contact')");
if($qry)
{
    echo "form submitted";
    $qry="select * from filetable";
    $qry1=mysqli_query($con,$qry);
    echo "<table border=1><tr><td>id</td><td>name</td><td>email</td><td>pwd</td>";
    while ($row=mysqli_fetch_array($qry1)) {
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
        echo "</td><tr>";
    }
    echo "</table>";
}
else {
  echo "form not submitted";
}

?>