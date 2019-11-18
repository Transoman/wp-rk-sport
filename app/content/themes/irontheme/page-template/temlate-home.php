<?php 
/*
* Template Name: Home
*/
get_header(); ?>

<section class="first-screen" style="background-image: url('<?php echo THEME_URL; ?>/images/general/first-sreen-bg.jpg')">
    <div class="container">
        <div class="first-screen__inner-wrapper">
            <div class="first-screen__description">
                <h3>
                    от производителя
                </h3>
                <h1>
                    Спортивные <br> костюмы <br> для команды
                </h1>
                <h2>
                    минимальный заказ от 5 шт.
                </h2>
            </div>
            <form class="first-screen__form form">
                <h3>
                    Оставьте заявку
                </h3>
                <p>
                    и получите католог с ценами
                </p>
                <div class="form__label">
                    <input type="text" placeholder="Ваше имя" required>
                </div>
                <div class="form__label">
                    <input type="email" placeholder="Ваш e-mail" required>
                </div>
                <div class="form__label">
                    <span>
                        Количество костюмов:
                    </span>
                    <select name="number">
                        <option value="5-15шт">5-15шт</option>
                        <option value="15-25шт">15-25шт</option>
                        <option value="25-50шт">25-50шт</option>
                        <option value="50-100шт">50-100шт</option>
                    </select>
                </div>
                <button class="button button--fluid thanks_open">
                    Получить каталог с ценами
                </button>
            </form> 
        </div>
    </div>
</section>

<section class="clients" style="background-image: url('<?php echo THEME_URL; ?>/images/general/clients-bg.png')">
    <div class="container">
        <div class="title__wrapper">
            <h2 class="title">
                наши клиенты
            </h2>
            <div class="clients__button-wrapper">
                <div class="swiper-button-prev clients__button clients__button--prev"></div>
                <div class="swiper-button-next clients__button clients__button--next"></div>
            </div>          
        </div>
        <div class="clients__slider">
           <div class="swiper-container">
                <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo THEME_URL; ?>/images/general/clients-logo-1.png" alt="img">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo THEME_URL; ?>/images/general/clients-logo-2.png" alt="img">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo THEME_URL; ?>/images/general/clients-logo-3.png" alt="img">
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo THEME_URL; ?>/images/general/clients-logo-4.png" alt="img">
                </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="models">
    <div class="container">
        <div class="title__wrapper">
            <h2 class="title">
                модели костюмов
            </h2>
            <div class="models__button-wrapper">
                <div class="swiper-button-prev models__button models__button--prev"></div>
                <div class="swiper-button-next models__button models__button--next"></div>
            </div>      
        </div>
        <div class="models__slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="models__item">
                            <h3>
                                Классический костюм
                            </h3>
                            <p>
                                из футера для любого вида спорта
                            </p>
                            <div class="models__img-wrapper">                       
                                <div class="models-slider__slider">
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-1.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-2.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-3.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-4.png" alt="">  
                                    </div>
                                </div>
                                <div class="models__img">
                                    <a href="#">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                            </div>

                            <h4>
                                Выбор цвета:
                            </h4>
                            <div class="models-slider__nav">
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-1.png">
                                            <img  src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-4.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-4.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-5.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-6.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-7.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-8.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                 <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="models__price">
                                от <strong>2 100</strong> ₽ 
                            </div>
                            <button class="button modal_open">
                                заказать костюм
                            </button>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="models__item">
                            <h3>
                                Классический костюм
                            </h3>
                            <p>
                                из футера для любого вида спорта
                            </p>
                            <div class="models__img-wrapper">                       
                                <div class="models-slider__slider">
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-1.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-2.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-3.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-4.png" alt="">  
                                    </div>
                                </div>
                                <div class="models__img">
                                    <a href="#">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                            </div>

                            <h4>
                                Выбор цвета:
                            </h4>
                            <div class="models-slider__nav">
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-1.png">
                                            <img  src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-4.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-4.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-5.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-6.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-7.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-8.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                 <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="models__price">
                                от <strong>2 100</strong> ₽ 
                            </div>
                            <button class="button modal_open">
                                заказать костюм
                            </button>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="models__item">
                            <h3>
                                Классический костюм
                            </h3>
                            <p>
                                из футера для любого вида спорта
                            </p>
                            <div class="models__img-wrapper">                       
                                <div class="models-slider__slider">
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-1.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-2.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-3.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-4.png" alt="">  
                                    </div>
                                </div>
                                <div class="models__img">
                                    <a href="#">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                            </div>

                            <h4>
                                Выбор цвета:
                            </h4>
                            <div class="models-slider__nav">
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-1.png">
                                            <img  src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-4.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-4.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-5.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-6.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-7.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-8.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                 <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="models__price">
                                от <strong>2 100</strong> ₽ 
                            </div>
                            <button class="button modal_open">
                                заказать костюм
                            </button>
                        </div>
                    </div>
                     <div class="swiper-slide">
                        <div class="models__item">
                            <h3>
                                Классический костюм
                            </h3>
                            <p>
                                из футера для любого вида спорта
                            </p>
                            <div class="models__img-wrapper">                       
                                <div class="models-slider__slider">
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-1.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-2.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-3.png" alt="">  
                                    </div>
                                    <div class="models-slider__item">
                                        <img src="<?php echo THEME_URL; ?>/images/general/models/model-4.png" alt="">  
                                    </div>
                                </div>
                                <div class="models__img">
                                     <a href="#">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                            </div>

                            <h4>
                                Выбор цвета:
                            </h4>
                            <div class="models-slider__nav">
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-1.png">
                                            <img  src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-4.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-4.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-5.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-6.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-7.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-1-color-8.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                 <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-6.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-5.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-2-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-7.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-3-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-8.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="models-slider__elem">
                                    <ul>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-1.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-1.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-2.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-2.svg" alt="">
                                        </li>
                                        <li data-colorUrl="<?php echo THEME_URL; ?>/images/general/models/model-4-color-3.png">
                                            <img src="<?php echo THEME_URL; ?>/images/general/models/color-3.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="models__price">
                                от <strong>2 100</strong> ₽ 
                            </div>
                            <button class="button modal_open">
                                заказать костюм
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="order-form" style="background-image: url('<?php echo THEME_URL; ?>/images/general/order-form-bg.png')">
    <div class="container">
        <div class="order-form__inner-wrapper">
            <div class="order-form__description">
                <h2>
                    <strong>Закажите</strong>
                    спортивные костюмы
                </h2>
                <p>
                    для вашей команды
                </p>
            </div>
            <form class="order-form__form form form--order">
                <h3>
                    Оставьте ваши <br>
                    контактные данные
                </h3>
                <p>
                    И менеджер отправит вам каталог в течение 15 минут
                </p>
                <div class="form__label">
                    <input type="text" placeholder="Ваше имя" required>
                </div>
                <div class="form__label">
                    <input type="email" placeholder="Ваш e-mail" required>
                </div>
                <div class="form__label">
                    <span>
                        Количество костюмов:
                    </span>
                    <select name="number">
                        <option value="5-15шт">5-15шт</option>
                        <option value="15-25шт">15-25шт</option>
                        <option value="25-50шт">25-50шт</option>
                        <option value="50-100шт">50-100шт</option>
                    </select>
                </div>
                <button class="button button--fluid button--order">
                    Получить каталог с ценами
                </button>
            </form> 
        </div>
    </div>
