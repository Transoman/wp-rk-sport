<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="container">
        <div class="header__inner-wrapper">
            <div class="header__mobile">
                <a href="<?php echo home_url( '/' ); ?>" class="header__logo">
                    <img src="<?php echo THEME_URL; ?>/images/general/logo.png" alt="">
                </a>
                <button class="header__burger-btn">
                        <span class="header__burger-bar"></span>
                </button>
            </div>
            <nav class="header__nav">
                <ul>
                    <li>
                        <a href="#hero">
                            Главная 
                        </a>
                    </li>
                    <li>
                        <a href="#clients">
                            Наши клиенты
                        </a>
                    </li>
                    <li>
                        <a href="#models">
                            Модели костюмов
                        </a>
                    </li>
                    <li>
                        <a href="#variants-print">
                            Виды нанесеный 
                        </a>
                    </li>
                    <li>
                        <a href="#gallery">
                            Галерея
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            О нас
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                        Контакты
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
      
    </div>
  </header><!-- /.header-->

  <div class="content">