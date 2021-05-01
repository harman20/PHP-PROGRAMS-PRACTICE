<?php
if(isset($_POST["submit"]))
{
$countfile=count($_FILES["filetoupload"]["name"]);


for($i=0;$i<$countfile;$i++)
{
    $filename=$_FILES["filetoupload"]["name"][$i];
    // echo $filename;
    if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"][$i],"uploadnew/".$filename))
    {
        echo "success";
    }
    else{
        echo "failure";
    }
}

}

?>
<html>
<form method="post" enctype="multipart/form-data" action=" ">
<input type="file" name="filetoupload[]" multiple><br>
<input type="submit" name="submit" value="submit">
</form>
<html>
