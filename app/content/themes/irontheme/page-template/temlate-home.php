<?php
/*
* Template Name: Home
*/
get_header(); ?>

<?php
if ( have_rows('home_layout') ):
  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'hero' ): ?>
    <div class="first-screen__background" style="background-image: url('<?php the_sub_field( 'bg' ); ?>')">
     <section class="first-screen" id="hero" >
        <div class="container">
          <div class="first-screen__inner-wrapper">
            <div class="first-screen__description">
              <?php $subtitle = get_sub_field( 'subtitle' );
              $title = get_sub_field( 'title' );
              $suptitle = get_sub_field( 'suptitle' );

              if ($suptitle): ?>
                <h3><?php echo $suptitle; ?></h3>
              <?php endif; ?>
              <?php if ($title): ?>
                <h1><?php echo $title; ?></h1>
              <?php endif; ?>
              <?php if ($subtitle): ?>
                <h2><?php echo $subtitle; ?></h2>
              <?php endif; ?>
            </div>

            <?php $form = get_sub_field( 'form' );
            if ($form):
              echo do_shortcode('[contact-form-7 id="'. $form . '" title="" html_class="first-screen__form form"]');
            endif; ?>
          </div>
        </div>
      </section>

    <?php elseif ( get_row_layout() == 'clients' ): ?>

      <section class="clients" id="clients">
        <div class="container">
          <div class="title__wrapper">
            <?php $title = get_sub_field( 'title' );
            $list = get_sub_field( 'list' );
            if ($title): ?>
              <h2 class="title"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($list): ?>
              <div class="clients__button-wrapper">
                <div class="swiper-button-prev clients__button clients__button--prev"></div>
                <div class="swiper-button-next clients__button clients__button--next"></div>
              </div>
            <?php endif; ?>
          </div>

          <?php if (have_rows( 'list' )): ?>
            <div class="clients__slider">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php while (have_rows( 'list' )): the_row(); ?>
                    <div class="swiper-slide">
                      <?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'medium' ); ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </section>
    </div>
    <?php endif;
  endwhile;

endif; ?>

<?php $products = get_any_post( 'product', -1 );
if ($products->have_posts()): ?>
  <section class="models" id="models">
    <div class="container">
      <div class="title__wrapper">
        <h2 class="title">модели костюмов</h2>
      </div>
      <div class="models__slider">
        <?php while ($products->have_posts()): $products->the_post(); ?>
            <div class="models__item">
                <h3><?php the_title(); ?></h3>
                <?php the_field( 'short_descr' ); ?>

                <?php if (have_rows( 'models' )): ?>
                <div class="models__img-wrapper">
                    <div class="models-slider__slider">
                    <?php
                    while (have_rows( 'models' )): the_row(); ?>
                        <div class="models-slider__item">
                        <?php echo wp_get_attachment_image( get_sub_field( 'photo' ), 'medium' ); ?>
                        </div>
                    <?php endwhile; ?>
                    </div>
                    <div class="models__img">
                    <a href="#">
                        <img src="#" alt="">
                    </a>
                    </div>
                </div>


                <h4>Выбор цвета:</h4>
                <div class="models-slider__nav">
                    <?php while (have_rows( 'models' )): the_row(); ?>
                    <div class="models-slider__elem">
                        <ul>
                        <?php while (have_rows( 'colors' )): the_row(); ?>
                            <li data-colorUrl="<?php the_sub_field( 'photo' ); ?>">
                            <img  src="<?php the_sub_field( 'color' ); ?>" alt="">
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

                <div class="models__price">
                от <strong><?php the_field( 'price' ); ?></strong> ₽
                </div>
                <button class="button modal_open">заказать костюм</button>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <button class="button button--blue read-more">
        показать еще
      </button>
    </div>
  </section>
<?php endif; ?>

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

        <?php echo do_shortcode( '[contact-form-7 id="87" title="Контактная форма 1_copy" html_class="order-form__form form form--order"]' ); ?>
      </div>
    </div>
  </section>
  <div class="info__wrapper" id="variants-print" style="background-image: url('<?php echo THEME_URL; ?>/images/general/about-bg.png')">
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

