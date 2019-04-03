		document.body.style.zoom="90%";

function validate()
		{
			 
			var username1=document.getElementById("username");
			var password1=document.getElementById("password");
			const mylist=document.querySelector(".outside");
			myreg=/[a-z][a-z]-[0-9]{4}-[0-9]{4}/i;
			if(username1.value.trim()=="")
		    {
		    	username1.style.border="3px ridge white";
		    	username1.style.background="#ff1a1a";
		    	username1.style.color="black";
		    	mylist.innerHTML="";
		    	mylist.innerHTML+='<div style="font-size:30px;position:absolute;top:80%;left:80%;float:right;background-color:white;color:red;padding:0px;"> Identification is Required</div>'; 
		    	/*alert("Username is left blank");*/
		    	return false;
		    }
		    else if(!myreg.test(username1.value))
		    {
		    		username1.style.border="3px ridge white";
		    	username1.style.background="#ff1a1a";
		    	username1.style.color="black";
		    		mylist.innerHTML="";
		    	mylist.innerHTML+='<div style="font-size:30px;position:absolute;top:80%;left:80%;float:right;background-color:white;color:red;padding:0px;">Type correct format for username (XR-4872-2989)</div>'; 
		    	return false;
		    }
		    	
		    else if(password1.value.trim()=="")
		    {
		    		
		    			username1.style.background="pink";
		    	username1.style.color="brown";
		    	username1.style.border="3px ridge white";
		    	username1.style.fontweight="bolder";
		    	password1.style.border="3px ridge white";
		    	password1.style.background="#ff1a1a";
		    	password1.style.color="black"
		    	mylist.innerHTML="";
		    	mylist.innerHTML+='<div style="font-size:30px;position:absolute;top:80%;left:80%;float:right;background-color:white;color:red;padding:0px;"> Password is Required</div>'; 
		    	/*alert("Password is left blank")*/
		    	
		    	return false;
		    }
		   
		    else{
		    	return true;
		    }
		}