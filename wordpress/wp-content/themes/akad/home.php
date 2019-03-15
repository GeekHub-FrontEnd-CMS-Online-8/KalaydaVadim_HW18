<?php

get_header();

?>

<main>
  <div class="history">
    <div class="history__container">
      <div class="history__left">
        <img src="<?php echo get_theme_mod('history_image'); ?>" alt="Image">
      </div>
      <div class="history__right">
        <div class="history__right__headline">
          <div class="history__right__headline-greenbox"></div>
          <h2 class="history__right__headline-text"><?php echo get_theme_mod('history_headline'); ?></h2>
        </div>
        <p class="history__right-text"><?php echo get_theme_mod('history_text'); ?></p>
        <div class="history__right__bottom">
          <a href="#" class="history__right__bottom-btn">Read More</a>
        </div>
      </div>
    </div>
  </div>

  <div class="whychoose">
    <div class="whychoose__container">
      <div class="whychoose__headline">
        <div class="whychoose__headline-greenbox"></div>
        <h2 class="whychoose__headline-text"><?php echo get_theme_mod('whychoose_headline'); ?></h2>
      </div>
      <p class="whychoose-paragraph"><?php echo get_theme_mod('whychoose_text'); ?></p>
      <div class="whychoose__content">
        <div class="whychoose__left">
          <div class="whychoose__left__container">
            <div class="whychoose__left__item">
              <i class="<?php echo get_theme_mod('whychoose_left_first_item_icon'); ?>"></i>
              <h3 class="whychoose__left__item-headline"><?php echo get_theme_mod('whychoose_left_first_item_headline'); ?></h3>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_first_item_line1'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_first_item_line2'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_first_item_line3'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_first_item_line4'); ?></p>
            </div>
            <div class="whychoose__left__item">
              <i class="<?php echo get_theme_mod('whychoose_left_second_item_icon'); ?>" aria-hidden="true"></i>
              <h3 class="whychoose__left__item-headline"><?php echo get_theme_mod('whychoose_left_second_item_headline'); ?></h3>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_second_item_line1'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_second_item_line2'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_second_item_line3'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_second_item_line4'); ?></p>
            </div>
            <div class="whychoose__left__item">
              <i class="<?php echo get_theme_mod('whychoose_left_third_item_icon'); ?>" aria-hidden="true"></i>
              <h3 class="whychoose__left__item-headline"><?php echo get_theme_mod('whychoose_left_third_item_headline'); ?></h3>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_third_item_line1'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_third_item_line2'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_third_item_line3'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_third_item_line4'); ?></p>
            </div>
            <div class="whychoose__left__item">
              <i class="<?php echo get_theme_mod('whychoose_left_fourth_item_icon'); ?>" aria-hidden="true"></i>
              <h3 class="whychoose__left__item-headline"><?php echo get_theme_mod('whychoose_left_fourth_item_headline'); ?></h3>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_fourth_item_line1'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_fourth_item_line2'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_fourth_item_line3'); ?></p>
              <p class="whychoose__left__item-line"><?php echo get_theme_mod('whychoose_left_fourth_item_line4'); ?></p>
            </div>
          </div>
        </div>
        <div class="whychoose__right">
          <img src="<?php echo AK_IMG_DIR; ?>/whychoose-img.png" alt="Image">
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio">
    <div class="portfolio__container">
      <div class="portfolio__headline">
        <div class="portfolio__headline-greenbox"></div>
        <h2 class="portfolio__headline-text"><?php echo get_theme_mod('portfolio_headline'); ?></h2>
      </div>
      <p class="portfolio-paragraph"><?php echo get_theme_mod('portfolio_text'); ?></p>
      <div class="portfolio__content">
        <div class="portfolio__left">
          <h3 class="portfolio__left-headline"><?php echo get_theme_mod('portfolio_sidebar_headline'); ?></h3>
          <ul class="portfolio__left__categories">
            <li class="portfolio__left__categories-list"><a href="#">All</a></li>
            <li class="portfolio__left__categories-list"><a href="#">WebDesign</a></li>
            <li class="portfolio__left__categories-list"><a href="#">Graphic Design</a></li>
            <li class="portfolio__left__categories-list"><a href="#">Fashion</a></li>
            <li class="portfolio__left__categories-list"><a href="#">Logo Design</a></li>
            <li class="portfolio__left__categories-list"><a href="#">Adversting</a></li>
          </ul>
        </div>
        <div class="portfolio__right">
          <div class="portfolio__right__posts">
            <?php
            $args = array(
              'post_type'      => 'ak_portfolio_posts',
              'posts_per_page' => '12',
            );

            $query = new WP_Query($args);
            if($query->have_posts()) {
              while($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="portfolio__right__posts__item">
                  <?php if(has_post_thumbnail()) {
                    echo get_the_post_thumbnail(get_the_ID());
                  }else {
                    echo '<img src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                  }; ?>
                </div>
                <?php
              }

            } else {}

            wp_reset_postdata();

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/newsletter'); ?>
</main>

<?php
get_footer();
?>
