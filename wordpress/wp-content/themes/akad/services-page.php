<?php
/*
 * Template Name: Page Services
 */
?>
<?php get_header(); ?>

<main>
  <div class="whatwedo">
    <div class="whatwedo__container">
      <div class="whatwedo__headline">
        <div class="whatwedo__headline-greenbox"></div>
        <h2 class="whatwedo__headline-text"><?php echo get_theme_mod('services_what_we_do_top_headline'); ?></h2>
      </div>
      <p class="whatwedo-text"><?php echo get_theme_mod('services_what_we_do_top_text'); ?></p>
      <div class="whatwedo__content">
        <div class="whatwedo__content__left">
          <p class="whatwedo__content__left-text"><?php echo get_theme_mod('services_what_we_do_left_text'); ?></p>
          <div class="whatwedo__content__left__pluses">
            <div class="whatwedo__content__left__pluses__column">
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column1_item1'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column1_item2'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column1_item3'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column1_item4'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column1_item5'); ?></p>
            </div>
            <div class="whatwedo__content__left__pluses__column2">
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column2_item1'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column2_item2'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column2_item3'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column2_item4'); ?></p>
              <p class="whatwedo__content__left__pluses__column-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_what_we_do_left_column2_item5'); ?></p>
            </div>
          </div>
        </div>
        <div class="whatwedo__content__right">
          <img src="<?php echo get_theme_mod('services_what_we_do_right_image'); ?>" alt="Image">
        </div>
      </div>
    </div>
  </div>

  <div class="benefits">
    <div class="benefits__container">
      <div class="benefits__item">
        <div class="benefits__headline-img">
          <div class="benefits__headline-img-greenbox"></div>
          <p class="benefits__headline-img-logo"><i class="<?php echo get_theme_mod('services_benefits_item1_logo'); ?>"></i></p>
        </div>
        <h3 class="benefits__item-headline"><?php echo get_theme_mod('services_benefits_item1_headline'); ?></h3>
        <p class="benefits__item-text"><?php echo get_theme_mod('services_benefits_item1_text'); ?></p>
      </div>
      <div class="benefits__item">
        <div class="benefits__headline-img">
          <div class="benefits__headline-img-greenbox"></div>
          <p class="benefits__headline-img-logo"><i class="<?php echo get_theme_mod('services_benefits_item2_logo'); ?>"></i></p>
        </div>
        <h3 class="benefits__item-headline"><?php echo get_theme_mod('services_benefits_item2_headline'); ?></h3>
        <p class="benefits__item-text"><?php echo get_theme_mod('services_benefits_item2_text'); ?></p>
      </div>
      <div class="benefits__item">
        <div class="benefits__headline-img">
          <div class="benefits__headline-img-greenbox"></div>
          <p class="benefits__headline-img-logo"><i class="<?php echo get_theme_mod('services_benefits_item3_logo'); ?>"></i></p>
        </div>
        <h3 class="benefits__item-headline"><?php echo get_theme_mod('services_benefits_item3_headline'); ?></h3>
        <p class="benefits__item-text"><?php echo get_theme_mod('services_benefits_item3_text'); ?></p>
      </div>
      <div class="benefits__item">
        <div class="benefits__headline-img">
          <div class="benefits__headline-img-greenbox"></div>
          <p class="benefits__headline-img-logo"><i class="<?php echo get_theme_mod('services_benefits_item4_logo'); ?>"></i></p>
        </div>
        <h3 class="benefits__item-headline"><?php echo get_theme_mod('services_benefits_item4_headline'); ?></h3>
        <p class="benefits__item-text"><?php echo get_theme_mod('services_benefits_item4_text'); ?></p>
      </div>
    </div>
  </div>

  <div class="pricing">
    <div class="pricing__container">
      <div class="pricing__headline">
        <div class="pricing__headline-greenbox"></div>
        <h2 class="pricing__headline-text"><?php echo get_theme_mod('services_pricing_top_headline'); ?></h2>
      </div>
      <p class="pricing-text"><?php echo get_theme_mod('services_pricing_top_text'); ?></p>
      <div class="pricing__plans">
        <div class="pricing__plans__plan">
          <h3 class="pricing__plans__plan-headline"><?php echo get_theme_mod('services_pricing_plan1_headline'); ?></h3>
          <div class="pricing__plans__plan__price">
            <p class="pricing__plans__plan__price-text"><?php echo get_theme_mod('services_pricing_plan1_price'); ?></p>
          </div>
          <div class="pricing__plans__plan__pluses">
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan1_item1'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan1_item2'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan1_item3'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan1_item4'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan1_item5'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan1_item6'); ?></p>
          </div>
          <a href="#" class="pricing__plans__plan-btn">get started</a>
        </div>
        <div class="pricing__plans__plan">
          <h3 class="pricing__plans__plan-headline"><?php echo get_theme_mod('services_pricing_plan2_headline'); ?></h3>
          <div class="pricing__plans__plan__price">
            <p class="pricing__plans__plan__price-text"><?php echo get_theme_mod('services_pricing_plan2_price'); ?></p>
          </div>
          <div class="pricing__plans__plan__pluses">
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan2_item1'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan2_item2'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan2_item3'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan2_item4'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan2_item5'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan2_item6'); ?></p>
          </div>
          <a href="#" class="pricing__plans__plan-btn">get started</a>
        </div>
        <div class="pricing__plans__plan">
          <h3 class="pricing__plans__plan-headline"><?php echo get_theme_mod('services_pricing_plan3_headline'); ?></h3>
          <div class="pricing__plans__plan__price">
            <p class="pricing__plans__plan__price-text"><?php echo get_theme_mod('services_pricing_plan3_price'); ?></p>
          </div>
          <div class="pricing__plans__plan__pluses">
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan3_item1'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan3_item2'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan3_item3'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan3_item4'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan3_item5'); ?></p>
            <p class="pricing__plans__plan__pluses-item"><i class="fas fa-check-square"></i><?php echo get_theme_mod('services_pricing_plan3_item6'); ?></p>
          </div>
          <a href="#" class="pricing__plans__plan-btn">get started</a>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/newsletter'); ?>
</main>

<?php get_footer(); ?>
