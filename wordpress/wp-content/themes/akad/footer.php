<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akad
 */

?>

<footer class="footer">
  <div class="footer__container">
    <div class="footer__left">
      <?php if(has_nav_menu('primary2')): ?>
            <?php
            wp_nav_menu(array(
              'menu_class'    => 'footer__nav',
              'menu_id'       => 'footer-nav',
              'theme_location'=> 'primary2',
            ));
            ?>
          <?php endif; ?>
    </div>
    <div class="footer__right">
      <p class="footer__right-text"><?php echo get_theme_mod('footer_text'); ?></p>
      <div class="footer__right__soc">
        <a href="https://www.facebook.com" class="footer__right__soc-logo"><i class="<?php echo get_theme_mod('footer_icon1'); ?>" aria-hidden="true"></i></a>
        <a href="https://twitter.com" class="footer__right__soc-logo"><i class="<?php echo get_theme_mod('footer_icon2'); ?>" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com" class="footer__right__soc-logo"><i class="<?php echo get_theme_mod('footer_icon3'); ?>" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com" class="footer__right__soc-logo"><i class="<?php echo get_theme_mod('footer_icon4'); ?>" aria-hidden="true"></i></a>
        <a href="https://www.pinterest.com" class="footer__right__soc-logo"><i class="<?php echo get_theme_mod('footer_icon5'); ?>" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com" class="footer__right__soc-logo"><i class="<?php echo get_theme_mod('footer_icon6'); ?>" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
