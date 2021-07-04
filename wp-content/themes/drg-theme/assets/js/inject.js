window.onload = function () {
    let DOM = document.getElementsByClassName('um')[0];
    let id = document.getElementsByName('_wpnonce');

    DOM.style.display = "none";
    id[1].value = id[0].value;
}