<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="slider">
        <div class="sliderWrapper">
            <div class="sliderCarousel">
                <div class="sliderInner">
                    <div class="sliderItems">
                        <div class="sliderItem">
                            <img src="" alt="slider img fisrt">
                        </div>
                    </div>
                    <div class="sliderItems">
                        <div class="sliderItem">
                            <img src="" alt="slider img second">
                        </div>
                    </div>
                    <div class="sliderItems">
                        <div class="sliderItem">
                            <img src="" alt="slider img third">
                        </div>
                    </div>
                    <div class="sliderItems">
                        <div class="sliderItem">
                            <img src="" alt="slider img fourth">
                        </div>
                    </div>
                </div>
                <div class="sliderBtn">

                </div>
                <div class="conteiner">
                    <div class="sliderContent">
                        <div class="sliderContent--decor">
                            <img class="sliderContent--imgLogo" src="<?php bloginfo('template_url'); ?>/assets/images/logo/logo.png" alt="logo">
                            <h2>Клининговые услуги <span>№1</span> в Казани</h2>
                            <img class="sliderContent--bg" src="<?php bloginfo('template_url'); ?>/assets/images/slideContent--bg.png" alt="bg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>