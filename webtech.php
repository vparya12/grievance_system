<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ajax HTTP Request</title>
</head>

<body>
	
	Name:- <input type="text" name="username" placeholder="Name" id="USERNAME" onkeyup="getBioData()" /><br />
	<span id="Table"></span>
	
	<script language="javascript">
		function getBioData()
		{
			var obj = document.getElementById("USERNAME").value;
			if(obj == "" )
			{
					
			}else
			{
				xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){getData();}
				xmlhttp.open("GET","webtechreturn.php?val="+obj,true);
				xmlhttp.send();
			}
			
			function getData()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{
                	document.getElementById("Table").innerHTML = xmlhttp.responseText;
            	}
			}
		
		}
	</script>

</body>
</html>
