<?php
/*
 * Template Name: Page Contact
 */
?>

<?php get_header(); ?>

<main>
  <div class="contact">
    <div class="contact__container">
      <div class="contact__left">
        <?php echo do_shortcode('[contact-form-7 id="158" title="Contact Form 2"]'); ?>
        <h3 class="contact__left-headline"><?php echo get_theme_mod('contact_headline'); ?></h3>
        <p class="contact__left-text"><?php echo get_theme_mod('contact_text'); ?></p>
        <p class="contact__left-text-line"><?php echo get_theme_mod('contact_line1'); ?></p>
        <p class="contact__left-text-line"><?php echo get_theme_mod('contact_line2'); ?></p>
        <p class="contact__left-number-line"><?php echo get_theme_mod('contact_number1'); ?></p>
        <p class="contact__left-number-line"><?php echo get_theme_mod('contact_number2'); ?></p>
        <p class="contact__left-email"><?php echo get_theme_mod('contact_email'); ?></p>
        <div class="contact__left__soc">
          <a href="<?php echo get_theme_mod('contact_link1'); ?>" class="contact__left__soc-icon"><i class="<?php echo get_theme_mod('contact_link1_icon'); ?>" aria-hidden="true"></i></a>
          <a href="<?php echo get_theme_mod('contact_link2'); ?>" class="contact__left__soc-icon"><i class="<?php echo get_theme_mod('contact_link2_icon'); ?>" aria-hidden="true"></i></a>
          <a href="<?php echo get_theme_mod('contact_link3'); ?>" class="contact__left__soc-icon"><i class="<?php echo get_theme_mod('contact_link3_icon'); ?>" aria-hidden="true"></i></a>
          <a href="<?php echo get_theme_mod('contact_link4'); ?>" class="contact__left__soc-icon"><i class="<?php echo get_theme_mod('contact_link4_icon'); ?>" aria-hidden="true"></i></a>
          <a href="<?php echo get_theme_mod('contact_link5'); ?>" class="contact__left__soc-icon"><i class="<?php echo get_theme_mod('contact_link5_icon'); ?>" aria-hidden="true"></i></a>
          <a href="<?php echo get_theme_mod('contact_link6'); ?>" class="contact__left__soc-icon"><i class="<?php echo get_theme_mod('contact_link6_icon'); ?>" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="contact__right">
        <iframe src="https://www.google.com/maps/d/embed?mid=19RyxOhbvnf8OQZyUVujZDJEwbJE" style="width: 100%; height: 100%; border: none;"></iframe>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/newsletter'); ?>
</main>

<?php get_footer(); ?>
