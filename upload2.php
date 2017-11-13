<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
	echo $fileName = $_FILES['userfile']['name'];
	echo $tmpName  = $_FILES['userfile']['tmp_name'];
	echo $fileSize = $_FILES['userfile']['size'];
	echo $fileType = $_FILES['userfile']['type'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc())
	{
		$fileName = addslashes($fileName);
	}
	include 'library/config.php';
	include 'library/opendb.php';

	$query = "INSERT INTO upload (name, size, type, content ) ".
	"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

	mysql_query($query) or die('Error, query failed'); 
	include 'library/closedb.php';

	echo "<br>File $fileName uploaded<br>";
} 
?>