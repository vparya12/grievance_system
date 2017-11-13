<?php
//connect to database
	$database = "college";
	$tablename = "image";
	/*	$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
	
	$id = addslashes($_REQUEST['id']);
	$image = mysql_query("SELECT * FROM image WHERE ID=$id");
	$image = mysql_fetch_assoc($image);
	$image= $image['Image'];
	
	header("Content-type: image/jpeg");
	echo $image;

?>