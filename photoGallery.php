<?php
/*
Template Name: photoGallety
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
                    <a class="breadcrumbs--child" href="/photogallery">
                        Фотогалерея
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="mainWrapper">
        <div class="conteiner">
            <div class="mainWrapper--inner">
                <section class="photoGallery">
                    <h2 class="photoGalleryTitle">Фотогалерея</h2>

                    <ul class="photoGalleryList">
                        <li class="photoGalleryItems">
                            <h4 class="photoGalleryItem--title">Уборка ванной комнаты</h4>
                            <img class="photoGalleryItem--img" src="<?php bloginfo('template_url'); ?>/assets/images/photoGallery/photoGalleryImg1.webp" alt="photoGalleryImg">
                        </li>
                        <li class="photoGalleryItems">
                            <h4 class="photoGalleryItem--title">Уборка в детской</h4>
                            <img class="photoGalleryItem--img" src="<?php bloginfo('template_url'); ?>/assets/images/photoGallery/photoGalleryImg2.webp" alt="photoGalleryImg">
                        </li>
                        <li class="photoGalleryItems">
                            <h4 class="photoGalleryItem--title">Уборка помещений после ремонта</h4>
                            <img class="photoGalleryItem--img" src="<?php bloginfo('template_url'); ?>/assets/images/photoGallery/photoGalleryImg3.webp" alt="photoGalleryImg">
                        </li>
                        <li class="photoGalleryItems">
                            <h4 class="photoGalleryItem--title">Уборка квартиры</h4>
                            <img class="photoGalleryItem--img" src="<?php bloginfo('template_url'); ?>/assets/images/photoGallery/photoGalleryImg4.webp" alt="photoGalleryImg">
                        </li>
                        <li class="photoGalleryItems">
                            <h4 class="photoGalleryItem--title">Мойка панорамных окон</h4>
                            <img class="photoGalleryItem--img" src="<?php bloginfo('template_url'); ?>/assets/images/photoGallery/photoGalleryImg5.webp" alt="photoGalleryImg">
                        </li>
                        <li class="photoGalleryItems">
                            <h4 class="photoGalleryItem--title">Комплексная уборка</h4>
                            <img class="photoGalleryItem--img" src="<?php bloginfo('template_url'); ?>/assets/images/photoGallery/photoGalleryImg6.webp" alt="photoGalleryImg">
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>