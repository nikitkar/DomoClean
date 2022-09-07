/*$(function () {
    $(".sliderInner").slick({
        dots: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2000,
    });
});

$(function () {
    $(".ourStocksSlider").slick({
        dots: false,
        infinite: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 775,
              settings: {
                arrows: false,
              }
            },
        ]
    });
});
<<<<<<< HEAD

let questionsBlockHomePage = document.getElementsByClassName("itemBtn");
=======
*/
let acc = document.getElementsByClassName("itemBtn");
>>>>>>> 95f9d8a4c0f8bbb493f7f76a939919d9f048deaa

for (let i = 0; i < questionsBlockHomePage.length; i++) {
    questionsBlockHomePage[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            panel.style = "padding: 0;";
        } else {
            panel.style = "padding: 25px;";
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
<<<<<<< HEAD
}

const burger = document.getElementById('navToggle');
const sidebar = document.getElementById('sidebar');
const page = document.getElementById('page');
const body = document.body;
const element = document.querySelectorAll('.nav__list--mobile > .nav__item > .nav__link');

burger.addEventListener('click', event => {
    if( body.classList.contains('show-sidebar') ) {
        closeSidebar();
    } else {
        showSidebar();
    }
});

function showSidebar() {
    const mask = document.createElement('div');
    mask.classList.add('page__mask');
    mask.addEventListener('click', closeSidebar);
    // nav_link.addEventListener('click', closeSidebar());
    page.appendChild(mask);
    
    body.classList.add('show-sidebar');
}

function closeSidebar() {
    body.classList.remove('show-sidebar');
    document.querySelector('.page__mask').remove();
}

for(let elem of element){
    elem.addEventListener('click', closeSidebar);
=======
>>>>>>> 95f9d8a4c0f8bbb493f7f76a939919d9f048deaa
}