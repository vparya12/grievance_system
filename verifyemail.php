<?php
	//connect to database
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
		$email= $_REQUEST['val'];
		$query = "SELECT Email FROM publicdetails";
		$result = mysql_query($query);
		$flag = false;
		$i=0;
		if(!$result){
			echo "New User";
		}
		while($DATA=mysql_fetch_array($result))
		{	
			
			if($email==$DATA['Email']){
				$flag = true;
			}
		}
		if($flag==true){
			echo "<b><font color='red'>Email Id Already Registered</font></b>";
		}
		else{
			echo '<img src="./data/checked.gif">';
		}
	
?>