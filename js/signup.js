function validate() {
  var a, b, c, d, z = 0;
  var re = new RegExp("^[a-zA-Z0-9._@]+$");
  var reg = new RegExp(/\d{10}/);
  a = document.getElementById("userpass1").value;
  b = document.getElementById("userpass2").value;
  c = document.getElementById("username").value;
  d = document.getElementById("mobnum").value;

  /*This if condition will match passwords*/
  if (a != b) {
    document.getElementById("innerpopup1").innerHTML = "Passwords Don't Match!";
    z = z + 1;
  }
  /*This is condition will validate Username*/
  if (!c.length == 0) {
    if (!re.test(c)) {
      document.getElementById("innerpopup2").innerHTML = "Username is Invalid!";
      z = z + 1;
    }
  }
  /*This if condition will validate Monile Number*/
  if (!d.length == 0) {
    if (!reg.test(d)) {
      document.getElementById("innerpopup3").innerHTML = "Contact Number is Invalid!";
      z = z + 1;
    }
  }
  if (z != 0) {
    document.getElementById("signupform").action = "javascript:void(0)";
    document.getElementById("signupform").method = "";
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
