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
                <div class="models-slider__color">
                  <?php $color = get_sub_field( 'color' ); ?>
                  <span style="background-color: <?php echo $color['color_1']?>;" class="models-slider__color-item"></span>
                  <span style="background-color: <?php echo $color['color_2']?>;" class="models-slider__color-item"></span>
                </div>
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