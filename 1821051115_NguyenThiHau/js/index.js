// This is javascrips
function tabs(e, number) {
    var li = document.getElementsByClassName("item");
    for (var i of li) {
        i.classList.remove("active");
    }
    e.classList.add("active");
    document.getElementById("cinema").style.left = -number * 1200 + "px";
}