<?php
$flag=false;
$errorMessage="";						
	if(isset($_POST['submit'])){
			session_start();
			$username=$_POST['username'];
			$password = $_POST['password'];
		/*$mysql_host = "mysql6.000webhost.com";
		$mysql_database = "a5371345_college";
		$mysql_user = "a5371345_ved";
		$mysql_password = "vparya12";
	mysql_connect($mysql_host,$mysql_user,$mysql_password) or die(mysql_error());
	mysql_select_db($mysql_database) or die(mysql_error());*/
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("college") or die(mysql_error());
			
			$result = mysql_query("SELECT * FROM logindetails WHERE Email='$username' AND Password='$password'");
			$count =mysql_num_rows($result);
			if($count==1)
			{
				$Account = mysql_fetch_array($result);
				$AccountStatus = $Account['Status'];
				if($AccountStatus=='active')
				{
					$_SESSION['name']= $username;
					$_SESSION['activelink']="recent";
					//setcookie('name', $username);
					header("Location: loginpage.php");
				}else
				{
					$_SESSION['name']= $username;
					header("location:confirmation.php");
				}
			}
			else
			{
				$flag=true;
				$errorMessage= "Invalid Email Or Password!";
			}
	}
include_once("headerhome.php");
?>
<div class="sec3">
        <div id='sidebar'>
			<div id="relatedlink">Government Of Bihar</div>
			<ul class="sidemenu">
                  <li>
                    <a href="#"> About Us</a>
				  </li>
                  <li>
					 <a href="#">Grievance Redress Mechanism </a>
				  </li>
                     <li><a href="">Guidelines for Redress of Public Grievances 2015</a>
				  </li>
					<li><a href=""> Guidelines for Redress of Public Grievances</a></li>
					<li><a href="">Directors Of Public Grievances </a></li>
					<li><a href="">Grievance Redress Flow Chart</a></li>
					<li><a href="">Redress Process Channels</a></li>
                
					<li><a href=""> FAQ on Grievance Redress Mechanism</a></li>
					<li><a href="">Site Map</a></li>
              </ul>
             <hr />
		   <div id="relatedlink">
			 Related Links
		   </div>
				<ul class="sidemenu">
					<li><a href="www.gndec.ac.in" target="_blank">Guru Nanak Dev Engineering College</a></li>
					<li><a href="" target="_blank">Bihar School Examination Board</a></li>
				 </ul>
				<hr />
		</div>
		<div class="sidebar1">
		</div>		
</div>
<div class="sec5">
	<div id="nevigation">
		   <ul class="navbar">
			 <li>
			  <a href="#">HOME</a>
			 </li>
			<li>
			 <a href="#">PROFILE</a>
			</li>
			 <li>
			  <a href="#">GRIEVANCE</a>
				<ul>
				 <li><a href="#">SOME LINKS</a></li>
				 <li><a href="#">LINK1</a></li>
				 <li><a href="#">LINK2</a></li>
				 </ul>
			</li>
	  <ul>			   
	</div>
	<marquee><p style="margin-top:5%">Public grievance redressal system<p></marquee>
	<div id= "second">
					
			<div id="wheel">
				<marquee behavior="alternate" width=100%>
					<img src="data/wheel.png" width="30px;" style="border-radius:100%;"/>
				</marquee>
			</div>

			<div id = "img" >

				<img id="ppt"  width=100% style="margin-top:11%" />
				
			</div>
	</div>
	<div style="margin-top:8%;font-size:12px">
	  All grievances relating to to State Governments / Union Territory Administrations and Government of NCT Region of Delhi,
	  are to be redressed by the State/ UT/ NCT Government concerned. Citizens are advised to take up matter regarding pendency 
	  of their grievance directly with the State Government concerned.All grievances relating to to State Governments / Union Territory Administrations and Government of NCT Region of Delhi,
	  are to be redressed by the State/ UT/ NCT Government concerned. Citizens are advised to take up matter regarding pendency 
	  of their grievance directly with the State Government concerned.
	</div>
	
</div>
 
<div class="sec2">
	<div class="sidebar1">
	</div>
	<div id="Third">

		<div id="log">
			
			<form id ="loginform" action="index.php" method="post">
				<img src="data/demo.png" style="border-radius:100%;height:40%;width:40%;" /><br><br>
				<input type="text" class='usericon' name="username" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<input type="submit" name="submit" value="Login" />
				
			</form>
			<?php
				if($flag==true)
				{
					$flag = false;
					echo "<font color='red'>".$errorMessage."</font>";
					$errorMessage="";
				}
			?>
			
		</div>
		<div id ="map">
			<script src="http://maps.googleapis.com/maps/api/js"></script>
				<script>
				function initialize() {
				  var mapProp = {
					center:new google.maps.LatLng(25.6000,85.1000),
					zoom:6,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				  };
				  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
				}
				google.maps.event.addDomListener(window, 'load', initialize);
				</script>
			<div id="googleMap" style="width:184px; height:190px;"></div>
		</div>
	</div>		
</div>
		
<?php
include_once("footer.php");
include_once("leftpannel.php");
?>
