<?php
	/*	$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
	$lastid = $_GET['id'];
	include_once("header.php");
	
?>

<link rel="stylesheet" href="profilepage.css" type="text/css">
	<div class="sec10">
		<div id="ProfilePic">
			<?php 
				echo $lastid;
			?><br>
			<form method="post" action="profilepage.php" enctype="multipart/form-data">
			
					File:-<input type="file" name="image" value="choose"  >
					<input type="submit" name="ImageUpload" value="Uplaod" onclick="changeImage()">
			</form>
			
		</div>
	</div>

<?php
include_once("footer.php");

?>