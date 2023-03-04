let mainMenu = document.querySelector(".nav2_btn");

mainMenu.onclick = function () {
    let showMenu = document.querySelector(".second__nav");
    showMenu.classList.toggle("d-block")
}

let mobMenu = document.querySelector(".mob-menu")


mobMenu.onclick = function(e) {
    let nav = document.querySelector(".navbar");
    e.preventDefault()
    nav.classList.toggle("open");
}

const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiper1 = new Swiper(".mySwiper1", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });