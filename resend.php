<?php
session_start();
	$email= $_SESSION['name'];
	$msg = rand(11111,99999);
	$replyer = 'From: publicgrievance@gmail.com';
	$Subject = "Confirmation Code";
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
	mysql_query("UPDATE logindetails SET Code = $msg WHERE Email='$email'");
	#mail($email,$Subject,"Your Confirmation Code Is ".$msg,$replyer)
	echo "Code Has Been Send To Your Email Id";
?>