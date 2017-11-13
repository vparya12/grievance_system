<?php
		session_start();
			$email=$_SESSION['name'];
			if(isset($email)){
	/*	$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
				
				$user_image = mysql_query("SELECT * FROM image WHERE Email='$email'")  or die(mysql_error());
				
				$picture = mysql_fetch_assoc($user_image);	
				$picture = $picture['Image'];
				header("Content-type: Image/jpeg");
				echo $picture;
			}
?>