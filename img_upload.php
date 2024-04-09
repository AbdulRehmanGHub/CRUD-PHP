<?php 

error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMG UPLOAD</title>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="img_file"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>

<?php

// $folder = "/img";
// print_r($_FILES["img_file"]);

$filename = $_FILES["img_file"]["name"];
$tempname = $_FILES["img_file"]["tmp_name"];
$folder = "img/" .$filename;
// echo $folder;

move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='70px' width='70px'>";
?>

<!-- <img src="img/tutor.png" height="70px" width="70px" border="1"> -->