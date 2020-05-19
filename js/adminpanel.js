function showdivuser() {
  document.getElementById("queryblockview").style.display = "none";
  document.getElementById("issueblockview").style.display = "none";
  document.getElementById('userdetail').style.display = "inline-block";
}

function showdivquery() {
  document.getElementById('userdetail').style.display = "none";
  document.getElementById("issueblockview").style.display = "none";
  document.getElementById("queryblockview").style.display = "inline-block";
}

function showdivissue() {
  document.getElementById('userdetail').style.display = "none";
  document.getElementById("queryblockview").style.display = "none";
  document.getElementById("issueblockview").style.display = "inline-block";
}
