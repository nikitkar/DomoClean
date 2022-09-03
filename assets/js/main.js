<<<<<<< HEAD
function sliderImage(){
    let offset = 0;
    const sliderToShow = 1;
    const sliderToScroll = 1;
    const slider = document.querySelector('.carousel__inner');
    const items = document.querySelectorAll('.carousel__item');
    const itemsCount = items.length; // количество объектов 
    const itemWidth = slider.clientWidth / sliderToShow; // рамер сколько надо показать объектов
    const movePosition = sliderToScroll * itemWidth; // размер на соклько прокручивать

    const btnPrev = document.querySelector('.btn__prev');
    const btnPrevId = document.getElementById('btn__prev');
    const btnNext = document.querySelector('.btn__next');
    const btnNextId = document.getElementById('btn__next');

    items.forEach((item) => {
        item.style.minWidth = itemWidth + 'px'; // вывод нужного количества объектов на экран
    });

    btnNext.addEventListener('click', function(){
        offset += movePosition;

        items.forEach((item) => {
            item.style.left = -offset + 'px';
        });

        checkBtns();
    });

    btnPrev.addEventListener('click', function(){
        offset -= movePosition;

        items.forEach((item) => {
            item.style.left = -offset + 'px';
        });

        checkBtns();
    });

    const checkBtns = () => {
        if(btnPrev.disabled = offset === 0){
            btnPrevId.style.opacity = '.4';
        }
        else btnPrevId.style.opacity = '1';

        if(btnNext.disabled = offset >= (itemsCount - sliderToShow) * itemWidth){
            btnNextId.style.opacity = '.4';
        }
        else btnNextId.style.opacity = '1';
    }    

    checkBtns();
}

sliderImage();
=======
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
    });
});

let acc = document.getElementsByClassName("itemBtn");

for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        console.log(this.nextElementSibling)
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            panel.style = "padding: 0;";
        } else {
            panel.style = "padding: 20px;";
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
>>>>>>> bec66e8786f50a300eed937fa4755138248e5e41
