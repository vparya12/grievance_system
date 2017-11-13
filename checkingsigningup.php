<?php
	if(isset($_POST["upload"]) && $_FILES["file"]['size']>0)
	{	session_start();
		$database = "college";
		$tablename = "image";
		$fn= 		 $_POST['fn'];
		$ln= 		 $_POST['ln'];
		$email= 	 $_POST['email'];
		$password =  $_POST['password2'];
		$mobile= 	 $_POST['mobile'];
		$date=       $_POST['date'];
		$sex= 		 $_POST['sex'];
		//connect to database
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());**/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
		//file properties
			$fileSize = $_FILES['file']['size'];			
			if($fileSize>0){
				 $fileName = $_FILES['file']['name'];
				 $tmpName  = $_FILES['file']['tmp_name'];
				 $fileSize = $_FILES['file']['size'];
				 $fileType = $_FILES['file']['type'];
				 $image = addslashes(file_get_contents($tmpName));
				 $image_name = addslashes($fileName);
				 $msg = rand(11111,99999);
				if(mysql_query("INSERT INTO publicdetails VALUES('$fn','$ln','$email',$mobile,'$date','$sex')"))
				{
					if(mysql_query("INSERT INTO image VALUES('$email','$image_name','$image')"))
					{
						if(mysql_query("INSERT INTO logindetails VALUES ('$email','$password','active',$msg)"))
						{
							$replyer = 'From: publicgrievance@gmail.com';
							
							$To = $email;
							$Subject = "Confirmation Code";
							#mail($To,$Subject,$msg,$replyer);
							$_SESSION['name']=$email;
							#header("location:confirmation.php");
							header("location:loginpage.php");
						}else{
							$err = mysql_error();
							mysql_query("DELETE * FROM image WHERE Email='$email'");
							mysql_query("DELETE * FROM publicdetails WHERE Email='$email'");
							mysql_query("DELETE * FROM logindetails WHERE Email='$email'");
							header("location:signup.php?q=$err");
						}
					}else{
						$err = mysql_error();
						mysql_query("DELETE * FROM image WHERE Email='$email'");
						mysql_query("DELETE * FROM publicdetails WHERE Email='$email'");
						header("location:signup.php?q=$err");
					}
								
				}else
				{
					$err = mysql_error();
					mysql_query("DELETE * FROM publicdetails WHERE Email='$email'");
					header("location:signup.php?q=$err");
				}
				
			}else{
				$err= mysql_error();
				header("location:signup.php?q=$err");
			}
				
			
	}
	else{
	
		header("location:signup.php?q=Image Not Selected");
		/*	$fathername= $_POST['fathername'];
			$mothername= $_POST['mothername'];
			$vill= 		 $_POST['vill'];
			$po= 		 $_POST['po'];
			$ps= 		 $_POST['ps'];
			$pin= 		 $_POST['pin'];
			$dist= 		 $_POST['dist'];
			$card= 		 $_POST['acn']; 
			$image_size = getimagesize($_FILES['file']['tmp_name']);
			if($insert = mysql_query("INSERT INTO publicaddress VALUES('$email','$vill','$po','$ps',$pin,'$dist','$card')"))
			{
			setcookie('name', $email);
			echo "Thank You For Registration:";
			mysql_query("DELETE * FROM publicaddress WHERE Email='$email'") or die(mysql_error());
			mysql_query("DELETE * FROM publicaddress WHERE Email='$email'") or die(mysql_error());
			}
			else{
				mysql_query("DELETE * FROM publicdetails WHERE Email='$email'") or die(mysql_error());
			}

			$lastid = mysql_insert_id();
			echo "<img src=get.php?id=$lastid >";
			 &&
					 &&
					
			*/
	}
	
	
?>



