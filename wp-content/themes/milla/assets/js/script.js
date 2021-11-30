menu.onclick = function myFunction() {
    var x = document.getElementById('myNav-list');

    if  (x.className === "nav-list") {
        x.className += " responsive";
    } else {
            x.className = "nav-list";
    }
}