</section>
<div class="info__wrapper" style="background-image: url('<?php echo THEME_URL; ?>/images/general/about-bg.png')">
    <section class="info">
        <div class="container">
            <div class="title__wrapper">
                <h2 class="title">
                    Виды нанесений
                </h2>   
                <div class="info__button-wrapper">
                    <div class="info__button info__button--prev info__button--prev-one"></div>
                    <div class="info__button info__button--next info__button--next-one"></div>
                </div>
                <div class="title__description">
                    <strong>Предлагаем широкий выбор вариантов исполнения</strong> <br>
                    и всегда готовы  воплощать ваши самые креативные идеи
                </div>     
            
            </div>
            <div class="info__inner-wrapper info__inner-wrapper--one">
                <div class="info__item">
                    <h3>
                        Вышивка
                    </h3>
                    <p>
                        Универсальное и долговечное нанесение изображений на ткань. 
                    </p>
                    <span>
                        01
                    </span>
                    <img src="<?php echo THEME_URL; ?>/images/general/about-1.png" alt="img">
                </div>
                <div class="info__item">
                    <h3>
                        Сублимация
                    </h3>
                    <p>
                        Подходит для любых типов изображений с большой площадью печати.
                    </p>
                    <span>
                        02
                    </span>
                    <img src="<?php echo THEME_URL; ?>/images/general/about-2.png" alt="img">
                </div>
                <div class="info__item">
                    <h3>
                        Печать
                    </h3>
                    <p>
                        Экономичный вид печати <br>
                        для больших партий.
                    </p>
                    <span>
                        03
                    </span>
                    <img src="<?php echo THEME_URL; ?>/images/general/about-3.png" alt="img">
                </div>
            </div>
        </div>
    </section>

    <section class="info">
        <div class="container">
            <div class="title__wrapper">
                <h2 class="title">
                    Ткани
                </h2>   
                <div class="info__button-wrapper">
                    <div class="info__button info__button--prev info__button--prev-two"></div>
                    <div class="info__button info__button--next info__button--next-two"></div>
                </div>
                <div class="title__description">
                    <strong>Rk-sport предлагает широкий выбор тканей:</strong>
                    натуральные и синтетические инновационные материалы.
                </div>     
            
            </div>
            <div class="info__inner-wrapper info__inner-wrapper--two">
                <div class="info__item">
                    <h3>
                        Футер
                    </h3>
                    <p>
                        Плотная хлопковая ткань с начесом или без. Выбор из стандартных цветов. Подходит для вышивки или прямой печати.
                    </p>
                    <span>
                        01
                    </span>
                    <img src="<?php echo THEME_URL; ?>/images/general/about-4.png" alt="img">
                </div>
                <div class="info__item">
                    <h3>
                        Эластик
                    </h3>
                    <p>
                        Синтетическая ткань, которая отлично пропускает воздух. Подходит для сублимационной печати, вышивки.
                    </p>
                    <span>
                        02
                    </span>
                    <img src="<?php echo THEME_URL; ?>/images/general/about-5.png" alt="img">
                </div>
                <div class="info__item">
                    <h3>
                        Дюспо
                    </h3>
                    <p>
                        Легкая ткань  из 100% полиэстера.

                    </p>
                    <span>
                        03
                    </span>
                    <img src="<?php echo THEME_URL; ?>/images/general/about-4.png" alt="img">
                </div>
            </div>
        </div>
    </section>
