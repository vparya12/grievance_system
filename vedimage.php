<?php


	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	echo $temp[0];
	echo $_FILES['file']['name'];
	$extension = end($temp);
	if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")||($_FILES["file"]["type"] == "image/JPG")||  ($_FILES["file"]["type"] == "image/jpg")|| ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/x-png")|| ($_FILES["file"]["type"] == "image/png"))&& ($_FILES["file"]["size"] < 500000)&& in_array($extension, $allowedExts))
    {
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

			if (file_exists("upload/" . $_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
				echo '<script>
					document.getElementById("Picture").innerHTML="Ved is Correct";
				
				</script>';
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
				echo '<script>
					document.getElementById("Picture").innerHTML="Ved is Correct";
				
				</script>';
				
		
			}
		}
	}
else
  {
	if($_FILES["file"]["type"] == ""){
		echo 'No file choosen';
	}
	else {
		echo "Invalid file";
	}
  }
 

 

?>