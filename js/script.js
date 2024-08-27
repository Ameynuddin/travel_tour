// home page
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

var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// about page
var swiper = new Swiper(".reviews-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    autoHeight: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});

// packages page
let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 2;

loadMoreBtn.onclick = () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (let i = currentItem; i < 2 + currentItem; i++) {
        boxes[i].style.display = "inline-block";
    };

    currentItem += 2;
    
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = "none";
    }
}
