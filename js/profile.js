function openmodal()
{
    var modal = document.getElementById("myModal");
     modal.style.display = "block";
}
function closemodal()
{
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
function closewindow(event)
{
        var modal = document.getElementById("myModal");

    if(event.target.className == "modal")
        {
            modal.style.display="none";
        }
}
