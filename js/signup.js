function passmatch()
{
	var x,y;

	x=document.getElementById("userpass1").value;
	y=document.getElementById("userpass2").value;
	if(x!=y)
	{
     document.getElementById("innerpopup1").innerHTML="Passwords Don't Match!";
     document.getElementById("signupform").action="javascript:void(0)";
     docuemt.getElementById("signupform").method="";
	}
	else {
		document.getElementById('signupform').action="login.php";
		document.getElementById("signupform").method="post";
	}
}
function reseterror1()
{
	document.getElementById("innerpopup1").innerHTML="";
}
function reseterror2()
{
	document.getElementById("innerpopup2").innerHTML="";
}
function validateuserid()
{
    var x=document.getElementById("username").value;
    var re = new RegExp("^[a-zA-Z0-9._@]+$");
    if(!x.length==0)
    {
	       if(!re.test(x))
	       {
            document.getElementById("innerpopup2").innerHTML="Username is Invalid!";
            document.getElementById("signupform").action="javascript:void(0)";
            docuemt.getElementById("signupform").method="";
	       }
       
    }
}