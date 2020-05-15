function runupload() {
  document.getElementById("pagecontainer").src = "upload.html";
}

function rundownload() {
  document.getElementById("pagecontainer").src = "download.php";
}

function rundelete() {
  document.getElementById("pagecontainer").src = "delete.html";
}

function runprofile() {
  document.getElementById("pagecontainer").src = "profile.php";
}
function preventback(){window.history.forward();}
setTimeout("preventback()",0);
window.onunload=function(){null};
