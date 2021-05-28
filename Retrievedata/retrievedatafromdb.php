<?php
$con=mysqli_connect("localhost","root","","class");
$qry="select name from filetable";
$res=mysqli_query($con,$qry);


?>
<form action="abc1.php" method="post">
<select name="sel1">


<?php
while ($row=mysqli_fetch_array($res)) {
    ?>
    <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
    <?php
}
?>
</select>
<input type="submit">
</form>