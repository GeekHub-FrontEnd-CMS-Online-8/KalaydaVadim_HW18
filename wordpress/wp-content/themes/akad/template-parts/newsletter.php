<?php
?>

<div class="newsletter">
  <div class="newsletter__container">
    <div class="newsletter__left">
      <p class="newsletter__left-text"><?php echo get_theme_mod('newsletter_left_text'); ?></p>
      <a href="#" class="newsletter__left-btn">Get in touch</a>
    </div>
    <div class="newsletter__right">
      <div class="newsletter__right__content">
        <div class="newsletter__right__content__container">
          <h3 class="newsletter__right__content-headline"><?php echo get_theme_mod('newsletter_right_headline'); ?></h3>
          <p class="newsletter__right__content-text"><?php echo get_theme_mod('newsletter_right_text'); ?></p>
          <?php echo do_shortcode('[contact-form-7 id="88" title="Contact form"]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>


