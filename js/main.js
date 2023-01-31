let menuMobil = document.querySelector(".menu-mobil")
let closeMenu = document.querySelector(".close_menu")
let ul        = document.querySelector("header .container nav ul")
menuMobil.addEventListener("click", ()=>{
    console.log(ul)
    ul.classList.add('open_menu')
})

closeMenu.addEventListener("click", ()=>{
    ul.classList.remove("open_menu")
    console.log("xxxxxxxxx")
})
