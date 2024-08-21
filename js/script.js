let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
    // toggling = adding the class if it’s not already present, and removing it if it is present
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
}

window.onscroll = () => {
    menu.classList.remove("fa-times");
    navbar.classList.remove("active");
}