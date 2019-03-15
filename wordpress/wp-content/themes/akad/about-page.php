<?php
/*
 * Template name: Page About
 */
get_header();
?>

  <main>
    <div class="we-do">
      <div class="we-do__container">
        <div class="we-do__left">
          <div class="we-do__headline">
            <div class="we-do__headline-greenbox"></div>
            <h2 class="we-do__headline-text"><?php echo get_theme_mod('aboutus_headline'); ?></h2>
          </div>
          <h3 class="we-do-small-headline"><?php echo get_theme_mod('aboutus_small_headline'); ?></h3>
          <p class="we-do-paragraph"><?php echo get_theme_mod('aboutus_text'); ?></p>
        </div>
        <div class="we-do__right">
          <div class="we-do__headline we-do__right-text">
            <div class="we-do__headline-greenbox"></div>
            <h2 class="we-do__headline-text"><?php echo get_theme_mod('whatwedo_headline'); ?></h2>
          </div>
          <h3 class="we-do-small-headline we-do__right-text"><?php echo get_theme_mod('whatwedo_small_headline'); ?></h3>
          <p class="we-do-paragraph we-do__right-text"><?php echo get_theme_mod('whatwedo_text'); ?></p>
        </div>
      </div>
    </div>

    <div class="benefits">
      <div class="benefits__container">
        <div class="benefits__headline">
          <div class="benefits__headline-greenbox"></div>
          <h2 class="benefits__headline-text"><?php echo get_theme_mod('benefits_headline'); ?></h2>
        </div>
        <p class="benefits-paragraph"><?php echo get_theme_mod('benefits_text'); ?></p>
        <div class="benefits__content">
          <?php
            $args = array(
              'post_type'      => 'ak_benefits',
              'posts_per_page' => '9',
            );

            $query = new WP_Query($args);
            if($query->have_posts()) {
              while($query->have_posts()) {
                $query->the_post();
          ?>
          <div class="benefits__content__item">
            <div class="benefits__content__item__top">
              <div class="benefits__content__item__icon">
                <?php if(has_post_thumbnail()) {
                  echo get_the_post_thumbnail(get_the_ID());
                }else {
                  echo '<img src="'.AK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                }; ?>
              </div>
              <h3 class="benefits__content__item-headline"><?php the_title(); ?></h3>
            </div>
            <div class="benefits__content__item-text"><?php the_excerpt(); ?></div>
          </div>
          <?php
            }

            } else {}

            wp_reset_postdata();

          ?>
        </div>
      </div>
    </div>

    <div class="dream-team">
      <div class="dream-team__container">
        <div class="dream-team__headline">
          <div class="dream-team__headline-greenbox"></div>
          <h2 class="dream-team__headline-text"><?php echo get_theme_mod('dreamteam_headline'); ?></h2>
        </div>
        <p class="dream-team-paragraph"><?php echo get_theme_mod('dreamteam_text'); ?></p>
        <div class="dream-team__content">
        <?php
        $args = array(
          'post_type'      => 'ak_team',
          'posts_per_page' => '16',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
          while($query->have_posts()) {
            $query->the_post();
        ?>
          <div class="dream-team__content-person">
            <?php if(has_post_thumbnail()) {
              echo get_the_post_thumbnail(get_the_ID());
            }else {
              echo '<img src="'.AK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
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

    <div class="bar">
      <div class="bar__container">
        <div class="bar__left">
          <p class="bar-text"><?php echo get_theme_mod('bar_text'); ?></p>
        </div>
        <div class="bar__right">
          <a href="#" class="bar-btn">read more</a>
        </div>
      </div>
    </div>

    <div class="testimonials-and-clients">
      <div class="testimonials-and-clients__container">

        <div class="testimonials-and-clients__left">
          <div class="slider">
            <input type="radio" name="switch" id="btn1" checked>
            <input type="radio" name="switch" id="btn2">
            <input type="radio" name="switch" id="btn3">
            <input type="radio" name="switch" id="btn4">

            <div class="switch">
              <label class="switch-btn1" for="btn1"></label>
              <label class="switch-btn2" for="btn2"></label>
              <label class="switch-btn3" for="btn3"></label>
              <label class="switch-btn4" for="btn4"></label>
            </div>

            <div class="slider-inner">
              <div class="slides">
                <?php
                $args = array(
                  'post_type'      => 'ak_slider',
                  'posts_per_page' => '4',
                );

                $query = new WP_Query($args);
                if($query->have_posts()) {
                  while($query->have_posts()) {
                    $query->the_post();
                ?>
                <div class="slide">
                  <?php if(has_post_thumbnail()) {
                    echo get_the_post_thumbnail(get_the_ID());
                  }else {
                    echo '<img src="'.AK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
                  }; ?>
                  <div class="slide-text"><?php the_content(); ?></div>
                  <div class="slide__name">
                    <h2 class="slide__name-text"><?php the_title(); ?></h2>
                  </div>
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

        <div class="testimonials-and-clients__right">
          <?php
          $args = array(
            'post_type'      => 'ak_clients',
            'posts_per_page' => '9',
          );

          $query = new WP_Query($args);
          if($query->have_posts()) {
            while($query->have_posts()) {
              $query->the_post();
          ?>
          <div class="testimonials-and-clients__right__image">
            <?php if(has_post_thumbnail()) {
              echo get_the_post_thumbnail(get_the_ID());
            }else {
              echo '<img src="'.AK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
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

    <?php get_template_part('template-parts/newsletter'); ?>
  </main>

<?php get_footer(); ?>