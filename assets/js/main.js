function dropdown(name) {
    var el = document.getElementById(name);
    if (window.getComputedStyle(el).display == "none") {
        el.style.display = "block";
    } else {
        el.style.display = "none";
    }
}

var menuToggle = document.getElementById("menu-toggle-icon");
var leftSide = document.getElementsByClassName("left-side");
menuToggle.addEventListener("click", (e) => {
    if (window.getComputedStyle(leftSide[0]).display == "none") {
        leftSide[0].style.display = "block";
    } else {
        leftSide[0].style.display = "none";
    }
});