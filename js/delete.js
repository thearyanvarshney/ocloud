function toggle() {
  var maincheck = document.getElementById("checkAl");
  var checkboxes = document.getElementsByClassName("checkItem");
  if (maincheck.checked == true) {
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = true;
    }
  } else {
    for (var i = 0; i < checkboxes.length; i++) {
      checkboxes[i].checked = false;
    }
  }
}

function validate() {
  var found = false;
  var checkboxes = document.getElementsByClassName("checkItem");
  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked == true) {
      found = true;
      break;
    }
  }
  if (!found) {
    document.getElementById("blankline").innerHTML="";
    document.getElementById("errormessage").innerHTML="&#9888; Please Select an Item to Delete!";
    document.getElementById("formclass").action = "javascript:void(0)";
    document.getElementById("formclass").method = "";
  } else {
    document.getElementById("blankline").innerHTML="";
    document.getElementById("formclass").action = "";
    document.getElementById("formclass").method = "post";
  }
}
