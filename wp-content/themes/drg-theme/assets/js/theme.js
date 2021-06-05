let transition = false;

function toggleNavbar(collapseID) {
    if (transition) {
        document.getElementById(collapseID).classList.remove("md-navbar-in");
        document.getElementById(collapseID).classList.add("md-navbar-out");
        setTimeout(() => {
            document.getElementById(collapseID).classList.add("hidden")
        }, 200)
    } else {
        document.getElementById(collapseID).classList.add("md-navbar-in");
        document.getElementById(collapseID).classList.remove("md-navbar-out", "hidden");
    }
    transition = !transition
}