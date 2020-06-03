function openmodal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "block";
}

function closemodal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

function closewindow(event) {
  var modal = document.getElementById("myModal");

  if (event.target.className == "modal") {
    modal.style.display = "none";
  }
}

function validate() {
  var a = document.getElementById("passchange1").value;
  var b = document.getElementById("passchange2").value;
  if (a != b) {
    document.getElementById("inner").innerHTML = "&#9888; Passwords Don't Match!";
    document.getElementById("passform").action = "javascript:void(0)";
    document.getElementById("passform").method = "";
  } else {
    {
      document.getElementById("passform").action = "profile.php";
      document.getElementById("passform").method = "post";
    }
  }
}