</div>


<div class="foto__wrapper">
    <section class="foto">
        <div class="container">
        <div class="title__wrapper title__wrapper--center">
                <h2 class="title">
                    Фотографии наших клиентов
                </h2>
            </div>
        </div>
        <div class="foto__slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-5.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-2.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-3.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-4.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-5.jpg" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="foto__item">
                            <a data-fancybox="gallery" href="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg">
                                <img src="<?php echo THEME_URL; ?>/images/general/gallery-1.jpg" alt="img">
                            </a>
                        </div>
                    </div>
        
                    
                </div>
                
            </div>
            <div class="foto__button foto__button--prev"></div>
                <div class="foto__button foto__button--next"></div>
        </div>
    </section>
</div>

<div class="facts__wrapper">
    <section class="facts" style="background-image: url('<?php echo THEME_URL; ?>/images/general/facts-bg.jpg');">
        <div class="container">
            <div class="facts__inner-wrapper">
                <div class="facts__elem">
                    <h2 class="facts__title">
                        <strong>
                            6
                        </strong>
                        главных <br> фактов
                    </h2>
                    <p class="facts__description">
                        о нас и нашей продукции
                    </p>
                    <ul class="facts__list facts__list--left">
                        <li>
                            <img src="<?php echo THEME_URL; ?>/images/general/list-1.png" alt="img">
                            <div class="facts__list--number">
                                1
                            </div>
                            <p>
                                <strong>
                                    Уникальный дизайн
                                </strong>
                                продукции  
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo THEME_URL; ?>/images/general/list-2.png" alt="img">
                            <div class="facts__list--number">
                                2
                            </div>
                            <p>
                                <strong>
                                    <span class="size">
                                    6 000+ <br>
                                    </span>
                                команд
                                </strong>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo THEME_URL; ?>/images/general/list-3.png" alt="img">
                            <div class="facts__list--number">
                                3
                            </div>
                            <p>
                                <strong>
                                    Штат 
                                </strong>
                                опытных 
                                <strong>
                                    дизайнеров 
                                </strong>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="facts__elem">
                    <ul class="facts__list facts__list--right">
                        <li>
                            <img src="<?php echo THEME_URL; ?>/images/general/list-4.png" alt="img">
                            <div class="facts__list--number">
                                4
                            </div>
                            <p>
                                <strong>
                                    Собственное производство  
                                </strong>
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo THEME_URL; ?>/images/general/list-5.png" alt="img">
                            <div class="facts__list--number">
                                5
                            </div>
                            <p>
                                <strong>
                                Кратчайшие сроки 
                                </strong>
                                изготовления
                            </p>
                        </li>
                        <li>
                            <img src="<?php echo THEME_URL; ?>/images/general/list-6.png" alt="img">
                            <div class="facts__list--number">
                                6
                            </div>
                            <p>
                                <strong>
                                    Доставка 
                                </strong>
                                в любую точку России
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <img class="img-absolute img-absolute--man" src="<?php echo THEME_URL; ?>/images/general/man.png" alt="img">
    <img class="img-absolute img-absolute--catalog" src="<?php echo THEME_URL; ?>/images/general/catalog.png" alt="img">
    <img class="img-absolute img-absolute--ball" src="<?php echo THEME_URL; ?>/images/general/ball.png" alt="img">
    <div class="download">
        <div class="container">
            <div class="download__inner-wrapper">
                <div class="download__title">
                    <h3>
                        Скачайте каталог 
                    </h3>
                    <p>
                        с ценами и размерным рядом    
                    </p>
                </div>
                <button class="button button--download  modal_open">
                    Получить каталог с ценами
                </button>
            </div>
        </div>
    </div>
