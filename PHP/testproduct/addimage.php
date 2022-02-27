<?php
$conn = mysql_connect("localhost","bharane","21feb1991");
mysql_select_db("testproduct",$conn);
if(isset($_POST['upload'])){
$imagepath = "images/test.jpg";
$file = $_FILES['image']['name'];
function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
}
$img = resize_image($imagepath, 200, 200);
}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<form action="addimage.php" method="POST" enctype="multipart/form-data">
<input type="file" name="image" />
<input type="submit" name="upload" value="upload" />
</form>
</body>
</html>