function validate()
{
  var id=document.getElementById('adminid').value;
  var pass=document.getElementById('adminpass').value;
  if(id!="admin" && pass!="admin2020")
  {
    alert("Incorrect Details!");
    document.getElementById("signupform").action = "javascript:void(0)";
    document.getElementById("signupform").method = "";
  }
  else {
    document.getElementById("signupform").action = "adminpanel.html";
    document.getElementById("signupform").method = "post";
  }
}
