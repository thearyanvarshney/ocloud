function validate() {
  var id = document.getElementById('adminid').value;
  var pass = document.getElementById('adminpass').value;
  if (id.length != 0 && pass.length != 0) {
    if (id != "admin" && pass != "admin2020") {
      alert("Incorrect Details!");
      document.getElementById("adminform").action = "javascript:void(0)";
      document.getElementById("adminform").method = "";
    } else {
      document.getElementById("adminform").action = "adminpanel.php";
      document.getElementById("adminform").method = "post";
    }
  }
}
