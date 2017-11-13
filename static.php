<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajax HTTP Request</title>
</head>

<body>
	<form method="post" action="static.php" >
	Name:- <input type="text" name="username" placeholder="Name" id="USERNAME"  /> <br />
	<input type="submit" name="Get" value="Show" >
	</form>
	<span>
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
	
	</span>
</body>
</html>
