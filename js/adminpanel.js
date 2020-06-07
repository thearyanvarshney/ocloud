var x = document.getElementsByClassName("rightcontent");
var y =document.getElementsByClassName("body-left-options");
function showdivdash() {
  x[3].style.display="none";
  x[2].style.display="none";
  x[1].style.display="none";
  x[0].style.display="inline-block";
  y[0].style="background-size: 100% 100%; padding: 10px 20px; color: white;box-shadow: 2px 3px 10px 0px rgb(0, 0, 0); background: linear-gradient(to right, #FC766A99, #5B84B166);";
  y[3].style="none";
  y[2].style="none";
  y[1].style="none";
}
function showdivuser() {
  x[3].style.display="none";
  x[2].style.display="none";
  x[0].style.display="none";
  x[1].style.display="inline-block";
  y[1].style="background-size: 100% 100%; padding: 10px 20px; color: white;box-shadow: 2px 3px 10px 0px rgb(0, 0, 0); background: linear-gradient(to right, #FC766A99, #5B84B166);";
  y[3].style="none";
  y[2].style="none";
  y[0].style="none";
}

function showdivquery() {
  x[3].style.display="none";
  x[1].style.display="none";
  x[0].style.display="none";
  x[2].style.display="inline-block";
  y[2].style="background-size: 100% 100%; padding: 10px 20px; color: white;box-shadow: 2px 3px 10px 0px rgb(0, 0, 0); background: linear-gradient(to right, #FC766A99, #5B84B166);";
  y[3].style="none";
  y[0].style="none";
  y[1].style="none";
}

function showdivissue() {
  x[0].style.display="none";
  x[1].style.display="none";
  x[2].style.display="none";
  x[3].style.display="inline-block";
  y[3].style="background-size: 100% 100%; padding: 10px 20px; color: white;box-shadow: 2px 3px 10px 0px rgb(0, 0, 0); background: linear-gradient(to right, #FC766A99, #5B84B166);";
  y[0].style="none";
  y[2].style="none";
  y[1].style="none";
}
