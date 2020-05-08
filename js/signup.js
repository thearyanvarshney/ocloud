function passmatch()
{
	var x,y;

	x=document.getElementById("userpass1").value;
	y=document.getElementById("userpass2").value;
	if(x!=y)
	{
		document.getElementById("innerpopup").innerHTML="Passwords Don't Match!";document.getElementById("signupform").action="javascript:void(0)";
		docuemt.getElementById("signupform").method="";
	}
	else {
		document.getElementById('signupform').action="login.php";
		document.getElementById("signupform").method="post";
	}
}
function reseterror()
{
	document.getElementById("innerpopup").innerHTML="";
}
function validateuserid()
{
	var x=document.getElementById("username").value;
	var re = new RegExp("^[a-zA-Z0-9._@]+$");
	if(!re.test(x))
	{
		alert("Username is invalid!");
	}
}
