<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("location:complain.php");
}
else{
$To = $_POST['To'];
$sub = $_POST['Subject'];
$comp_Text= $_POST['comp'];
$sender= $_SESSION['name'];
$ran = rand(100000,999999);
$comp_Id= "comp".$ran;
$d = getdate();
$y=$d['year'];
$m = $d['mon'];
$dt = $d['mday'];
$dinak =$y."-".$m."-".$dt;
//mail($To,$sub,$comp_Text,$sender);
//connect to database
	/*	$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
	mysql_query("INSERT INTO inbox VALUES ('$sender','$comp_Id','$To','$sub','$dinak','$comp_Text')");
	mysql_query("INSERT INTO status VALUES ('$sender','$comp_Id','Send','$dinak')");
	mysql_close();
		
		header("location:loginpage.php");
	

}
?>