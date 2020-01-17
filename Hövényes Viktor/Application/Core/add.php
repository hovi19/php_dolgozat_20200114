<form name="upload" method="POST" action="index.php?page=upload">
    kép: <input type="text" name="thumbnail"><br />
    Author: <input type="text" name="author"><br/>
    <input type="submit" name="btnSubmit" value="Feltöltés"><br/>
</form>

<?php
if(isset($_POST["btnSubmit"]))
{
    $thumbnail = $_POST["thumbnail"];
    $author =$_POST["author"];

    echo $thumbnail." ".$author;
}
$marks = array("thumbnail"=>$thumbnail, "author"=>"$author");
echo json_encode($marks);

$h = fopen ("data.json", "a+");
fwrite($h, json_encode($marks));