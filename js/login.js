function validuser()
{
	var y1;
	y1=document.getElementById('userpass').value;
	var re = new RegExp("^[a-zA-Z0-9_@#]+$");
	if(y1.length==0)
	{}
	else if(!re.test(y1))
	{
		alert("Password must contain letters, numbers and allowed special charaters : @, #, _");
		document.getElementById("mainform").action="";
	}
	else
	{
		document.getElementById("mainform").action="userinterface.php";
	}
	}
function toggle()
{
	var x = document.getElementById("userpass");
 	if (x.type === "password")
 	{
 		x.type = "text";
 	}
 	else
 	{
    	x.type = "password";
	}
}
