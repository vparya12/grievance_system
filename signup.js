function nullPassword()
{
	var pwd1 =document.getElementById("XYZ").value;
	if(pwd1.length<4)
	{
		alert("Password Must Contain Atleast 4 Characters");
		document.getElementById("XYZ").focus();
	}
}

function validatePassword()
{
	var pwd1 =document.getElementById("XYZ").value;
	var pwd2 = document.getElementById("ABC").value;
	
	if(pwd1===pwd2)
	{
		document.getElementById("p1").innerHTML = '<img src="./data/checked.gif">';
		document.getElementById("p2").innerHTML = '<img src="./data/checked.gif">';
	}
	else
	{
		document.getElementById("p2").innerHTML = '<img src="./data/unchecked.gif">';
	}
 }
 
 function ved(email)
{		
		//var val = document.signupform.email.value;
		var url = "verifyemail.php?val="+email;
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
                document.getElementById("EV").innerHTML = xmlhttp.responseText;
            }
		}
}
     
function checkFirst()
{	
	var fname = signupform.fn.value;
	var x =/^[\sA-Za-z]+$/;
	if(fname.match(x))
	{
	   document.getElementById("fname").innerHTML='<img src="./data/checked.gif">';
	   return true; 
	}
	else
	{
		document.getElementById("fname").innerHTML='<img src="./data/unchecked.gif">';
		document.signupform.fn.focus();
		return false;
	}
}
function checkLast()
{	
	var lname = signupform.ln.value;
	var x =/^[\sA-Za-z]+$/;
	if(lname.match(x))
	{
	   document.getElementById("lname").innerHTML='<img src="./data/checked.gif">';
	   return true; 
	}
	else
	{
		document.getElementById("lname").innerHTML='<img src="./data/unchecked.gif">';
		signupform.ln.focus();
		return false;
	}
}
function checkEmail()
{	
	var email = document.signupform.email.value;
	var at="@";
	var dot=".";
	var lat=email.indexOf(at);
	var lstr=email.length;
	var ldot=email.indexOf(dot);
	var flag = true;
	if (email.indexOf(at)==-1 || email.indexOf(at)==0 || email.indexOf(at)==lstr){
	    alert("Email Id must contain '@' symbol");
		flag = false;
	   signupform.email.focus();
	   return false;
	}
	if (email.indexOf(dot)==-1 || email.indexOf(dot)==0 || email.indexOf(dot)==lstr){
		alert("Email id must contain '.' symbol")
		signupform.email.focus();
		flag = false;
		return false;
	}
	if(flag == true){
		ved(email);
	}
}
function checkMobile()
{
	var mobile = signupform.mobile.value;
	var numbers = /^[0-9]+$/;    
	if(mobile.match(numbers) && mobile.length==10)
	{
		document.getElementById("MB").innerHTML='<img src="./data/checked.gif">';
		return true;
	}
	else
	{
		document.getElementById("MB").innerHTML='<img src="./data/unchecked.gif">';
		signupform.mobile.focus();
		return false;
	}
}


