<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 
1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" 
content="text/html; charset=iso-8859-1" />
<title><?php echo $msg;?></title>
</head>

<body>
<?php
$msg="Hello ved";
$send_to="vedhearttrick@gmail.com";
$from="vedhearttrick@gmail.com";
$subject="Test";

$headers = 'From: $from' . "\r\n" .
    'Reply-To: $from' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($send_to,$subject,$msg,$headers);
mail("vedhearttrick@gmail.com","ved","ved");
echo "Message Sent successfully to
 <a href=\"mailto:$send_to\">$send_to</a>";

?>
</body>
</html>