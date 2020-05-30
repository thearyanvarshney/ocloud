var x = document.getElementsByClassName("rightcontent");
function showdivuser() {
  x[1].style.display="none";
  x[2].style.display="none";
  x[0].style.display="inline-block";
}

function showdivquery() {
  x[0].style.display="none";
  x[2].style.display="none";
  x[1].style.display="inline-block";
}

function showdivissue() {
  x[0].style.display="none";
  x[1].style.display="none";
  x[2].style.display="inline-block";
}
