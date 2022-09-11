<?php
/*
Template Name: services
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
                    <a class="breadcrumbs--child" href="/MaintenanceCleaning">
                        Услуги
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="mainWrapper">
        <div class="conteiner">
            <div class="mainWrapper--inner" style="background-color: var(--Color__BGGrey); box-shadow: none;">
                <section class="ourServices" >
                    <div class="ourServices--wrapper" >
                        <h2 class="ourServices--title">Наши услуги</h2>

                        <ul class="listServices">
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices1.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Уборка квартир</p>
                                    <a class="listServices--button  buttonStandart" href="/cleacning-apartments">Подробнее</a>
                                </span>
                            </li>
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices2.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Генеральная уборка</p>
                                    <a class="listServices--button  buttonStandart" href="/general-cleaning">Подробнее</a>
                                </span>
                            </li>
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices3.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Мытье окон</p>
                                    <a class="listServices--button  buttonStandart" href="/washing-windows">Подробнее</a>
                                </span>
                            </li>
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices4.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Уборка после ремонта</p>
                                    <a class="listServices--button  buttonStandart" href="/cleaning-after-repair">Подробнее</a>
                                </span>
                            </li>
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices5.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Уборка офисных помещений</p>
                                    <a class="listServices--button  buttonStandart" href="/cleaning-offices">Подробнее</a>
                                </span>
                            </li>
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices6.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Поддерживающая уборка</p>
                                    <a class="listServices--button  buttonStandart" href="/supportive-cleaning">Подробнее</a>
                                </span>
                            </li>
                            <li class="listServices--items" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/ourServices/ourServices7.webp);">
                                <span class="listServices--item">
                                    <p class="listServices--text">Уборка коттеджа</p>
                                    <a class="listServices--button  buttonStandart" href="/cottage-cleaning">Подробнее</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>