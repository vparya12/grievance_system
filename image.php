

<?php

	if(isset($_POST["upload"]) && $_FILES["userfile"]['size']>0)
	{	
		$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";

		$database = "college";
		$tablename = "image";
		
		$fn= 		 $_POST['fn'];
		$ln= 		 $_POST['ln'];
		$fathername= $_POST['fathername'];
		$mothername= $_POST['mothername'];
		$email= 	 $_POST['email'];
		$password =  $_POST['password2'];
		$mobile= 	 $_POST['mobile'];
		$date=       $_POST['date'];
		$sex= 		 $_POST['sex'];
		$vill= 		 $_POST['vill'];
		$po= 		 $_POST['po'];
		$ps= 		 $_POST['ps'];
		$pin= 		 $_POST['pin'];
		$dist= 		 $_POST['dist'];
		$card= 		 $_POST['acn']; 
		//connect to database
	
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());
	#mysql_connect("localhost","root","") or die(mysql_error());
	#mysql_select_db("college") or die(mysql_error());
		
		//file properties
		
				$fileSize = $_FILES['userfile']['size'];
				
			
			if($fileSize>0){
				 $fileName = $_FILES['userfile']['name'];
				 $tmpName  = $_FILES['userfile']['tmp_name'];
				 $fileSize = $_FILES['userfile']['size'];
				 $fileType = $_FILES['userfile']['type'];
				 $image = addslashes(file_get_contents($tmpName));
				 $image_name = addslashes($fileName);
				//$image_size = getimagesize($_FILES['userfile']['tmp_name']);
				if($insert = mysql_query("INSERT INTO publicdetails VALUES('$fn','$ln','$fathername','$mothername','$email',$mobile,'$date','$sex')"))
				{
					if($insert = mysql_query("INSERT INTO publicaddress VALUES('$email','$vill','$po','$ps',$pin,'$dist','$card')"))
					{
						if($insert = mysql_query("INSERT INTO image VALUES('$email','$image_name','$image')"))
						{
								$msg = rand(11111,99999);
							if($insert=mysql_query("INSERT INTO logindetails VALUES ('$email','$password','dead',$msg)"))
							{
								$replyer = 'From: vparya12@gmail.com' . "\r\n" .
								'Reply-To: vparya12@gmail.com' . "\r\n" .
										'X-Mailer: PHP/' . phpversion();
								$To = $email;
								$Subject = "Confirmation Code";
								//mail($To,$Subject,$msg,$headers);
								header("location:confirmation.php?val=$email");
								//echo "Thank You For Registration:";
								
							}
							else
							{
								mysql_query("DELETE * FROM image WHERE Email='$email'") or die(mysql_error());
								mysql_query("DELETE * FROM publicaddress WHERE Email='$email'") or die(mysql_error());
								mysql_query("DELETE * FROM publicdetails WHERE Email='$email'") or die(mysql_error());
							}
							
						}
						else
						{
							mysql_query("DELETE * FROM publicaddress WHERE Email='$email'") or die(mysql_error());
							mysql_query("DELETE * FROM publicdetails WHERE Email='$email'") or die(mysql_error());
						}
						
					}
					else{
						mysql_query("DELETE * FROM publicdetails WHERE Email='$email'") or die(mysql_error());
					}
				}
				else
				{
					//echo "Retry Again<br>";
					header('signup.php');

				}
				
				}
				
			
				/*	
						$lastid = mysql_insert_id();
						echo "<img src=get.php?id=$lastid >";
				*/
	}
	else{
		//echo "Sorry Fill The Form Correctly";
		header("location:signup.php?val=false");
	}
	
	
?>



