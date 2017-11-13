// JavaScript Document
function recent()
{
	var obj = document.getElementById("AllData");
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("AllData").innerHTML = xmlhttp.responseText;
            }
	}
        xmlhttp.open("GET", "recent.php", true);
        xmlhttp.send();
}
function application()
{
	var obj = document.getElementById("AllData");
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("AllData").innerHTML = xmlhttp.responseText;
            }
	}
        xmlhttp.open("GET", "application.php", true);
        xmlhttp.send();
}
function complain()
{
	var obj = document.getElementById("AllData");
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("AllData").innerHTML = xmlhttp.responseText;
            }
	}
        xmlhttp.open("GET", "complain.php", true);
        xmlhttp.send();
}
function status()
{
	var obj = document.getElementById("AllData");
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("AllData").innerHTML = xmlhttp.responseText;
            }
	}
        xmlhttp.open("GET", "status.php", true);
        xmlhttp.send();
}
function inbox()
{
	var obj = document.getElementById("AllData");
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("AllData").innerHTML = xmlhttp.responseText;
            }
	}
        xmlhttp.open("GET", "inbox.php", true);
        xmlhttp.send();
}
function getStatusVed()
{
	var comp_Id = document.StatusBox.cno.value;
	var url ="getstatus.php?q="+comp_Id;
	
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
			document.getElementById("STATUS").innerHTML = xmlhttp.responseText;
		}
	}
	
}

function complainCheck1()
{
	var sub = document.cmpform.Subject.value;
	if(sub== null || sub == "" ){
		alert("Subject Must Not Be Empty");
		document.cmpform.Subject.focus();	
	}
}
function complainCheck2()
{
	var to = document.cmpform.To.value;	
	alert("You Have Selected "+to);	
}
function complainCheck3()
{
	var data = document.cmpform.comp.value;	
	if(data.length<10 ){
		alert("Complain must contain atleast 10 characters");	
	}
}

