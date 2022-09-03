$(function () {
    $(".sliderInner").slick({
        dots: true,
        infinite: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 2000,
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
