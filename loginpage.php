<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		include_once('indexved.php');
	}
	else
	{	
		/*
		$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
		
		$useremail = $_SESSION['name'];
		
		$user_detail = mysql_query("SELECT * FROM publicdetails WHERE Email='$useremail'") or die(mysql_error());
		$user_image = mysql_query("SELECT * FROM image WHERE Email='$useremail'")  or die(mysql_error());
		$data = mysql_fetch_array($user_detail);
		$picture = mysql_fetch_array($user_image);	
		$Name = $data['First_Name']." ".$data['Last_Name'];
		$Email_Id =$data['Email'];
		
		include_once("header.php");
?>
<link rel="stylesheet" href="loginpage.css" type="text/css">

<div class="sec3">
		
	<div id="UserDetails">
		<?php echo '<img src=getimage.php style="width:50%; border-radius:100%;"' ?><br /><br />
		
		<p class="Data">	Name:- <?php echo '<font color=#999900>'.$Name.'</font>'; ?><br /></p>
		<p class="Data">	Gender:- <?php echo '<font color=#999900>'.$data['Gender'].'</font>'; ?><br /></p>
		<p class="Data">	DOB:- <?php echo '<font color=#999900>'.$data['DOB'].'</font>'; ?><br /></p>
		<p class="Data">	Mobile No:- <?php echo '<font color=#999900>'.$data['Mobile'].'</font>'; ?><br /></p>
		
	</div>
</div> 
<div class="sec7">
	
	<div id="Items">
		<div class="A" onclick="recent()" >Recent</div>
		<div class="A" onclick="application()">Application</div>
		<div class="A" onclick="inbox()">Inbox</div>
		<div class="A" onclick="status()" >Status</div>
		<div class="A" onclick="complain()" >Complain</div>
		<div class="A"><a href="logout.php" >Logout</a></div>
		</ul>
		
	</div>
	<div class="Space" >
		<span id="AllData">
		<?php
			
			if(isset($_SESSION['activelink'])){
				unset($_SESSION['activelink']);
				include('recent.php');
			}
		
		?>
		
		</span>
	</div>
</div>


<script src="loginjava.js" type="text/javascript" language="javascript">

</script>

<?php
	
include_once("footer.php");
include_once("loginleftpannel.php");
}
?>