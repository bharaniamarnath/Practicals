<?php
if(isset($_FILES['ImageUpload'])){
	$imageName = $_FILES['ImageUpload']['name'];
	$imageTemp = $_FILES['ImageUpload']['tmp_name'];
	$imageType = $_FILES['ImageUpload']['type'];
	$imageName = preg_replace("#[^a-z0-9.]#i", "", $imageName);
	
	if(!$imageTemp){
		echo("Select a file to upload");
	}
	else{
		move_uploaded_file($imageTemp, "uploads/$imageName");
	}
}
?>
<!doctype html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script type="text/javascript">
function Slider(){
	$(".slider #1").show("fade",500);
	$(".slider #1").delay(5500).hide("slide",{direction:'left'},500);
	
	var sc = $('.slider img').size();
	var count = 2;
	
	setInterval(function(){
	$(".slider #"+count).show("slide",{direction:'right'},500);
	$(".slider #"+count).delay(5500).hide("slide",{direction:'left'},500);
	
	if(count == sc){
		count = 1;
	}
	else{
		count = count + 1;
	}
	},6500);
}
</script>
<style type="text/css">
.slider{
width: 561px;
height: 238px;
overflow: hidden;
margin: 30px auto;
background-image: url('loading.gif');
background-repeat: no-repeat;
background-position: center;
}
.slider img{
width: 561px;
height: 238px;
display: none;
}
</style>
</head>
<body onload="Slider()">
<form action="index.php" method="post" enctype="multipart/form-data">
Choose a file to upload: <input type="file" name="ImageUpload"><br /><br />
<input type="submit" value="Upload">
</form>
<hr />
<div class="slider">
<?php
	$imageDisplay = "";
	$images = scandir("uploads");
	$ignore = array(".","..");
	$i = '1';
	foreach($images as $file){
		if(!in_array($file, $ignore)) {
			$imageDisplay .= '<img id='.$i.' src="uploads/'.$file.'" border="0" />';
			$i++;
		}
	}
	echo($imageDisplay);
?>
</div>
</body>
</html>