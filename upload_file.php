<?php
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
	
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
    $name = iconv("UTF-8","gb2312",$_FILES["file"]["name"]);
    /*if (file_exists("upload/" . $name))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	*/
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$name);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    }
?>