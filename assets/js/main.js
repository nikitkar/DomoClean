$(function () {
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
                },
            },
        ],
    });
});

let questionsBlockHomePage = document.getElementsByClassName("itemBtn");

for (let i = 0; i < questionsBlockHomePage.length; i++) {
    questionsBlockHomePage[i].addEventListener("click", function () {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;

        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            panel.style = "padding: 0; width: 100%";
        } else {
            panel.style = "padding: 20px; max-height: 100%; width: 100%";
        }
    });
}

// let buttonFeedback = document.getElementsByClassName("feedbackBtn");

// for (let i = 0; i < buttonFeedback.length; i++) {
//     buttonFeedback[i].addEventListener("click", (e) => {
//         e.preventDefault();

//         (function () {
//             emailjs.init("uHNkPMu8Oj_bDRYh9");
//         })();

//         const formData = new FormData(feedbackForm);
//         const telephone = formData.get("telephone");
//         const ParseTelephone = parseInt(telephone).toString();

//         let content = {
//             from_name: "DomoClean auto responder",
//             to_name: "DomoClean",
//             message: `Call back / write to the number - ${telephone}`,
//         };

//         if (
//             telephone == "" ||
//             telephone == null ||
//             telephone == undefined ||
//             telephone == " "
//         )
//             alert("Заполните поле ввода");
//         else {
//             if (ParseTelephone.length < telephone.length)
//                 alert("Введите только номер телефона");
//             else {
//                 emailjs
//                     .send("service_fudk1mk", "template_lzv5ed3", content)
//                     .then(
//                         () => {
//                             alert("Успешное отправление!!!");
//                         },
//                         (error) => {
//                             console.log(error);
//                             alert(
//                                 `Ошибка: status -  ${error.status}\nСообщение ошибки - ${error.text}`
//                             );
//                         }
//                     );
//             }
//         }
//     });
// }

const burger = document.getElementById("navToggle");
const sidebar = document.getElementById("sidebar");
const page = document.getElementById("page");
const body = document.body;
const element = document.querySelectorAll(
    ".nav__list--mobile > .nav__item > .nav__link"
);

burger.addEventListener("click", (event) => {
    if (body.classList.contains("show-sidebar")) {
        closeSidebar();
    } else {
        showSidebar();
    }
});

function showSidebar() {
    const mask = document.createElement("div");
    mask.classList.add("page__mask");
    mask.addEventListener("click", closeSidebar);
    // nav_link.addEventListener('click', closeSidebar());
    page.appendChild(mask);

    body.classList.add("show-sidebar");
}

function closeSidebar() {
    body.classList.remove("show-sidebar");
    document.querySelector(".page__mask").remove();
}

for (let elem of element) {
    elem.addEventListener("click", closeSidebar);
}