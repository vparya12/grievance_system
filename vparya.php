<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ved Test</title>
</head>

<body>
	<marquee behavior="alternate"> <h1> Hello World!</h1></marquee>
		<form>
		<input type="file" name="num" id="vednum" onchange="printTable()"/><br />
		</form>
		<span id="Table">	Hello </span>
		
<script>

	function printTable()
	{
		var v=document.getElementById("vednum").value;
		var url = "getdata.php?q="+v;
		
		
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
                document.getElementById("Table").innerHTML = xmlhttp.responseText;
            }
		}
	}
	
	
</script>

</body>
</html>
