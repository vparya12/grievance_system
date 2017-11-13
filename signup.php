<?php
include_once("header.php");
?>
<link rel="stylesheet" href="signup.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>
<!--SignUp Box -->
		

			<div class="sec10" id="SignupBox">
				<form name="signupform" action="checkingsigningup.php" method="post" id="Signupform" enctype="multipart/form-data" ><br />			
				<div id="LeftBox">
					
					
						First Name :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="fn" placeholder="First Name" onblur="checkFirst()" />
						<span id="fname"></span><br /><br 																			 						/>
						Last Name :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="ln" placeholder="Last Name" onblur="checkLast()"/><span id="lname"></span><br /><br />
						Email Id :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="email" name="email" placeholder="Email ID"  onblur="checkEmail()"/><span id="EV"></span><br /><br />
						Password :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" name="password1" id="XYZ" placeholder="**********" onblur="nullPassword()"/><span id="p1"></span><br /><br />
                        Confirm :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password" name="password2" id="ABC"placeholder="**********" onkeyup="validatePassword()"><span id="p2"></span><br /><br />
   						Mobile Num :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="mobile" placeholder="9999999999" onblur="checkMobile()"/><span id="MB"></span><br /><br />
						DOB :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="date" name="date"  /><br /><br />
						Gender :-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="Male"/><b>Male
										<input type="radio" name="sex" value="Female"/>Female</b><br />
				</div>
				<div id="MiddleBox">
				
					<div class="main">
						<h5>Upload Profile Image</h5><br/>
						<hr>
						<div id="image_preview"><img id="previewing" src="./data/demo.png" /></div>
						<hr id="line">
							<div id="selectImage">
							<label>Select Your Image</label><br/>
							<input type="file" name="file" id="file" required />
							<!--input type="submit" value="Upload" class="submit" /-->
							</div>
						</div>
						<h4 id='loading' >loading..</h4>
					<div id="message"></div>
				</div>	
				<div class="sec10" style="text-align:center;">
				<input type="submit" name="upload" value="Done" />
				<input type="button" name="cancel" value="Cancel" onclick="cancelForm()" />
				</div>
				</form>
			</div>
			
<script language="javascript" type="text/javascript" src="signup.js">
</script>


	<?php
	$error = $_GET['q'];
	echo "<font color='red'><b>".$error."</b></font>";
	include_once("footer.php");
	?>
