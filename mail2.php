<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" 
content="text/html; charset=iso-8859-1" />
<title>PHP Tutorial: Sending Email</title>
<?php
$to = 'vparya12@gmail.com';
$subject = 'Test email'; 
$message = "Hello World!\n\nThis is my first mail."; 
$headers = "From: vparya12@gmail.com\r\nReply-To:vparya12@gmail.com";
$mail_sent = mail( $to, $subject, $message, $headers );
echo $mail_sent ? "Mail sent" : "Mail failed";
?>
<script language = "Javascript" 
 type="text/javascript">
<!--
function emailcheck(email) {

		var at="@"
		var dot="."
		var lat=email.indexOf(at)
		var lstr=email.length
		var ldot=email.indexOf(dot)
		if (email.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (email.indexOf(at)==-1 || em
ail.indexOf(at)==0 || email.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (email.indexOf(dot)==-1 || email.indexOf(dot)==0 
|| email.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (email.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (email.substring(lat-1,lat)==dot 
|| email.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (email.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (email.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true
	}


	function validateForm(){
	var to=document.emailform.to
	var message=document.emailform.message


	if ((to.value==null)||(to.value=="")){
		alert("Please Enter your Email ID")
		to.focus()
		return false
	}
	if (emailcheck(to.value)==false){
		to.value=""
		to.focus()
		return false
	}

	if((message.value.length<10)|| (message.value==""))
	{
		alert("Your message should contain atleast 10 character")
		return false
	}
	return true
 }
--></script>
<style type="text/css">

</style></head>

<body>
 <form  name="emailform" method="post"  
onsubmit="return validateForm()" action="mail.php">

 <table width="75%" border="0" cellspacing="3" cellpadding="0">
  <tr>
    <th width="12%" align="left" scope="row">TO:</th>
    <td width="88%"><input type="text" name="to" /></td>
  </tr>
<tr>
    <th align="left" scope="row">Subject</th>
    <td><input type="text" name="subject" /></td>
  </tr>
  <tr>
    <th align="left" scope="row">Message:</th>
    <td><textarea name="message" cols="40"
 rows="5" class="style1" id="message"></textarea></td>
  </tr>
  <tr>
    <th scope="row"><input name="submit" 
type="submit" class="style1" value="Send Email" /></th>
    <td><input name="reset" type="reset" 
class="style1" value="Clear Form" /></td>
  </tr>
</table>
</form>
</body></html>
 