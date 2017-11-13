<?php
				$fileName = $_GET['q'];
				$imageName = explode("\\", $fileName);
				echo $imageName[2];
				
				
				/*mysql_connect("localhost","root","") or die(mysql_error());
				mysql_select_db("imagestest") or die(mysql_error());
				
				$user_image = mysql_query("SELECT * FROM store WHERE ID=36")  or die(mysql_error());
				
				$picture = mysql_fetch_assoc($user_image);	
				$picture = $picture['Image'];
				header("Content-type: Image/jpeg");
				echo $picture;*/
?>