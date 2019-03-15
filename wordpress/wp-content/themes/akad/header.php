<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akad
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
  <?php if(is_page('blog')) {  ?>
    <header class="header-blog">
  <?php } ?>

  <?php if(is_page('about')) {  ?>
    <header class="header-about">
  <?php } ?>

  <?php if(is_404()) {  ?>
    <header class="header-error">
  <?php } ?>

  <?php if(is_search()) {  ?>
    <header class="header-blog">
  <?php } ?>

  <?php if(is_home()) {  ?>
    <header class="header">
  <?php } ?>

    <div class="header__container">
      <div class="header__top">

        <div class="header__top__left">
          <a href="<?php echo home_url(); ?>" class="header__top__left-logo"><?php echo get_theme_mod('site_name'); ?></a>
        </div>

        <div class="header__top__right">
          <?php if(has_nav_menu('primary')): ?>
            <?php
            wp_nav_menu(array(
              'menu_class'    => 'header__nav',
              'menu_id'       => 'nav',
              'theme_location'=> 'primary',
            ));
            ?>
          <?php endif; ?>
          <div class="nav-toggle-btn" id="nav-toggle-btn" onclick="openMenu(); openMenuClickFunc()">
            <i class="fa fa-bars nav-toggle-btn-open" id="nav-toggle-btn-open" aria-hidden="true"></i>
          </div>
        </div>
      </div>

      <?php if(is_home()) { ?>
        <div class="header__content">
          <p class="header__content-toptext">
            We're
          </p>
          <h2 class="header__content-headline"><?php echo get_theme_mod('home_header_headline'); ?></h2>
          <p class="header__content-bottomtext">
            <?php echo get_theme_mod('home_header_text'); ?>
          </p>
        </div>
      <?php } ?>

      <?php if(is_page('about')) { ?>
        <div class="header__content">
          <h2 class="header__content-headline">
            <?php the_title(); ?>
          </h2>
          <p class="header__content-text">home / <?php the_title(); ?></p>
        </div>
      <?php } ?>

      <?php if(is_page('blog')) { ?>
        <div class="header__content">
          <h2 class="header__content-headline">
            <?php the_title(); ?>
          </h2>
          <p class="header__content-text">home / <?php the_title(); ?></p>
        </div>
      <?php } ?>

      <?php if(is_search()) { ?>
        <div class="header__content">
          <h2 class="header__content-headline">
            Search Result
          </h2>
          <p class="header__content-text">home / <?php the_title(); ?></p>
        </div>
      <?php } ?>

    </div>
  </header>

