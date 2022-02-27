<html>
<body>
<form action="index.php" method="post" enctype="multipart/form-data" id="something" class="uniForm">
        <input name="new_image" id="new_image" size="30" type="file" class="fileUpload" />
        <button name="submit" type="submit" class="submitButton">Upload/Resize Image</button>
</form>
</body>
</html>
<?php
 $stop = '0';
        if(isset($_POST['submit'])){
          if (isset ($_FILES['new_image'])){
              $imagename = time().$_FILES['new_image']['name'];
              $source = $_FILES['new_image']['tmp_name'];
              $file_size = $_FILES['new_image']['size'];
              $size_limit = '2000000';
              $target = "images/".$imagename;
              $file_type = $_FILES['new_image']['type'];
 
                if($file_size >= $size_limit) :
                  echo 'You image is to large!';
                else :
                 if($_FILES['new_image']['type'] == 'image/jpeg'):
                  move_uploaded_file($source, $target);
                 elseif($_FILES['new_image']['type'] == 'image/png'):
                  move_uploaded_file($source, $target);
                 elseif($_FILES['new_image']['type'] == 'image/gif'):
                  move_uploaded_file($source, $target);
                 endif;
                 endif;
 
 
                $imagepath = $imagename;
               $save = "images/" . $imagepath; //This is the new file you saving
               $file = "images/" . $imagepath; //This is the original file
              $x = @getimagesize($file); 
  switch($x[2]) { 
   case 1: 
        $image = imagecreatefromgif($file); 
       break; 
   case 2: 
        $image = imagecreatefromjpeg($file);
       break; 
   case 3: 
        $image = imagecreatefrompng($file);  
       break; 
   default: 
        echo "file is not a valid image file.<br>"; 
        $stop = '1';
       break;
  } 
         if($stop != 1) {
              list($width, $height) = getimagesize($file) ; 
 
              $modwidth = $width;
 
              $diff = $width / $modwidth;
 
              $modheight = $height / $diff; 
              $tn = imagecreatetruecolor($modwidth, $modheight) ; 
              /*
              $file_type = $_FILES['new_image']['type'];
  if($file_type == "image/jpeg" || $file_type == "image/jpg") :
   $image = imagecreatefromjpeg($file);
  elseif($file_type == "image/x-png" || $file_type == "image/png") :
   $image = imagecreatefrompng($file);
  elseif($file_type == "image/gif") :
   $image = imagecreatefromgif($file);
   else : 
    echo 'Invalid type';
  endif;*/
 
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              imagejpeg($tn, $save, 100) ; 
 
              $save = "images/thumbs/sml_" . $imagepath; //This is the new file you saving
              $file = "images/" . $imagepath; //This is the original file
 
              list($width, $height) = getimagesize($file) ; 
 
              $modwidth = 200; 
 
              $diff = $width / $modwidth;
 
              $modheight = $height / $diff; 
              $tn = imagecreatetruecolor($modwidth, $modheight) ; 
       $x = @getimagesize($file); 
  switch($x[2]) { 
   case 1: 
        $image = imagecreatefromgif($file); 
       break; 
   case 2: 
        $image = imagecreatefromjpeg($file);
       break; 
   case 3: 
        $image = imagecreatefrompng($file);  
       break; 
   default: 
        echo "file is not a valid image file."; 
   } 
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              imagejpeg($tn, $save, 100) ; 
            echo "Large image: <img src='images/".$imagepath."'><br>"; 
            echo "Thumbnail: <img src='images/thumbs/sml_".$imagepath."'>"; 
 
          }
   }
  echo $_FILES['new_image']['type'],'<br>';
        echo $_FILES['new_image']['name'],'<br>';
        }
?>