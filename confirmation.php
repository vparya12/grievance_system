<?php
	session_start();
 
	if(!isset($_SESSION['name']))
	{
		include_once('signup.php');
	}
	else{
		include_once('header.php');
		$checkEmail= $_SESSION['name'];
		$email=$checkEmail;
		$database = "college";
		$flag = false;
		$errorMessage="";
		//connect to database
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
			$confirmation_code = mysql_query("SELECT * FROM logindetails WHERE Email='$email'")  or die(mysql_error());
			$data = mysql_fetch_array($confirmation_code);	
			$code = $data['Code'];
			
			if(isset($_POST['Verify']))
			{
				$user_code = $_POST['code'];
				if($user_code==$code)
				{
					mysql_query("UPDATE logindetails SET Status='active' WHERE Email ='$email'");
				
					header("location:loginpage.php");
					
				}
				else
				{
					$errorMessage="<font color='red'>.Invalid Code. Try Again!</font>";
					$flag=true;
					
					
				}
			}

		
	?>
		<div id="ConfirmationBox" style="margin-left:35%;margin-top:10%">
		<form method="post" action="confirmation.php">
			Verification Code has been send to your Email Id.<br>
			<input type="text" name="code" placeholder="Enter Code Here">
			<input type="submit" name="Verify" value="Verify">
		</form>
		<br>
		<br>
		<span id='Code'></span><br>
		<b><a href="#" onclick="resend()">Resend</a></b>
		<script>
		function resend()
			{
				var url = "resend.php";
				
				if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
				else if(window.ActiveXObject)
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				
				xmlhttp.onreadystatechange = function() {getAllData();}
				xmlhttp.open("GET",url, true);
				xmlhttp.send();
				
				function getAllData(){
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("Code").innerHTML = xmlhttp.responseText;
					}
				}
			
			}
		
		</script>
			<?php
				if($flag==true)
				{ 
					$flag=false;
					echo $errorMessage;
				}
			
			?>
		</div>

<?php
	
	include_once('footer.php');
	}
?>