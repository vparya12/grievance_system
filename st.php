<?php
	if(isset($_POST['Get']))
	{
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
		
		$Name = $_POST['username'];
		if($Name=="")
		{
			echo "Invalid Name";
		}
		else{
			$query ="SELECT * FROM web WHERE Name='$Name'";
			$result = mysql_query($query);
			if($result>=1)
			{
				$row = mysql_fetch_array($result);
				$UserName = $row['Name'];
				$UserRoll = $row['Roll'];
				$UserClass = $row['Class'];
				$UserCollege = $row['College'];
				
				echo "Name :- ".$UserName."<br>";
				echo "Roll :- ".$UserRoll."<br>";	
				echo "Class :- ".$UserClass."<br>";
				echo "College :- ".$UserCollege."<br>";
			}
		}
	}
	?>