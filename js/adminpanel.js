var x = document.getElementsByClassName("rightcontent");
var y =document.getElementsByClassName("body-left-options");

function showdiv(id) {
  x[id].style.display="inline-block";
  y[id].className = "body-left-options active";
  for (var i = 0; i < x.length; i++) {
    if(i!=id)
    {
      x[i].style.display="none";
      y[i].className = "body-left-options";
    }
  }
}
