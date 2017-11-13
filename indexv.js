// JavaScript Document
function changePos(){
		var obj = document.getElementById("leftpannel");
		obj.setAttribute("style", "margin-left: 0%; background: #09ddff");
	}

	
	function openSignUp(){
		window.location="signup.php?err=";
		
		
	}
	
	function cancelForm(){
		window.location="indexved.php";
		
	
	}

	
	
	
	var i = 0;
	var file= new Array("data/0.jpg","data/1.jpg","data/2.jpg","data/3.jpg","data/4.jpg","data/5.jpg","data/6.jpg");
	var obj= document.getElementById("ppt");
	var t;
	function changeImage(){
		if(i == file.length)
			i = 0;
		console.log(i);
		obj.setAttribute("src" , file[i++]);
		obj.setAttribute("style", "position:");
		t = setTimeout(function(){changeImage();}, 2000);
	}
	changeImage();
	
	
	