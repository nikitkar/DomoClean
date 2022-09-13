<?php
/*
Template Name: stocks
*/
?>

<?php get_header(); ?>

<main class="main">
    <section class="breadcrumbs--info">
        <div class="conteiner">
            <div class="breadcrumbsWrapper">
                <div class="breadcrumbs">
                    <a class="breadcrumbs--main" href="/">
                        На главную</a>
                    <span class="breadcrumbs--separator">/</span>
                    <a class="breadcrumbs--child" href="/stocks">
                        Акции
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="mainWrapper">
        <div class="conteiner">
            <div class="mainWrapper--inner">
                <div class="cleaningApartments--wrapper">
                    <section class="ourStocks" style="width: 100%;">
                        <div class="conteiner">
                            <div class="ourStocksWrapper">
                                <h2 class="ourStocksTitle">Наши акции</h2>

                                <ul class="ourStocksSlider">
                                    <li class="ourStocksItems" style="background: url(<?php bloginfo('template_url'); ?>/assets/images/ourStocks/ourStocksSliderImg1.webp); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                        <div class="ourStocksItems--content">
                                            <h2 class="ourStocksItems--title">Всем новоселам скидка 10%</h2>
                                            <p class="ourStocksItems--text">на уборку квартиры после ремонта</p>
                                        </div>
                                    </li>
                                    <!-- <li class="ourStocksItems" style="background: url(<?php bloginfo('template_url'); ?>/assets/images/ourStocks/ourStocksSliderImg1.webp); background-position: center; background-repeat: no-repeat; background-size: cover;">
                            <div class="ourStocksItems--content">
                                <h2 class="ourStocksItems--title">Всем новоселам скидка 10%</h2>
                                <p class="ourStocksItems--text">на уборку квартиры после ремонта</p>
                            </div>
                        </li> -->
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>