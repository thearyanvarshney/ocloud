function validate() {
  var a, b, c, d, z = 0;
  var re = new RegExp("^[a-zA-Z0-9._@]+$");
  var reg = new RegExp(/\d{10}/);
  var emailreg = new RegExp("^[a-zA-Z0-9.]@[a-zA-Z].[a-zA-Z.]");
  var regemail = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  a = document.getElementById("userpass1").value;
  b = document.getElementById("userpass2").value;
  c = document.getElementById("username").value;
  d = document.getElementById("mobnum").value;
  e = document.getElementById("emailid").value;

  /*This if condition will match passwords*/
  if (a != b) {
    document.getElementById("innerpopup1").innerHTML = "&#9888; Passwords Don't Match!";
    z = z + 1;
  }
  /*This is condition will validate Username*/
  if (!c.length == 0) {
    if (!re.test(c)) {
      document.getElementById("innerpopup2").innerHTML = "&#9888; Username is Invalid!";
      z = z + 1;
    }
  }
  /*This if condition will validate Monile Number*/
  if (!d.length == 0) {
    if (!reg.test(d)) {
      document.getElementById("innerpopup3").innerHTML = "&#9888; Contact Number is Invalid!";
      z = z + 1;
    }
  }
  if (!e.length == 0) {
    if (!regemail.test(e)) {
      document.getElementById("innerpopup4").innerHTML = "&#9888; Email Address is Invalid!";
      z = z + 1;
    }
  }
  if (z != 0) {
    document.getElementById("signupform").action = "javascript:void(0)";
    document.getElementById("signupform").method = "";
  } else {
    {
      document.getElementById("signupform").action = "login.php";
      document.getElementById("signupform").method = "post";

    }
  }
}

function reseterror1() {
  document.getElementById("innerpopup1").innerHTML = "";
}

function reseterror2() {
  document.getElementById("innerpopup2").innerHTML = "";
}

function reseterror3() {
  document.getElementById("innerpopup3").innerHTML = "";
}

function reseterror4() {
  document.getElementById("innerpopup4").innerHTML = "";
}

function toggle() {
  var x = document.getElementById("userpass1");
  var y = document.getElementById("userpass2");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
