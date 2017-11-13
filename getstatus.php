<?php
	session_start();
	$comp = $_REQUEST['q'];
	$email = $_SESSION['name'];
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
	$query= "SELECT * FROM status WHERE Email ='$email' AND ComplainID = '$comp'";
	if($insert = mysql_query($query))
	{
		$complain_Data = mysql_fetch_array($insert);
		$Recent_Status = $complain_Data['Status'];
		echo "<br><b>Complain ID :- </b>".$comp."<br><br>";
		echo "<b>Status :- </b>".$Recent_Status."<br><br>";
	}
	
?>