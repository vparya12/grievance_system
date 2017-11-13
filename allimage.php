<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Photo Test</title>
</head>
<form method="post" enctype="multipart/form-data">
<?php echo '<input type="image" src=photo.php id="vp" />'?>
<input type="file" name="ved" id="userfile"/>
<input type="button" name="up" value="uoload" onclick="showImage()" />
</form>

<script>
	function showImage(){
		var v = document.getElementById("userfile").value;
		var url = "photo.php?q="+v;
		 var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("vp").src = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
	
	}
</script>
<body>
</body>
</html>