<?php
if ( have_rows('home_layout') ):
  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'gallery' ): ?>

      <div class="foto__wrapper" id="gallery">
        <section class="foto">
          <div class="container">
            <div class="title__wrapper title__wrapper--center">
              <?php $title = get_sub_field( 'title' );
              if ($title): ?>
                <h2 class="title"><?php echo $title; ?></h2>
              <?php endif; ?>
            </div>
          </div>

          <?php $gallery = get_sub_field( 'gallery' );
          if ($gallery): ?>
            <div class="foto__slider">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php foreach ($gallery as $item): ?>
                    <div class="swiper-slide">
                      <div class="foto__item">
                        <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url( $item, 'full' ); ?>">
                          <?php echo wp_get_attachment_image( $item, 'large' ); ?>
                        </a>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>

              </div>
              <div class="foto__button foto__button--prev"></div>
              <div class="foto__button foto__button--next"></div>
            </div>
          <?php endif; ?>
        </section>
      </div>

    <?php endif;
  endwhile;

endif; ?>

  <div class="facts__wrapper" id="about">
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
          <button class="button button--download modal_open">
            Получить каталог с ценами
          </button>
        </div>
      </div>
    </div>
  </div>


  <section class="contacts" id="contacts" style="background-image: url('<?php echo THEME_URL; ?>/images/general/cloud-bg-contacts.png');" >
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
              <?php $address = get_field( 'address', 'option' );
              $phone = get_field( 'phone', 'option' );
              $email = get_field( 'email', 'option' );
              if ($address): ?>
                <li class="contacts__item contacts__item--address">
                  <h4>
                    Адрес:
                  </h4>
                  <p>
                    <?php echo $address; ?>
                  </p>
                </li>
              <?php endif; ?>
              <?php if ($phone): ?>
                <li class="contacts__item contacts__item--tel">
                  <h4>
                    Тел.:
                  </h4>
                  <p>
                    <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>">
                      <?php echo $phone; ?>
                    </a>
                  </p>
                </li>
              <?php endif; ?>
              <?php if ($email): ?>
                <li class="contacts__item contacts__item--email">
                  <h4>
                    Email:
                  </h4>
                  <p>
                    <a href="mailto:<?php echo $email; ?>">
                      <?php echo $email; ?>
                    </a>
                  </p>
                </li>
              <?php endif; ?>
            </ul>

            <?php if (have_rows( 'additional_address', 'option' )): ?>
              <h3>
                В других городах:
              </h3>
              <?php while (have_rows( 'additional_address', 'option' )): the_row(); ?>
                <ul class="contacts__list">
                  <li class="contacts__item contacts__item--address">
                    <h4>
                      Адрес:
                    </h4>
                    <p><?php echo get_sub_field( 'address' ); ?></p>
                  </li>
                  <li class="contacts__item contacts__item--tel">
                    <h4>
                      Тел.:
                    </h4>
                    <p>
                      <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_sub_field( 'phone' ) ); ?>">
                        <?php echo get_sub_field( 'phone' ); ?>
                      </a>
                    </p>
                  </li>
                </ul>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>
        <div id="map"></div>
      </div>
      <?php $fb = get_field( 'facebook', 'option' );
      $vk = get_field( 'vk', 'option' );
      if ($fb || $vk): ?>
        <div class="contacts__link">
          <h3>
            <strong>
              Следите за нами <br>
            </strong>
            в социальных сетях
          </h3>
          <div class="contacts__link--elems">
            <?php if ($fb): ?>
              <a href="<?php echo esc_url( $fb ); ?>" target="_blank">
                Instagram
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php $location = get_field( 'location', 'option' );
if ($location['lat'] && $location['lng']): ?>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=51c072df-bef3-4447-b7e3-de92d6310f8e&lang=ru_RU" type="text/javascript"></script>
  <script>
    ymaps.ready(init);
    function init(){
      var myMap = new ymaps.Map("map", {
        center: [<?php echo esc_js( $location['lat'] ); ?>, <?php echo esc_js( $location['lng'] ); ?>],
        zoom: 16
      });

      var myIcon = new ymaps.GeoObjectCollection({}, {
        iconLayout: 'default#image',
        iconImageHref: '<?php echo THEME_URL; ?>/images/general/myIcon.svg',
        iconImageSize: [46, 63],
        iconImageOffset: [-23, -63]
      });

      myPlacemarkOne = new ymaps.Placemark(
        [<?php echo esc_js( $location['lat'] ); ?>, <?php echo esc_js( $location['lng'] ); ?>],
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
        .add(myPlacemarkOne);
      myMap.geoObjects
        .add(myIcon);
    }
  </script>
<?php endif; ?>

<?php get_footer();