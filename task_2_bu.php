<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
<?php

$string = <<<END
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Alef Development | Разработка сайтов и мобильных приложений</title>
    <meta name="keywords" content="разработка, сайты, веб, web мобильные приложения, ios, android, андроид, чатботы">
    <meta name="description" content="Студия по разработке сайтов и мобильных приложений любой сложности.">
    <link rel="stylesheet" href="css/libs.min.css?ver=40" />
    <link rel="stylesheet" href="css/main.min.css?ver=40" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <meta property="og:title" content="Alef Development | Разработка сайтов и мобильных приложений" />
    <meta property="og:description" content="Разработка сайтов и мобильных приложений" />
    <meta property="og:site_name" content="Alef Development" />
    <meta property="og:image" itemprop="image" content="img/share.jpg" />
    <meta property="og:type" content="website" />
    <meta property="vk:image" content="img/share.jpg" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div class="page-wrap">
        <header class="page-header">
            <div class="container">
                <div class="page-header__wr">
                    <a href="/" class="logo">
                        <img src="img/svg/logo.svg" alt="Alef Development">
                    </a>
                    <nav class="page-header__nav">
                        <a href="#" class="page-header__phone js-phone"></a>
                        <div class="page-header__menu-wr js-menu">
                            <ul class="page-header__menu js-menu-list">
                                <li><a href="#tech">Технологии</a></li>
                                <li><a href="#portfolio">Портфолио</a></li>
                                <li><a href="#reviews">Отзывы</a></li>
                                <li><a href="#price">Цены</a></li>
                                <li><a href="#press">Мы в СМИ</a></li>
                                <li><a href="#contacts">Контакты</a></li>
                            </ul>
                            <button class="btn-menu-close js-btn-menu">
                                <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 2.5C0 1.11929 1.11929 0 2.5 0H21.5C22.8807 0 24 1.11929 24 2.5C24 3.88071 22.8807 5 21.5 5H2.5C1.11929 5 0 3.88071 0 2.5Z"
                                        fill="white" />
                                    <path
                                        d="M0 11.5C0 10.1193 1.11929 9 2.5 9H21.5C22.8807 9 24 10.1193 24 11.5C24 12.8807 22.8807 14 21.5 14H2.5C1.11929 14 0 12.8807 0 11.5Z"
                                        fill="white" />
                                    <path
                                        d="M0 20.5C0 19.1193 1.11929 18 2.5 18H12.5C13.8807 18 15 19.1193 15 20.5C15 21.8807 13.8807 23 12.5 23H2.5C1.11929 23 0 21.8807 0 20.5Z"
                                        fill="white" />
                                </svg>
                            </button>
                        </div>
                        <button class="btn-menu js-btn-menu">
                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 2.5C0 1.11929 1.11929 0 2.5 0H21.5C22.8807 0 24 1.11929 24 2.5C24 3.88071 22.8807 5 21.5 5H2.5C1.11929 5 0 3.88071 0 2.5Z"
                                    fill="#317690" />
                                <path
                                    d="M0 11.5C0 10.1193 1.11929 9 2.5 9H21.5C22.8807 9 24 10.1193 24 11.5C24 12.8807 22.8807 14 21.5 14H2.5C1.11929 14 0 12.8807 0 11.5Z"
                                    fill="#317690" />
                                <path
                                    d="M0 20.5C0 19.1193 1.11929 18 2.5 18H12.5C13.8807 18 15 19.1193 15 20.5C15 21.8807 13.8807 23 12.5 23H2.5C1.11929 23 0 21.8807 0 20.5Z"
                                    fill="#317690" />
                            </svg>
                        </button>
                    </nav>
                    <div class="page-header__text">
                        <h2>Мобильные приложения<span id="line1" class="line"></span></h2>
                        <h2>Разработка сайтов</h2>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="offer">
                <div class="container">
                    <div class="offer__wr">
                        <div class="offer__text">
                            <h1>Alef Development<span id="line2" class="line"></span></h1>
                            <p><strong>Компания Alef создана двумя программистами, которые занимаются своим делом больше 20 лет, знают
                                    и любят его.</strong></p>
                            <ul>
                                <li>Все наши менеджеры — технари, способные обнаружить подводные камни в начале проекта</li>
                                <li>Автотесты и код-ревью обеспечивают надежную работу вашего продукта</li>
                                <li>Все процессы автоматизированы или регулируются чек-листами, чтобы сдавать работу точно в срок</li>
                                <li>Наших программистов собеседуют программисты, а не HR. Поэтому код написан профессионалами, а значит его легко поддерживать и дёшево развивать</li>
                            </ul>
                            <button class="btn-default js-open-modal">Получить бесплатную консультацию</button>
                        </div>
                        <div id="circles-block" class="offer__circles">
                            <div class="circle">
                                <strong>>200</strong>
                                <hr>
                                <span>РАЗРАБОТАННЫХ ПРОЕКТОВ</span>
                            </div>
                            <div class="circle">
                                <strong>7 лет</strong>
                                <hr>
                                <span>В СФЕРЕ IT</span>
                            </div>
                            <div class="circle">
                                <strong>40 гб</strong>
                                <hr>
                                <span>ИСХОДНЫХ ФАЙЛОВ</span>
                            </div>
                            <div class="circle">
                                <strong>30+</strong>
                                <hr>
                                <span>СОТРУДНИКОВ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="tech" class="tech">
                <div class="container">
                    <div class="tech__wr">
                        <div class="tech__partners">
                            <h2>Среди наших клиентов</h2>
                            <ul>
                                <li>
                                    <picture>
                                        <source srcset="img/cnt_logo_sts_retina.webp 2x, img/cnt_logo_sts.webp 1x" type="image/webp">
                                        <source srcset="img/cnt_logo_sts_retina.png 2x" type="image/png">
                                        <img src="img/cnt_logo_sts.png" alt="Телеканал СТС" data-tippy-content="Телеканал СТС">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="img/cnt_logo_rf_retina.webp 2x, img/cnt_logo_rf.webp 1x" type="image/webp">
                                        <source srcset="img/cnt_logo_rf_retina.png 2x" type="image/png">
                                        <img src="img/cnt_logo_rf.png" alt="МИД Российской Федерации"
                                            data-tippy-content="МИД Российской Федерации">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="img/cnt_logo_nornikel_retina.webp 2x, img/cnt_logo_nornikel.webp 1x"
                                            type="image/webp">
                                        <source srcset="img/cnt_logo_nornikel_retina.png 2x" type="image/png">
                                        <img src="img/cnt_logo_nornikel.png" alt="ПАО «Норникель»" data-tippy-content="ПАО «Норникель»">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="img/cnt_logo_tnt_retina.webp 2x, img/cnt_logo_tnt.webp 1x" type="image/webp">
                                        <source srcset="img/cnt_logo_tnt_retina.png 2x" type="image/png">
                                        <img src="img/cnt_logo_tnt.png" alt="Телеканал ТНТ" data-tippy-content="Телеканал ТНТ">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="img/cnt_logo_tui_retina.webp 2x, img/cnt_logo_tui.webp 1x" type="image/webp">
                                        <source srcset="img/cnt_logo_tui_retina.png 2x" type="image/png">
                                        <img src="img/cnt_logo_tui.png" alt="Туристическая компания TUI Group"
                                            data-tippy-content="Туристическая компания TUI Group">
                                    </picture>
                                </li>
                                <li>
                                    <picture>
                                        <source srcset="img/cnt_logo_match_retina.webp 2x, img/cnt_logo_match.webp 1x" type="image/webp">
                                        <source srcset="img/cnt_logo_match_retina.png 2x" type="image/png">
                                        <img src="img/cnt_logo_match.png" alt="Телеканал Матч Премьер"
                                            data-tippy-content="Телеканал Матч Премьер">
                                    </picture>
                                </li>
                            </ul>
                        </div>
                        <div class="tech__text">
                            <h2>Используем технологии</h2>
                            <div class="tech__text-wr">
                                <ul>
                                    <li>
                                        <strong>Верстка:</strong>
                                        <span>html, css, sass, less, gulp</span>
                                    </li>
                                    <li>
                                        <strong>Программирование:</strong>
                                        <span>php, javascript, swift, obj-c, java, kotlin, c, c++, perl, ruby, typescript</span>
                                    </li>
                                    <li>
                                        <strong>Проектирование:</strong>
                                        <span>axure, invision, sketch, figma</span>
                                    </li>
                                    <li>
                                        <strong>Также знаем:</strong>
                                        <span>aws, apache, nginx, maven, git, github, bitbucket, linux bash, gradle, composer</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <strong>Технологии в программировании:</strong>
                                        <span>jquery, react, nodejs, vuejs, symfony, drupal, wordpress, woocommerce, joomla, rabbitmq,
                                            reactnative, electron, cocoa, uikit, swiftui, firebase, webRTC, VOIP и многие другие
                                            технологии</span>
                                    </li>
                                    <li>
                                        <strong>Базы данных:</strong>
                                        <span>mysql, postgre, oracle, firebird</span>
                                    </li>
                                    <li>
                                        <strong>Дизайн:</strong>
                                        <span>photoshop,&nbsp;sketch,&nbsp;figma</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="portfolio" class="portfolio">
                <div class="container">
                    <div class="portfolio__top">
                        <h2>Портфолио<span id="line3" class="line"></span></h2>
                        <div class="portfolio__btns-mob">
                            <button class="portfolio__btn-next js-portfolio-btn-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.5164 13.5334L18.0497 20L24.5164 26.4667C25.1664 27.1167 25.1664 28.1667 24.5164 28.8167C23.8664 29.4667 22.8164 29.4667 22.1664 28.8167L14.5164 21.1667C13.8664 20.5167 13.8664 19.4667 14.5164 18.8167L22.1664 11.1667C22.8164 10.5167 23.8664 10.5167 24.5164 11.1667C25.1497 11.8167 25.1664 12.8834 24.5164 13.5334Z"
                                        fill="black" fill-opacity="0.54" />
                                </svg>
                            </button>
                            <button class="portfolio__btn-prev js-portfolio-btn-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.4836 26.4666L21.9503 20L15.4836 13.5333C14.8336 12.8833 14.8336 11.8333 15.4836 11.1833C16.1336 10.5333 17.1836 10.5333 17.8336 11.1833L25.4836 18.8333C26.1336 19.4833 26.1336 20.5333 25.4836 21.1833L17.8336 28.8333C17.1836 29.4833 16.1336 29.4833 15.4836 28.8333C14.8503 28.1833 14.8336 27.1166 15.4836 26.4666Z"
                                        fill="black" fill-opacity="0.54" />
                                </svg>
                            </button>
                        </div>
                        <a href="https://alef.im/alef.pdf" target="_blank" class="btn-default">Портфолио в PDF</a>
                    </div>
                    <div class="portfolio__wr">
                        <div class="portfolio__slider-thumbs js-portfolio-slider-thumbs">
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_1.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_1.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_1.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_1.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_2.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_2.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_2.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_2.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_3.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_3.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_3.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_3.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_4.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_4.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_4.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_4.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_5.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_5.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_5.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_5.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_6.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_6.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_6.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_6.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_7.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_7.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_7.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_7.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_8.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_8.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_8.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_8.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_9.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_9.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_9.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_9.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_10.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_10.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_10.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_10.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_11.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_11.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_11.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_11.jpg" alt="">
                                </picture>
                            </div>
                            <div class="slide">
                                <picture>
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_12.webp" type="image/webp"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/760/cnt_presentation_slide_12.jpg" type="image/jpg"
                                        media="(max-width: 1119px)">
                                    <source srcset="img/portfolio/120/cnt_presentation_slide_12.webp" type="image/webp">
                                    <img src="img/portfolio/120/cnt_presentation_slide_12.jpg" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="portfolio__slider-main js-portfolio-slider-main">
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_1.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_1.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_1.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_2.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_2.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_2.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_3.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_3.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_3.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_4.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_4.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_4.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_5.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_5.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_5.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_6.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_6.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_6.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_7.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_7.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_7.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_8.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_8.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_8.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_9.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_9.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_9.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_10.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_10.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_10.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_11.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_11.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_11.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="slide">
                                <a href="img/portfolio/1920/cnt_presentation_slide_12.jpg" data-fancybox="portfolio">
                                    <picture>
                                        <source srcset="img/portfolio/1920/cnt_presentation_slide_12.webp" type="image/webp">
                                        <img src="img/portfolio/1920/cnt_presentation_slide_12.jpg" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="https://alef.im/alef.pdf" target="_blank" class="btn-default portfolio__download-btn-mob">Портфолио в
                        PDF</a>
                </div>
            </section>
            <section id="reviews" class="video">
                <div class="container">
                    <div class="video__top">
                        <h2>Видео-отзывы<span id="line4" class="line"></span></h2>
                        <div class="video__btns">
                            <p>Отзыв <span class="js-video-current">1</span> из <span class="js-video-amount">10</span></p>
                            <button class="portfolio__btn-next js-video-btn-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.5164 13.5334L18.0497 20L24.5164 26.4667C25.1664 27.1167 25.1664 28.1667 24.5164 28.8167C23.8664 29.4667 22.8164 29.4667 22.1664 28.8167L14.5164 21.1667C13.8664 20.5167 13.8664 19.4667 14.5164 18.8167L22.1664 11.1667C22.8164 10.5167 23.8664 10.5167 24.5164 11.1667C25.1497 11.8167 25.1664 12.8834 24.5164 13.5334Z"
                                        fill="black" fill-opacity="0.54" />
                                </svg>
                            </button>
                            <button class="video__btn-prev js-video-btn-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.4836 26.4666L21.9503 20L15.4836 13.5333C14.8336 12.8833 14.8336 11.8333 15.4836 11.1833C16.1336 10.5333 17.1836 10.5333 17.8336 11.1833L25.4836 18.8333C26.1336 19.4833 26.1336 20.5333 25.4836 21.1833L17.8336 28.8333C17.1836 29.4833 16.1336 29.4833 15.4836 28.8333C14.8503 28.1833 14.8336 27.1166 15.4836 26.4666Z"
                                        fill="black" fill-opacity="0.54" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="video__slider js-slider-video">
                        <div class="slide">
                            <div class="video__wr">
                                <lite-youtube videoid="twVbg6iMotE" params="controls=1&enablejsapi=1&modestbranding=1"
                                    style="background-image: url('img/reviews/cnt_video_feedback_1.jpg');"></lite-youtube>
                            </div>
                            <div class="video__text">
                                <h3 class="video__text-title">Григорян Елена</h3>
                                <h4 class="video__text-desc">Замгендиректора Real Trans Hair</h4>
                                <p><strong>Сейчас очень сложно найти профессионалов, соответствующих уровню Real Trans Hair! Вот уже 20
                                        лет мы
                                        занимаемся восстановлением волос и косметологией и нам хотелось рассказать всем о своих
                                        достижениях.</strong></p>
                                <p>Весь наш персонал выражает благодарность компании Alef Development, которые разработали для нас новый
                                    сайт, удобный в навигации, хорошо структурированный, отражающий все наши возможности и удобный для
                                    всех наших клиентов: и для мужчин, и для женщин разных возрастных категорий. Спасибо!</p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="video__wr">
                                <lite-youtube videoid="gFwJ9bEP_tM" params="controls=1&enablejsapi=1&modestbranding=1"
                                    style="background-image: url('img/reviews/cnt_video_feedback_2.jpg');"></lite-youtube>
                            </div>
                            <div class="video__text">
                                <h3 class="video__text-title">Юрий Королев</h3>
                                <h4 class="video__text-desc">Инвестор</h4>
                                <p>Всем привет! Меня зовут Юрий, я уже давно работаю в сфере прямых и венчурных инвестиций и в какой-то
                                    момент понял, что пришла пора сделать свой собственный проект. Я прекрасно понимаю насколько важно
                                    качество мобильного приложения для поднятия следующих раундов инвестиций, поэтому очень тщательно
                                    подошел к выбору подрядчика и остался доволен.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="video__wr">
                                <lite-youtube videoid="JlgC0qf162k" params="controls=1&enablejsapi=1&modestbranding=1"
                                    style="background-image: url('img/reviews/cnt_video_feedback_3.jpg');"></lite-youtube>
                            </div>
                            <div class="video__text">
                                <h3 class="video__text-title">Юлия Корнева</h3>
                                <h4 class="video__text-desc">Health-блоггер</h4>
                                <p><strong>Здравствуйте, меня зовут Юлия Корнева! Я эксперт в здоровом образе жизни и автор популярного
                                        блога.</strong></p>
                                <p>Alef Development разработали для меня приложение "Live up! Рецепты". Это приложение расширило мой
                                    блогерский арсенал и подарило мне дополнительные возможности и способы коммуникации с моей любимой
                                    аудиторией. Я рекомендую команду Alef Development всем, кто хочет сделать свое мобильное
                                    приложение....</p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="video__wr">
                                <lite-youtube videoid="1N6dRtudPOA" params="controls=1&enablejsapi=1&modestbranding=1"
                                    style="background-image: url('img/reviews/cnt_video_feedback_4.jpg');"></lite-youtube>
                            </div>
                            <div class="video__text">
                                <h3 class="video__text-title">Евгений Гольцман</h3>
                                <h4 class="video__text-desc">Сооснователь клуба Solomon</h4>
                                <p>Всем привет! Я сооснователь еврейского делового клуба Solomon, и изначально мы делали свой
                                    сайт с компанией Alef Development, и сегодня я могу с уверенностью рекомендовать эту
                                    компанию.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="video__wr">
                                <lite-youtube videoid="dtreWYastbI" params="controls=1&enablejsapi=1&modestbranding=1"
                                    style="background-image: url('img/reviews/cnt_video_feedback_5.jpg');"></lite-youtube>
                            </div>
                            <div class="video__text">
                                <h3 class="video__text-title">Евгения Пак</h3>
                                <h4 class="video__text-desc">Генеральный директор компании Art of You</h4>
                                <p>Удобный и красивый сайт — это лицо Вашей компании! И не менее важно, перед тем, как вы приступите к
                                    работе над сайтом, найти тех исполнителей, в которых вы будете уверены. После того, как мы начали своё
                                    сотрудничество с Alef Development, исчезли все проблемы. Ведение и полный контроль над сайтом мы
                                    передали этим профессионалам. Спасибо, Alef Development, за наш прекрасный сайт!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="price" class="price">
                <div class="container">
                    <div class="price__top">
                        <h2>Дневные ставки<span id="line5" class="line"></span></h2>
                        <button class="btn-default js-open-modal">Оставить заявку</button>
                    </div>
                    <div class="price__wr">
                        <div class="price__item">
                            <div class="price__item-circle">
                                <img src="img/svg/icn_manager.svg" alt="">
                            </div>
                            <div class="price__item-text">
                                <span>Менеджер</span>
                                <strong>12 000 ₽</strong>
                            </div>
                        </div>
                        <div class="price__item">
                            <div class="price__item-circle">
                                <img src="img/svg/icn_designer.svg" alt="">
                            </div>
                            <div class="price__item-text">
                                <span>UI-дизайнер</span>
                                <strong>12 000 ₽</strong>
                            </div>
                        </div>
                        <div class="price__item">
                            <div class="price__item-circle">
                                <img src="img/svg/icn_mobile_dev.svg" alt="">
                            </div>
                            <div class="price__item-text">
                                <span>Мобильный программист</span>
                                <strong>12 000 ₽</strong>
                            </div>
                        </div>
                        <div class="price__item">
                            <div class="price__item-circle">
                                <img src="img/svg/icn_html.svg" alt="">
                            </div>
                            <div class="price__item-text">
                                <span>HTML-верстальщик</span>
                                <strong>8 000 ₽</strong>
                            </div>
                        </div>
                        <div class="price__item">
                            <div class="price__item-circle">
                                <img src="img/svg/icn_web_dev.svg" alt="">
                            </div>
                            <div class="price__item-text">
                                <span>Web-программист</span>
                                <strong>8 000 ₽</strong>
                            </div>
                        </div>
                        <div class="price__item">
                            <div class="price__item-circle">
                                <img src="img/svg/icn_test.svg" alt="">
                            </div>
                            <div class="price__item-text">
                                <span>Тестировщик</span>
                                <strong>8 000 ₽</strong>
                            </div>
                        </div>
                    </div>
                    <button class="btn-default price__btn-mob js-open-modal">Оставить заявку</button>
                </div>
            </section>
            <section id="press" class="press">
                <div class="container">
                    <div class="press__top">
                        <h2>Мы в СМИ<span id="line6" class="line"></span></h2>
                        <div class="press__btns">
                            <button class="press__btn-next js-press-btn-prev">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.5164 13.5334L18.0497 20L24.5164 26.4667C25.1664 27.1167 25.1664 28.1667 24.5164 28.8167C23.8664 29.4667 22.8164 29.4667 22.1664 28.8167L14.5164 21.1667C13.8664 20.5167 13.8664 19.4667 14.5164 18.8167L22.1664 11.1667C22.8164 10.5167 23.8664 10.5167 24.5164 11.1667C25.1497 11.8167 25.1664 12.8834 24.5164 13.5334Z"
                                        fill="black" fill-opacity="0.54" />
                                </svg>
                            </button>
                            <button class="press__btn-prev js-press-btn-next">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.4836 26.4666L21.9503 20L15.4836 13.5333C14.8336 12.8833 14.8336 11.8333 15.4836 11.1833C16.1336 10.5333 17.1836 10.5333 17.8336 11.1833L25.4836 18.8333C26.1336 19.4833 26.1336 20.5333 25.4836 21.1833L17.8336 28.8333C17.1836 29.4833 16.1336 29.4833 15.4836 28.8333C14.8503 28.1833 14.8336 27.1166 15.4836 26.4666Z"
                                        fill="black" fill-opacity="0.54" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="press__wr">
                    <div class="press__slider js-press-slider">
                        <div class="slide">
                            <a href="https://vc.ru/life/73004-istoriya-startapa-kak-prevratit-blog-v-mobilnoe-prilozhenie-i-poluchat-v-mesyac-1000-passivnogo-dohoda"
                                target="_blank" class="press__slide" style="background-image: url('img/press/bgr_press_vc.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_vcru_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_vcru.png" alt="">
                                </picture>
                                <p>История стартапа: как превратить блог в мобильное приложение и получать в месяц $1000 пассивного
                                    дохода<br><span class="icon-arrow"></span></p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://pro.rbc.ru/demo/5d6e2b519a794769534a243d" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rbk.jpeg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rbk_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rbk.png" alt="">
                                </picture>
                                <p>Десять вопросов: как владельцу бизнеса проверить разработчиков<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://www.forbes.ru/forbeslife-photogallery/380089-cifrovye-kochevniki-kak-stanovyatsya-digital-nomads-i-gde-oni"
                                target="_blank" class="press__slide" style="background-image: url('img/press/bgr_press_forbes.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_forbes_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_forbes.png" alt="">
                                </picture>
                                <p>Цифровые кочевники: как становятся digital nomads и где они обитают<br><span
                                        class="icon-arrow"></span></p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://www.sostav.ru/publication/fort-boyard-39460.html" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_sostav.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_sostav_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_sostav.png" alt="">
                                </picture>
                                <p>СТС продвигает «Форт Боярд» масштабным диджитал-квестом<br><span class="icon-arrow"></span></p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://rb.ru/opinion/esli-chelovek-gik/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rusbase_2.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rusbase_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rusbase.png" alt="">
                                </picture>
                                <p>Если человек — гик, то это не только в рабочее время, это круглосуточно и на всю жизнь<br><span
                                        class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://netology.ru/blog/02-2019-5-sposobov-stat-bezrabotnym" target="_blank"
                                class="press__slide" style="background-image: url('img/press/bgr_press_netology.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_netologia_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_netologia.png" alt="">
                                </picture>
                                <p>Как программисту лишиться работы. 5 способов от руководителя IT-студии<br><span
                                        class="icon-arrow"></span></p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://rb.ru/opinion/how-to-build-an-it-career/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rusbase_3.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rusbase_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rusbase.png" alt="">
                                </picture>
                                <p>«Там, где ты не крутой — не заработаешь». Как построить карьеру в IT<br><span
                                        class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://incrussia.ru/understand/razrabotka/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_inc.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_inc_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_inc.png" alt="">
                                </picture>
                                <p>Как сэкономить на разработке и когда этого делать не стоит<br><span class="icon-arrow"></span></p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://rb.ru/opinion/vyklyuchite-snobizm/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rusbase.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rusbase_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rusbase.png" alt="">
                                </picture>
                                <p>Выключите свой снобизм: пять правил общения с клиентами<br><span class="icon-arrow"></span></p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://itproger.com/news/vot-pochemu-tebe-ne-dano-stanovitsya-programmistom-7-priznakov"
                                target="_blank" class="press__slide" style="background-image: url('img/press/bgr_press_itprog.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_code_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_code.png" alt="">
                                </picture>
                                <p>Вот почему тебе не дано становиться программистом: 7 признаков<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://rb.ru/opinion/ne-programmist/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rusbase_4.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rusbase_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rusbase.png" alt="">
                                </picture>
                                <p>Семь признаков того, что ты не станешь программистом<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://www.sostav.ru/publication/chatbot-35996.html" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_sostav_2.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_sostav_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_sostav.png" alt="">
                                </picture>
                                <p>Чат-боты для бизнеса: от разочарования к практике<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://rb.ru/opinion/istoriya-alef/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rusbase_5.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rusbase_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rusbase.png" alt="">
                                </picture>
                                <p>«Понизили цены на услуги в 10 раз. В этом аду мы жили несколько месяцев». История программистов,
                                    открывших свою студию<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://www.sostav.ru/publication/match-tv-37286.html" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_sostav_3.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_sostav_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_sostav.png" alt="">
                                </picture>
                                <p>У «Матч ТВ» появился бот «Футболиса»<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="https://rb.ru/story/my-business-fails/" target="_blank" class="press__slide"
                                style="background-image: url('img/press/bgr_press_rusbase_6.jpg');">
                                <picture>
                                    <source srcset="img/press/cnt_logo_rusbase_retina.png 2x" type="image/png">
                                    <img src="img/press/cnt_logo_rusbase.png" alt="">
                                </picture>
                                <p>Семь бизнес-ошибок, о которых жалеют предприниматели<br><span class="icon-arrow"></span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="consultation" class="consultation">
                <div class="container">
                    <div class="consultation__wr">
                        <h2>Нужна консультация?</h2>
                        <p>Напишите нам в Telegram</p>
                        <a class="btn-default btn-default--icon-right" href="https://t.me/alefdev" target="_blank">
                            <span>Написать в Telegram</span>
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7097 0.654495C19.7097 0.654495 21.6523 -0.103005 21.4904 1.73664C21.4365 2.49415 20.9508 5.1454 20.5731 8.0131L19.278 16.5079C19.278 16.5079 19.1701 17.7524 18.1987 17.9688C17.2274 18.1852 15.7704 17.2113 15.5006 16.9949C15.2847 16.8326 11.4534 14.3977 10.1043 13.2074C9.72655 12.8827 9.29485 12.2334 10.1583 11.476L15.8244 6.06525C16.4719 5.41595 17.1195 3.90095 14.4213 5.7406L6.86655 10.8808C6.86655 10.8808 6.00315 11.4219 4.3843 10.9349L0.876711 9.85275C0.876711 9.85275 -0.418395 9.04115 1.79408 8.2295C7.19035 5.68645 13.8278 3.0893 19.7097 0.654495Z"/>
                            </svg>
                        </a>
                        <picture>
                            <source srcset="img/cnt_man_retina.png 2x" type="image/png">
                            <img class="consultation__image" src="img/press/cnt_man.png" alt="" width="362" height="391">
                        </picture>
                    </div>
                </div>
            </section>
            <section id="contacts" class="contacts">
                <div class="container">
                    <h2 class="contacts__title">Контакты<span id="line7" class="line"></span></h2>
                    <div class="contacts__wr">
                        <form class="contacts__form js-form-consult" action="#" method="post">
                            <input type="text" class="input-user" name="name" placeholder="Ваше имя (необязательно)">
                            <input type="tel" class="input-phone" name="phone" placeholder="Ваш номер телефона" required>
                            <input type="email" name="email">
                            <label class="check-label">
                                <input type="checkbox" name="agree" required checked>
                                <span><a href="agreement.pdf" target="_blank">Согласен на обработку персональных
                                        данных</a></span>
                            </label>
                            <button type="submit" class="btn-default">Получить бесплатную консультацию</button>
                        </form>
                        <div class="contacts__text">
                            <a href="#" class="contacts__phone js-phone-second">
                                <span></span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M33.9259 26.3438C33.8294 26.0538 33.2179 25.6271 32.0905 25.064C31.7852 24.8868 31.3502 24.6454 30.7871 24.3397C30.2235 24.0335 29.7122 23.7519 29.2537 23.494C28.7947 23.2367 28.3639 22.9869 27.9617 22.7461C27.8973 22.6975 27.6962 22.5568 27.3581 22.3233C27.0199 22.09 26.7344 21.9169 26.5005 21.804C26.2674 21.6914 26.0381 21.6353 25.8122 21.6353C25.4903 21.6353 25.0885 21.8646 24.6056 22.3233C24.1228 22.7819 23.68 23.2811 23.2779 23.8205C22.8753 24.36 22.4491 24.859 21.9983 25.3175C21.5478 25.7769 21.1773 26.0057 20.8875 26.0057C20.7426 26.0057 20.5612 25.9655 20.3439 25.8854C20.1272 25.8052 19.9619 25.7361 19.8486 25.6805C19.7365 25.6237 19.5435 25.5115 19.2695 25.3418C18.9955 25.1731 18.8425 25.0801 18.8107 25.064C16.6053 23.8405 14.7137 22.4399 13.1361 20.8624C11.5587 19.2848 10.1581 17.3932 8.93463 15.1878C8.91862 15.1554 8.82573 15.0026 8.65701 14.729C8.48777 14.4552 8.37496 14.2622 8.31858 14.1493C8.26241 14.0366 8.19383 13.8716 8.11361 13.6543C8.03339 13.4371 7.99303 13.256 7.99303 13.111C7.99303 12.8215 8.22255 12.4509 8.68106 12.0002C9.13986 11.5497 9.63898 11.1229 10.1783 10.7207C10.7177 10.3186 11.2164 9.87573 11.6752 9.39293C12.134 8.90986 12.3634 8.5077 12.3634 8.18559C12.3634 7.96056 12.3071 7.73087 12.1945 7.49747C12.0819 7.2637 11.9088 6.97829 11.6752 6.64004C11.4418 6.30195 11.301 6.10097 11.2526 6.03639C11.0114 5.63406 10.762 5.20355 10.5043 4.74471C10.2463 4.28587 9.96479 3.77463 9.65891 3.21118C9.35307 2.6482 9.1119 2.21332 8.93463 1.90752C8.3711 0.780786 7.94463 0.168768 7.65485 0.072572C7.54204 0.024219 7.37306 0 7.14766 0C6.71295 0 6.1455 0.08022 5.44532 0.241467C4.74484 0.40246 4.19371 0.571228 3.79108 0.748494C2.98633 1.08645 2.13318 2.06847 1.23143 3.69399C0.41066 5.20712 0 6.70449 0 8.18533C0 8.61966 0.0282131 9.04222 0.0845966 9.45318C0.141023 9.86354 0.24168 10.3265 0.386569 10.8417C0.531458 11.3567 0.648176 11.7394 0.736682 11.9886C0.824932 12.238 0.990004 12.6845 1.23143 13.3285C1.47285 13.9727 1.61774 14.367 1.66614 14.5118C2.22946 16.0895 2.89757 17.498 3.67024 18.7377C4.94131 20.7982 6.67602 22.9273 8.87362 25.1248C11.071 27.3221 13.1998 29.057 15.2605 30.3289C16.5 31.101 17.909 31.7693 19.4863 32.3328C19.6313 32.3809 20.0258 32.5259 20.6696 32.7679C21.3132 33.0089 21.7601 33.1743 22.0097 33.2628C22.2589 33.3514 22.6414 33.468 23.1564 33.6133C23.6723 33.7581 24.1347 33.8587 24.5451 33.9155C24.9555 33.9711 25.378 34 25.813 34C27.2936 34 28.7908 33.589 30.3043 32.7684C31.9296 31.8669 32.9115 31.0135 33.2497 30.2084C33.4275 29.8064 33.5959 29.255 33.7567 28.5546C33.9181 27.8544 33.9981 27.2871 33.9981 26.8524C33.9988 26.6264 33.9745 26.4573 33.9259 26.3438Z"
                                        fill="#317690" />
                                </svg>
                            </a>
                            <a href="mailto:contact@alef.im" class="contacts__mail">
                                <span>contact@alef.im</span>
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.6 3.24463H3.4C1.53 3.24463 0 4.76338 0 6.61963V26.8696C0 28.7259 1.53 30.2446 3.4 30.2446H30.6C32.47 30.2446 34 28.7259 34 26.8696V6.61963C34 4.76338 32.47 3.24463 30.6 3.24463ZM29.92 10.4165L18.802 17.3184C17.697 18.0103 16.303 18.0103 15.198 17.3184L4.08 10.4165C3.655 10.1465 3.4 9.69088 3.4 9.2015C3.4 8.07088 4.641 7.39588 5.61 7.9865L17 15.0571L28.39 7.9865C29.359 7.39588 30.6 8.07088 30.6 9.2015C30.6 9.69088 30.345 10.1465 29.92 10.4165Z"
                                        fill="#317690" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="page-footer">
            <div class="container">
                <div class="page-footer__wr">
                    <ul class="page-footer__menu js-menu-list">
                        <li><a href="#tech">Технологии</a></li>
                        <li><a href="#portfolio">Портфолио</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#price">Цены</a></li>
                        <li><a href="#press">Мы в СМИ</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                    <div class="page-footer__info">
                        123007, г.Москва, Хорошевское шоссе, д.38<br> <a href="mailto:contact@alef.im">contact@alef.im</a> <br>
                        www.alef.im <br> <a href="#" class="js-phone"></a>
                    </div>
                    <div class="page-footer__copy">
                        <span>© All rights reserved 2022</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="overlay"></div>
    <div class="modal">
        <div class="modal__wr">
            <div class="modal__content">
                <h2>Заполните форму</h2>
                <form class="modal__form js-form-consult" action="#" method="post">
                    <input type="text" class="input-user" name="name" placeholder="Ваше имя (необязательно)">
                    <input type="tel" class="input-phone" name="phone" placeholder="Ваш номер телефона" required>
                    <input type="email" name="email">
                    <label class="check-label">
                        <input type="checkbox" name="agree" required checked>
                        <span><a href="agreement.pdf" target="_blank">Согласен на обработку персональных
                                данных</a></span>
                    </label>
                    <button type="submit" class="btn-default">Получить бесплатную консультацию</button>
                </form>
                <button class="modal__close js-modal-close">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.3002 0.710001C12.9102 0.320001 12.2802 0.320001 11.8902 0.710001L7.00022 5.59L2.11022 0.700001C1.72022 0.310001 1.09021 0.310001 0.700215 0.700001C0.310215 1.09 0.310215 1.72 0.700215 2.11L5.59022 7L0.700215 11.89C0.310215 12.28 0.310215 12.91 0.700215 13.3C1.09021 13.69 1.72022 13.69 2.11022 13.3L7.00022 8.41L11.8902 13.3C12.2802 13.69 12.9102 13.69 13.3002 13.3C13.6902 12.91 13.6902 12.28 13.3002 11.89L8.41021 7L13.3002 2.11C13.6802 1.73 13.6802 1.09 13.3002 0.710001Z"
                            fill="white" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <script src="js/libs.min.js?ver=40"></script>
    <script src="js/main.js?ver=40"></script>
</body>

</html>
END;
$pattern = "/\<a.*з.*\<\/a\>/i";
echo preg_match_all($pattern, $string);

?>
</body>
</html>