</div>


<section class="contacts" style="background-image: url('<?php echo THEME_URL; ?>/images/general/cloud-bg-contacts.png');" >
    <div class="container">
        <div class="contacts__inner-wrapper">
            <div class="contacts__block">
                <div class="title__wrapper">
                    <h2 class="title title--fluid">
                        КОНТАКТЫ
                    </h2>
                </div>
                <div class="contacts__info">
                    <ul class="contacts__list">
                        <li class="contacts__item contacts__item--address">
                            <h4>
                                Адрес:
                            </h4>
                            <p>
                                г. Москва
                            </p>
                        </li>
                        <li class="contacts__item contacts__item--tel">
                            <h4>
                                Тел.:
                            </h4>
                            <p>
                                <a href="tel:+74992454522">
                                    +7 (499) 245-45-22
                                </a>
                            </p>
                        </li>
                        <li class="contacts__item contacts__item--email">
                            <h4>
                                Email:
                            </h4>
                            <p>
                                <a href="mailto:zakaz@rk-sport.ru">
                                    zakaz@rk-sport.ru    
                                </a>
                            </p>
                        </li>
                    </ul>
                    <h3>
                        В других городах:
                    </h3>
                    <ul class="contacts__list">
                        <li class="contacts__item contacts__item--address">
                            <h4>
                                Адрес:
                            </h4>
                            <p>
                                г. Санкт-Петербург
                            </p>
                        </li>
                        <li class="contacts__item contacts__item--tel">
                            <h4>
                                Тел.:
                            </h4>
                            <p>
                                <a href="tel:+78123092702">
                                    +7 (812) 309-27-02
                                </a>
                            </p>
                        </li>
                    </ul>
                    <ul class="contacts__list">
                        <li class="contacts__item contacts__item--address">
                            <h4>
                                Адрес:
                            </h4>
                            <p>
                                г. Минск
                            </p>
                        </li>
                        <li class="contacts__item contacts__item--tel">
                            <h4>
                                Тел.:
                            </h4>
                            <p>
                                <a href="tel:+375296863420">
                                    +375 (29) 686-34-20
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div id="map"></div>
        </div>
        <div class="contacts__link">
            <h3>
                <strong> 
                    Следите за нами <br>
                </strong>
                в социальных сетях 
            </h3>
            <div class="contacts__link--elems">
                <a href="#">
                    Facebook
                </a>
                <a href="#">
                    ВКонтакте
                </a>
            </div>
        </div>
    </div>
</section>
<script src="https://api-maps.yandex.ru/2.1/?apikey=51c072df-bef3-4447-b7e3-de92d6310f8e&lang=ru_RU" type="text/javascript">
</script>
<script>
        ymaps.ready(init);
        function init(){
            var myMap = new ymaps.Map("map", {
                center: [55.44644756622292,37.618576005384874],
                zoom: 16
            });

            var myIcon = new ymaps.GeoObjectCollection({}, {
                iconLayout: 'default#image',
                iconImageHref: '<?php echo THEME_URL; ?>/images/general/myIcon.svg',
                iconImageSize: [46, 63],
                iconImageOffset: [-23, -63]
            });

            myPlacemarkOne = new ymaps.Placemark(
                [55.446503227698706,37.61841916303229],
            );

            myMap.controls.remove('zoomControl');
            myMap.controls.remove('searchControl');
            myMap.controls.remove('geolocationControl');
            myMap.controls.remove('routeButton');
            myMap.controls.remove('trafficControl');
            myMap.controls.remove('typeSelector');
            myMap.controls.remove('fullscreenControl');
            myMap.controls.remove('rulerControl');
            myMap.controls.remove('button');
            
            myIcon
                .add(myPlacemarkOne)
            myMap.geoObjects
                .add(myIcon);
        }
    </script>




<?php get_footer();

