function passmatch()
{
	var x,y;

	x=document.getElementById("userpass1").value;
	y=document.getElementById("userpass2").value;
	if(x.length==0 || y.length==0)
	{
		alert("Password must not be null");
		document.getElementById('mainform').action='';
	}
	else if(x!=y)
	{
		document.getElementById("innerpopup").innerHTML="Passwords Don't Match. Please Verify Again!"
	}
	else {
		document.getElementById('mainform').action='login.html';
	}
}
function reseterror()
{
	document.getElementById("innerpopup").innerHTML="";
}
function validateuserid()
{
	var x=document.getElementById("username").value;
	var re = new RegExp("^[a-zA-Z0-9]+$");
	if(!re.test(x))
	{
		alert("Username is invalid!");
	}
}
