<?php
/**
 * Akad Theme Customizer
 *
 * @package Akad
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function akad_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'akad_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'akad_customize_partial_blogdescription',
		) );
	}
  // site name
  $wp_customize->add_section( 'site_name_section' , array(
    'title'      => __( 'Site Name Section', 'akad' ),
    'priority'   => 30,
  ) );
  $wp_customize->add_setting( 'site_name' , array(
    'default'   => 'AKAD.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_name', array(
    'label'      => __( 'Site Name', 'akad' ),
    'section'    => 'site_name_section',
    'settings'   => 'site_name',
  ) ) );

//(PAGE: HOME) HEADER

  $wp_customize->add_section( 'home_header_section' , array(
    'title'      => __( '(PAGE: HOME) Header Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) HEADER HEADLINE
  $wp_customize->add_setting( 'home_header_headline' , array(
    'default'   => 'creative agency',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_header_headline', array(
    'label'      => __( 'Header Headline', 'akad' ),
    'section'    => 'home_header_section',
    'settings'   => 'home_header_headline',
  ) ) );
  // (PAGE: HOME) HEADER TEXT
  $wp_customize->add_setting( 'home_header_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_header_text', array(
    'label'      => __( 'Header Text', 'akad' ),
    'section'    => 'home_header_section',
    'settings'   => 'home_header_text',
  ) ) );

  //(PAGE: HOME) History

  $wp_customize->add_section( 'history_section' , array(
    'title'      => __( '(PAGE: HOME) History Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) HISTORY LEFT IMAGE
  $wp_customize->add_setting( 'history_image' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'history_image', array(
    'label'      => __( 'History Left Image', 'akad' ),
    'section'    => 'history_section',
    'settings'   => 'history_image',
  ) ) );
  // (PAGE: HOME) HISTORY HEADLINE
  $wp_customize->add_setting( 'history_headline' , array(
    'default'   => 'HISTORY OF AGENCY',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'history_headline', array(
    'label'      => __( 'History Headline', 'akad' ),
    'section'    => 'history_section',
    'settings'   => 'history_headline',
  ) ) );
  // (PAGE: HOME) HISTORY TEXT
  $wp_customize->add_setting( 'history_text' , array(
    'default'   => 'Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi modi tempora incidunt ut labore.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'history_text', array(
    'label'      => __( 'History Text Text', 'akad' ),
    'section'    => 'history_section',
    'settings'   => 'history_text',
  ) ) );

  //(PAGE: HOME) WHY CHOOSE US

  $wp_customize->add_section( 'whychoose_section' , array(
    'title'      => __( '(PAGE: HOME) Why Choose Us Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) WHY CHOOSE US RIGHT IMAGE
  $wp_customize->add_setting( 'whychoose_image' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'whychoose_image', array(
    'label'      => __( 'WHY CHOOSE US Right Image', 'akad' ),
    'section'    => 'whychoose_section',
    'settings'   => 'whychoose_image',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US HEADLINE
  $wp_customize->add_setting( 'whychoose_headline' , array(
    'default'   => 'WHY CHOOSE US',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_headline', array(
    'label'      => __( 'Header Headline', 'akad' ),
    'section'    => 'whychoose_section',
    'settings'   => 'whychoose_headline',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US TEXT
  $wp_customize->add_setting( 'whychoose_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_text', array(
    'label'      => __( 'History Text Text', 'akad' ),
    'section'    => 'whychoose_section',
    'settings'   => 'whychoose_text',
  ) ) );


  //(PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM

  $wp_customize->add_section( 'whychoose_left_part_item1_section' , array(
    'title'      => __( '(PAGE: HOME) Why Choose Us Left Part First Item', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM ICON
  $wp_customize->add_setting( 'whychoose_left_first_item_icon' , array(
    'default'   => 'fas fa-infinity',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_first_item_icon', array(
    'label'      => __( 'Item 1 LOGO (FONT AWESOME CODE)', 'akad' ),
    'section'    => 'whychoose_left_part_item1_section',
    'settings'   => 'whychoose_left_first_item_icon',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM HEADLINE
  $wp_customize->add_setting( 'whychoose_left_first_item_headline' , array(
    'default'   => 'unlimited options',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_first_item_headline', array(
    'label'      => __( 'Left Part Item 1 Headline', 'akad' ),
    'section'    => 'whychoose_left_part_item1_section',
    'settings'   => 'whychoose_left_first_item_headline',
  ) ) );
// (PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM LINE 1
  $wp_customize->add_setting( 'whychoose_left_first_item_line1' , array(
    'default'   => 'Branding',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_first_item_line1', array(
    'label'      => __( 'Left Part Item 1 LINE 1', 'akad' ),
    'section'    => 'whychoose_left_part_item1_section',
    'settings'   => 'whychoose_left_first_item_line1',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM LINE 2
  $wp_customize->add_setting( 'whychoose_left_first_item_line2' , array(
    'default'   => 'Design & Copywriting',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_first_item_line2', array(
    'label'      => __( 'Left Part Item 1 LINE 2', 'akad' ),
    'section'    => 'whychoose_left_part_item1_section',
    'settings'   => 'whychoose_left_first_item_line2',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM LINE 3
  $wp_customize->add_setting( 'whychoose_left_first_item_line3' , array(
    'default'   => 'Concept development',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_first_item_line3', array(
    'label'      => __( 'Left Part Item 1 LINE 3', 'akad' ),
    'section'    => 'whychoose_left_part_item1_section',
    'settings'   => 'whychoose_left_first_item_line3',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FIRST ITEM LINE 4
  $wp_customize->add_setting( 'whychoose_left_first_item_line4' , array(
    'default'   => 'User Experience',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_first_item_line4', array(
    'label'      => __( 'Left Part Item 1 LINE 4', 'akad' ),
    'section'    => 'whychoose_left_part_item1_section',
    'settings'   => 'whychoose_left_first_item_line4',
  ) ) );


  //(PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM

  $wp_customize->add_section( 'whychoose_left_part_item2_section' , array(
    'title'      => __( '(PAGE: HOME) Why Choose Us Left Part Second Item', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM ICON
  $wp_customize->add_setting( 'whychoose_left_second_item_icon' , array(
    'default'   => 'fa fa-random',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_second_item_icon', array(
    'label'      => __( 'Item 2 LOGO (FONT AWESOME CODE)', 'akad' ),
    'section'    => 'whychoose_left_part_item2_section',
    'settings'   => 'whychoose_left_second_item_icon',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM HEADLINE
  $wp_customize->add_setting( 'whychoose_left_second_item_headline' , array(
    'default'   => 'DESIGN & DEVELOPMENT',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_second_item_headline', array(
    'label'      => __( 'Left Part Item 2 Headline', 'akad' ),
    'section'    => 'whychoose_left_part_item2_section',
    'settings'   => 'whychoose_left_second_item_headline',
  ) ) );
// (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM LINE 1
  $wp_customize->add_setting( 'whychoose_left_second_item_line1' , array(
    'default'   => 'Information architecture',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_second_item_line1', array(
    'label'      => __( 'Left Part Item 2 LINE 1', 'akad' ),
    'section'    => 'whychoose_left_part_item2_section',
    'settings'   => 'whychoose_left_second_item_line1',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM LINE 2
  $wp_customize->add_setting( 'whychoose_left_second_item_line2' , array(
    'default'   => 'Interface design',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_second_item_line2', array(
    'label'      => __( 'Left Part Item 2 LINE 2', 'akad' ),
    'section'    => 'whychoose_left_part_item2_section',
    'settings'   => 'whychoose_left_second_item_line2',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM LINE 3
  $wp_customize->add_setting( 'whychoose_left_second_item_line3' , array(
    'default'   => 'Product Design',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_second_item_line3', array(
    'label'      => __( 'Left Part Item 2 LINE 3', 'akad' ),
    'section'    => 'whychoose_left_part_item2_section',
    'settings'   => 'whychoose_left_second_item_line3',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM LINE 4
  $wp_customize->add_setting( 'whychoose_left_second_item_line4' , array(
    'default'   => 'Integrated ad Companies',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_second_item_line4', array(
    'label'      => __( 'Left Part Item 2 LINE 4', 'akad' ),
    'section'    => 'whychoose_left_part_item2_section',
    'settings'   => 'whychoose_left_second_item_line4',
  ) ) );


  //(PAGE: HOME) WHY CHOOSE US LEFT PART THIRD ITEM

  $wp_customize->add_section( 'whychoose_left_part_item3_section' , array(
    'title'      => __( '(PAGE: HOME) Why Choose Us Left Part Third Item', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART SECOND ITEM ICON
  $wp_customize->add_setting( 'whychoose_left_third_item_icon' , array(
    'default'   => 'fa fa-shopping-cart',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_third_item_icon', array(
    'label'      => __( 'Item 3 LOGO (FONT AWESOME CODE)', 'akad' ),
    'section'    => 'whychoose_left_part_item3_section',
    'settings'   => 'whychoose_left_third_item_icon',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART THIRD ITEM HEADLINE
  $wp_customize->add_setting( 'whychoose_left_third_item_headline' , array(
    'default'   => 'e-commerce',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_third_item_headline', array(
    'label'      => __( 'Left Part Item 3 Headline', 'akad' ),
    'section'    => 'whychoose_left_part_item3_section',
    'settings'   => 'whychoose_left_third_item_headline',
  ) ) );
// (PAGE: HOME) WHY CHOOSE US LEFT PART THIRD ITEM LINE 1
  $wp_customize->add_setting( 'whychoose_left_third_item_line1' , array(
    'default'   => 'Prototyping',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_third_item_line1', array(
    'label'      => __( 'Left Part Item 3 LINE 1', 'akad' ),
    'section'    => 'whychoose_left_part_item3_section',
    'settings'   => 'whychoose_left_third_item_line1',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART THIRD ITEM LINE 2
  $wp_customize->add_setting( 'whychoose_left_third_item_line2' , array(
    'default'   => 'Technical Consulting',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_third_item_line2', array(
    'label'      => __( 'Left Part Item 3 LINE 2', 'akad' ),
    'section'    => 'whychoose_left_part_item3_section',
    'settings'   => 'whychoose_left_third_item_line2',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART THIRD ITEM LINE 3
  $wp_customize->add_setting( 'whychoose_left_third_item_line3' , array(
    'default'   => 'Web applications',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_third_item_line3', array(
    'label'      => __( 'Left Part Item 3 LINE 3', 'akad' ),
    'section'    => 'whychoose_left_part_item3_section',
    'settings'   => 'whychoose_left_third_item_line3',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART THIRD ITEM LINE 4
  $wp_customize->add_setting( 'whychoose_left_third_item_line4' , array(
    'default'   => 'Quality testing',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_third_item_line4', array(
    'label'      => __( 'Left Part Item 3 LINE 4', 'akad' ),
    'section'    => 'whychoose_left_part_item3_section',
    'settings'   => 'whychoose_left_third_item_line4',
  ) ) );


  //(PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM

  $wp_customize->add_section( 'whychoose_left_part_item4_section' , array(
    'title'      => __( '(PAGE: HOME) Why Choose Us Left Part Fourth Item', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM ICON
  $wp_customize->add_setting( 'whychoose_left_fourth_item_icon' , array(
    'default'   => 'fa fa-sliders',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_fourth_item_icon', array(
    'label'      => __( 'Item 4 LOGO (FONT AWESOME CODE)', 'akad' ),
    'section'    => 'whychoose_left_part_item4_section',
    'settings'   => 'whychoose_left_fourth_item_icon',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM HEADLINE
  $wp_customize->add_setting( 'whychoose_left_fourth_item_headline' , array(
    'default'   => 'CUSTOMIZABLE DESIGN',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_fourth_item_headline', array(
    'label'      => __( 'Left Part Item 4 Headline', 'akad' ),
    'section'    => 'whychoose_left_part_item4_section',
    'settings'   => 'whychoose_left_fourth_item_headline',
  ) ) );
// (PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM LINE 1
  $wp_customize->add_setting( 'whychoose_left_fourth_item_line1' , array(
    'default'   => 'Information architecture',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_fourth_item_line1', array(
    'label'      => __( 'Left Part Item 4 LINE 1', 'akad' ),
    'section'    => 'whychoose_left_part_item4_section',
    'settings'   => 'whychoose_left_fourth_item_line1',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM LINE 2
  $wp_customize->add_setting( 'whychoose_left_fourth_item_line2' , array(
    'default'   => 'Interface design',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_fourth_item_line2', array(
    'label'      => __( 'Left Part Item 4 LINE 2', 'akad' ),
    'section'    => 'whychoose_left_part_item4_section',
    'settings'   => 'whychoose_left_fourth_item_line2',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM LINE 3
  $wp_customize->add_setting( 'whychoose_left_fourth_item_line3' , array(
    'default'   => 'Product Design',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_fourth_item_line3', array(
    'label'      => __( 'Left Part Item 4 LINE 3', 'akad' ),
    'section'    => 'whychoose_left_part_item4_section',
    'settings'   => 'whychoose_left_fourth_item_line3',
  ) ) );
  // (PAGE: HOME) WHY CHOOSE US LEFT PART FOURTH ITEM LINE 4
  $wp_customize->add_setting( 'whychoose_left_fourth_item_line4' , array(
    'default'   => 'Integrated ad Companies',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whychoose_left_fourth_item_line4', array(
    'label'      => __( 'Left Part Item 4 LINE 4', 'akad' ),
    'section'    => 'whychoose_left_part_item4_section',
    'settings'   => 'whychoose_left_fourth_item_line4',
  ) ) );


  //(PAGE: HOME) PORTFOLIO

  $wp_customize->add_section( 'portfolio_section' , array(
    'title'      => __( '(PAGE: HOME) PORTFOLIO', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: HOME) PORTFOLIO HEADLINE
  $wp_customize->add_setting( 'portfolio_headline' , array(
    'default'   => 'our portfolio',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_headline', array(
    'label'      => __( 'Portfolio Headline', 'akad' ),
    'section'    => 'portfolio_section',
    'settings'   => 'portfolio_headline',
  ) ) );
// (PAGE: HOME) PORTFOLIO TEXT
  $wp_customize->add_setting( 'portfolio_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_text', array(
    'label'      => __( 'Portfolio Text', 'akad' ),
    'section'    => 'portfolio_section',
    'settings'   => 'portfolio_text',
  ) ) );
  // (PAGE: HOME) PORTFOLIO SIDEBAR HEADLINE
  $wp_customize->add_setting( 'portfolio_sidebar_headline' , array(
    'default'   => 'choose category',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'portfolio_sidebar_headline', array(
    'label'      => __( 'Portfolio Sidebar Headline', 'akad' ),
    'section'    => 'portfolio_section',
    'settings'   => 'portfolio_sidebar_headline',
  ) ) );


  //page about us container: about us and what we do
  $wp_customize->add_section( 'whatwedo_and_aboutus_section' , array(
    'title'      => __( '(PAGE: About Us) About Us and What We Do Section', 'akad' ),
    'priority'   => 30,
  ) );
  //(PAGE: ABOUT US) left headline
  $wp_customize->add_setting( 'aboutus_headline' , array(
    'default'   => 'ABOUT US',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'aboutus_headline', array(
    'label'      => __( 'Headline of LEFT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'aboutus_headline',
  ) ) );
  //(PAGE: ABOUT US) left headline
  $wp_customize->add_setting( 'whatwedo_headline' , array(
    'default'   => 'WHAT WE DO',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whatwedo_headline', array(
    'label'      => __( 'Headline of RIGHT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'whatwedo_headline',
  ) ) );
  //(PAGE: ABOUT US) small right headline
  $wp_customize->add_setting( 'aboutus_small_headline' , array(
    'default'   => 'We are awesome',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'aboutus_small_headline', array(
    'label'      => __( 'Small headline of LEFT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'aboutus_small_headlinee',
  ) ) );
  //(PAGE: ABOUT US) small left headline
  $wp_customize->add_setting( 'aboutus_small_headline' , array(
    'default'   => 'We are awesome',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'aboutus_small_headline', array(
    'label'      => __( 'Small headline of LEFT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'aboutus_small_headline',
  ) ) );
  //(PAGE: ABOUT US) small left headline
  $wp_customize->add_setting( 'whatwedo_small_headline' , array(
    'default'   => 'Creative & Digital',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whatwedo_small_headline', array(
    'label'      => __( 'Small headline of RIGHT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'whatwedo_small_headline',
  ) ) );
  //(PAGE: ABOUT US) left text
  $wp_customize->add_setting( 'aboutus_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'aboutus_text', array(
    'label'      => __( 'Text of LEFT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'aboutus_text',
  ) ) );
  //(PAGE: ABOUT US) right text
  $wp_customize->add_setting( 'whatwedo_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'whatwedo_text', array(
    'label'      => __( 'Text of RIGHT section', 'akad' ),
    'section'    => 'whatwedo_and_aboutus_section',
    'settings'   => 'whatwedo_text',
  ) ) );

  //(PAGE: ABOUT US) benefits

  $wp_customize->add_section( 'benefits_section' , array(
    'title'      => __( '(PAGE: About Us) Benefits Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: ABOUT US) benefits HEADLINE
  $wp_customize->add_setting( 'benefits_headline' , array(
    'default'   => 'some benefits',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'benefits_headline', array(
    'label'      => __( 'Main Headline', 'akad' ),
    'section'    => 'benefits_section',
    'settings'   => 'benefits_headline',
  ) ) );
  // (PAGE: ABOUT US) benefits MAIN TEXT
  $wp_customize->add_setting( 'benefits_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'benefits_text', array(
    'label'      => __( 'Main Text', 'akad' ),
    'section'    => 'benefits_section',
    'settings'   => 'benefits_text',
  ) ) );

  //(PAGE: ABOUT US) dream team

  $wp_customize->add_section( 'dreamteam_section' , array(
    'title'      => __( '(PAGE: About Us) Dream Team Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: ABOUT US) dream team HEADLINE
  $wp_customize->add_setting( 'dreamteam_headline' , array(
    'default'   => 'THE DREAM TEAM',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dreamteam_headline', array(
    'label'      => __( 'Main Headline', 'akad' ),
    'section'    => 'dreamteam_section',
    'settings'   => 'dreamteam_headline',
  ) ) );
  // (PAGE: ABOUT US) dream team MAIN TEXT
  $wp_customize->add_setting( 'dreamteam_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dreamteam_text', array(
    'label'      => __( 'Main Text', 'akad' ),
    'section'    => 'dreamteam_section',
    'settings'   => 'dreamteam_text',
  ) ) );

  //(PAGE: ABOUT US) bar

  $wp_customize->add_section( 'bar_section' , array(
    'title'      => __( '(PAGE: About Us) Bar section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: ABOUT US) bar TEXT
  $wp_customize->add_setting( 'bar_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bar_text', array(
    'label'      => __( 'Bar text', 'akad' ),
    'section'    => 'bar_section',
    'settings'   => 'bar_text',
  ) ) );



  //(PAGE: SERVICES) WHAT WE DO TOP

  $wp_customize->add_section( 'services_what_we_do_top_section' , array(
    'title'      => __( '(PAGE: SERVICES) What We Do Top section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) WHAT WE DO TOP HEADLINE
  $wp_customize->add_setting( 'services_what_we_do_top_headline' , array(
    'default'   => 'What we do',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_top_headline', array(
    'label'      => __( 'Headline', 'akad' ),
    'section'    => 'services_what_we_do_top_section',
    'settings'   => 'services_what_we_do_top_headline',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO TOP TEXT
  $wp_customize->add_setting( 'services_what_we_do_top_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_top_text', array(
    'label'      => __( 'Text', 'akad' ),
    'section'    => 'services_what_we_do_top_section',
    'settings'   => 'services_what_we_do_top_text',
  ) ) );



  //(PAGE: SERVICES) WHAT WE DO LEFT

  $wp_customize->add_section( 'services_what_we_do_left_section' , array(
    'title'      => __( '(PAGE: SERVICES) What We Do Left section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT TEXT
  $wp_customize->add_setting( 'services_what_we_do_left_text' , array(
    'default'   => 'Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_text', array(
    'label'      => __( 'Text', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_text',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN1 ITEM1
  $wp_customize->add_setting( 'services_what_we_do_left_column1_item1' , array(
    'default'   => 'Stunning on all screens',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column1_item1', array(
    'label'      => __( 'Column 1 Item 1', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column1_item1',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN1 ITEM2
  $wp_customize->add_setting( 'services_what_we_do_left_column1_item2' , array(
    'default'   => 'Easy to customize',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column1_item2', array(
    'label'      => __( 'Column 1 Item 2', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column1_item2',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN1 ITEM3
  $wp_customize->add_setting( 'services_what_we_do_left_column1_item3' , array(
    'default'   => 'Make a difference',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column1_item3', array(
    'label'      => __( 'Column 1 Item 3', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column1_item3',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN1 ITEM4
  $wp_customize->add_setting( 'services_what_we_do_left_column1_item4' , array(
    'default'   => 'Imagine and create',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column1_item4', array(
    'label'      => __( 'Column 1 Item 4', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column1_item4',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN1 ITEM5
  $wp_customize->add_setting( 'services_what_we_do_left_column1_item5' , array(
    'default'   => 'Unlimited possibilities',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column1_item5', array(
    'label'      => __( 'Column 1 Item 5', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column1_item5',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN2 ITEM1
  $wp_customize->add_setting( 'services_what_we_do_left_column2_item1' , array(
    'default'   => 'Remarkable style',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column2_item1', array(
    'label'      => __( 'Column 2 Item 1', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column2_item1',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN2 ITEM2
  $wp_customize->add_setting( 'services_what_we_do_left_column2_item2' , array(
    'default'   => 'Captivating presentations',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column2_item2', array(
    'label'      => __( 'Column 2 Item 2', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column2_item2',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN2 ITEM3
  $wp_customize->add_setting( 'services_what_we_do_left_column2_item3' , array(
    'default'   => 'Make your portfolio pop',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column2_item3', array(
    'label'      => __( 'Column 2 Item 3', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column2_item3',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN2 ITEM4
  $wp_customize->add_setting( 'services_what_we_do_left_column2_item4' , array(
    'default'   => 'Words that matter',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column2_item4', array(
    'label'      => __( 'Column 2 Item 4', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column2_item4',
  ) ) );
  // (PAGE: SERVICES) WHAT WE DO LEFT COLUMN2 ITEM5
  $wp_customize->add_setting( 'services_what_we_do_left_column2_item5' , array(
    'default'   => 'Satisfied clients',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_what_we_do_left_column2_item5', array(
    'label'      => __( 'Column 2 Item 5', 'akad' ),
    'section'    => 'services_what_we_do_left_section',
    'settings'   => 'services_what_we_do_left_column2_item5',
  ) ) );



  //(PAGE: SERVICES) WHAT WE DO RIGHT

  $wp_customize->add_section( 'services_what_we_do_right_section' , array(
    'title'      => __( '(PAGE: SERVICES) What We Do Right section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) WHAT WE DO RIGHT IMAGE
  $wp_customize->add_setting( 'services_what_we_do_right_image' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'services_what_we_do_right_image', array(
    'label'      => __( 'Image', 'akad' ),
    'section'    => 'services_what_we_do_right_section',
    'settings'   => 'services_what_we_do_right_image',
  ) ) );



  //(PAGE: SERVICES) BENEFITS

  $wp_customize->add_section( 'services_benefits_section' , array(
    'title'      => __( '(PAGE: SERVICES) Benefits section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) BENEFITS ITEM1 LOGO
  $wp_customize->add_setting( 'services_benefits_item1_logo' , array(
    'default'   => 'fas fa-water',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item1_logo', array(
    'label'      => __( 'Item 1 Logo', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item1_logo',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM1 HEADLINE
  $wp_customize->add_setting( 'services_benefits_item1_headline' , array(
    'default'   => 'KEEP PULSE GOING',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item1_headline', array(
    'label'      => __( 'Item 1 Headline', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item1_headline',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM1 TEXT
  $wp_customize->add_setting( 'services_benefits_item1_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item1_text', array(
    'label'      => __( 'Item 1 Text', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item1_text',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM2 LOGO
  $wp_customize->add_setting( 'services_benefits_item2_logo' , array(
    'default'   => 'fas fa-infinity',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item2_logo', array(
    'label'      => __( 'Item 2 Logo', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item2_logo',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM2 HEADLINE
  $wp_customize->add_setting( 'services_benefits_item2_headline' , array(
    'default'   => 'PASS THE LIMITS',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item2_headline', array(
    'label'      => __( 'Item 2 Headline', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item2_headline',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM2 TEXT
  $wp_customize->add_setting( 'services_benefits_item2_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item2_text', array(
    'label'      => __( 'Item 2 Text', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item2_text',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM3 LOGO
  $wp_customize->add_setting( 'services_benefits_item3_logo' , array(
    'default'   => 'far fa-lightbulb',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item3_logo', array(
    'label'      => __( 'Item 3 Logo', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item3_logo',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM3 HEADLINE
  $wp_customize->add_setting( 'services_benefits_item3_headline' , array(
    'default'   => 'GREAT IDEAS',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item3_headline', array(
    'label'      => __( 'Item 3 Headline', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item3_headline',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM3 TEXT
  $wp_customize->add_setting( 'services_benefits_item3_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item3_text', array(
    'label'      => __( 'Item 3 Text', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item3_text',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM4 LOGO
  $wp_customize->add_setting( 'services_benefits_item4_logo' , array(
    'default'   => 'fas fa-sliders-h',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item4_logo', array(
    'label'      => __( 'Item 4 Logo', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item4_logo',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM4 HEADLINE
  $wp_customize->add_setting( 'services_benefits_item4_headline' , array(
    'default'   => 'AWESOME SUPPORT',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item4_headline', array(
    'label'      => __( 'Item 4 Headline', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item4_headline',
  ) ) );
  // (PAGE: SERVICES) BENEFITS ITEM4 TEXT
  $wp_customize->add_setting( 'services_benefits_item4_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_benefits_item4_text', array(
    'label'      => __( 'Item 4 Text', 'akad' ),
    'section'    => 'services_benefits_section',
    'settings'   => 'services_benefits_item4_text',
  ) ) );



  //(PAGE: SERVICES) PRICING TOP

  $wp_customize->add_section( 'services_pricing_top_section' , array(
    'title'      => __( '(PAGE: SERVICES) Pricing Top section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) PRICING TOP HEADLINE
  $wp_customize->add_setting( 'services_pricing_top_headline' , array(
    'default'   => 'pricing plans',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_top_headline', array(
    'label'      => __( 'Headline', 'akad' ),
    'section'    => 'services_pricing_top_section',
    'settings'   => 'services_pricing_top_headline',
  ) ) );
  // (PAGE: SERVICES) PRICING TOP TEXT
  $wp_customize->add_setting( 'services_pricing_top_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_top_text', array(
    'label'      => __( 'Text', 'akad' ),
    'section'    => 'services_pricing_top_section',
    'settings'   => 'services_pricing_top_text',
  ) ) );



  //(PAGE: SERVICES) PRICING PLAN1

  $wp_customize->add_section( 'services_pricing_plan1_section' , array(
    'title'      => __( '(PAGE: SERVICES) Pricing Plan 1 section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) PRICING PLAN1 HEADLINE
  $wp_customize->add_setting( 'services_pricing_plan1_headline' , array(
    'default'   => 'BASIC',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_headline', array(
    'label'      => __( 'Headline', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_headline',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PRICE
  $wp_customize->add_setting( 'services_pricing_plan1_price' , array(
    'default'   => '$35.99 Monthly',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_price', array(
    'label'      => __( 'Price', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_price',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PLUS1
  $wp_customize->add_setting( 'services_pricing_plan1_item1' , array(
    'default'   => 'Lorem ipsum dolor sit amet',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_item1', array(
    'label'      => __( 'PLUS 1', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_item1',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PLUS2
  $wp_customize->add_setting( 'services_pricing_plan1_item2' , array(
    'default'   => 'Consectetuer adipiscing elit',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_item2', array(
    'label'      => __( 'PLUS 2', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_item2',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PLUS3
  $wp_customize->add_setting( 'services_pricing_plan1_item3' , array(
    'default'   => 'Sed diam nonummy',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_item3', array(
    'label'      => __( 'PLUS 3', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_item3',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PLUS4
  $wp_customize->add_setting( 'services_pricing_plan1_item4' , array(
    'default'   => 'Nibh euismod tincidunt',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_item4', array(
    'label'      => __( 'PLUS 4', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_item4',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PLUS5
  $wp_customize->add_setting( 'services_pricing_plan1_item5' , array(
    'default'   => 'Ut laoreet dolore',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_item5', array(
    'label'      => __( 'PLUS 5', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_item5',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN1 PLUS6
  $wp_customize->add_setting( 'services_pricing_plan1_item6' , array(
    'default'   => 'Magna aliquam erat volutpat',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan1_item6', array(
    'label'      => __( 'PLUS 6', 'akad' ),
    'section'    => 'services_pricing_plan1_section',
    'settings'   => 'services_pricing_plan1_item6',
  ) ) );



  //(PAGE: SERVICES) PRICING PLAN2

  $wp_customize->add_section( 'services_pricing_plan2_section' , array(
    'title'      => __( '(PAGE: SERVICES) Pricing Plan 2 section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) PRICING PLAN2 HEADLINE
  $wp_customize->add_setting( 'services_pricing_plan2_headline' , array(
    'default'   => 'ADVANCED',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_headline', array(
    'label'      => __( 'Headline', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_headline',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PRICE
  $wp_customize->add_setting( 'services_pricing_plan2_price' , array(
    'default'   => '$55.99 Monthly',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_price', array(
    'label'      => __( 'Price', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_price',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PLUS1
  $wp_customize->add_setting( 'services_pricing_plan2_item1' , array(
    'default'   => 'Lorem ipsum dolor sit amet',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_item1', array(
    'label'      => __( 'PLUS 2', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_item1',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PLUS2
  $wp_customize->add_setting( 'services_pricing_plan2_item2' , array(
    'default'   => 'Consectetuer adipiscing elit',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_item2', array(
    'label'      => __( 'PLUS 2', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_item2',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PLUS3
  $wp_customize->add_setting( 'services_pricing_plan2_item3' , array(
    'default'   => 'Sed diam nonummy',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_item3', array(
    'label'      => __( 'PLUS 3', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_item3',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PLUS4
  $wp_customize->add_setting( 'services_pricing_plan2_item4' , array(
    'default'   => 'Nibh euismod tincidunt',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_item4', array(
    'label'      => __( 'PLUS 4', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_item4',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PLUS5
  $wp_customize->add_setting( 'services_pricing_plan2_item5' , array(
    'default'   => 'Ut laoreet dolore',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_item5', array(
    'label'      => __( 'PLUS 5', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_item5',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN2 PLUS6
  $wp_customize->add_setting( 'services_pricing_plan2_item6' , array(
    'default'   => 'Magna aliquam erat volutpat',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan2_item6', array(
    'label'      => __( 'PLUS 6', 'akad' ),
    'section'    => 'services_pricing_plan2_section',
    'settings'   => 'services_pricing_plan2_item6',
  ) ) );



  //(PAGE: SERVICES) PRICING PLAN3

  $wp_customize->add_section( 'services_pricing_plan3_section' , array(
    'title'      => __( '(PAGE: SERVICES) Pricing Plan 3 section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: SERVICES) PRICING PLAN3 HEADLINE
  $wp_customize->add_setting( 'services_pricing_plan3_headline' , array(
    'default'   => 'smart',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_headline', array(
    'label'      => __( 'Headline', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_headline',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PRICE
  $wp_customize->add_setting( 'services_pricing_plan3_price' , array(
    'default'   => '$75.99 Monthly',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_price', array(
    'label'      => __( 'Price', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_price',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PLUS1
  $wp_customize->add_setting( 'services_pricing_plan3_item1' , array(
    'default'   => 'Lorem ipsum dolor sit amet',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_item1', array(
    'label'      => __( 'PLUS 1', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_item1',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PLUS2
  $wp_customize->add_setting( 'services_pricing_plan3_item2' , array(
    'default'   => 'Consectetuer adipiscing elit',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_item2', array(
    'label'      => __( 'PLUS 2', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_item2',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PLUS3
  $wp_customize->add_setting( 'services_pricing_plan3_item3' , array(
    'default'   => 'Sed diam nonummy',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_item3', array(
    'label'      => __( 'PLUS 3', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_item3',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PLUS4
  $wp_customize->add_setting( 'services_pricing_plan3_item4' , array(
    'default'   => 'Nibh euismod tincidunt',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_item4', array(
    'label'      => __( 'PLUS 4', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_item4',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PLUS5
  $wp_customize->add_setting( 'services_pricing_plan3_item5' , array(
    'default'   => 'Ut laoreet dolore',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_item5', array(
    'label'      => __( 'PLUS 5', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_item5',
  ) ) );
  // (PAGE: SERVICES) PRICING PLAN3 PLUS6
  $wp_customize->add_setting( 'services_pricing_plan3_item6' , array(
    'default'   => 'Magna aliquam erat volutpat',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'services_pricing_plan3_item6', array(
    'label'      => __( 'PLUS 6', 'akad' ),
    'section'    => 'services_pricing_plan3_section',
    'settings'   => 'services_pricing_plan3_item6',
  ) ) );



  //(PAGE: CONTACT) CONTACT LEFT SECTION

  $wp_customize->add_section( 'contact_section' , array(
    'title'      => __( '(PAGE: CONTACT) Contact Left Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: CONTACT) CONTACT HEADLINE
  $wp_customize->add_setting( 'contact_headline' , array(
    'default'   => 'CONTACT INFO',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_headline', array(
    'label'      => __( 'Headline', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_headline',
  ) ) );
  // (PAGE: CONTACT) CONTACT TEXT
  $wp_customize->add_setting( 'contact_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, conse adipisicing elit. Libero incidunt quod ab mollitia quia dolorum conse.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_text', array(
    'label'      => __( 'Text under Headline', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_text',
  ) ) );
  // (PAGE: CONTACT) CONTACT TEXT-LINE1
  $wp_customize->add_setting( 'contact_line1' , array(
    'default'   => '13D, Functional apartment, Unique colony,',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_line1', array(
    'label'      => __( 'Text-line 1', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_line1',
  ) ) );
  // (PAGE: CONTACT) CONTACT TEXT-LINE2
  $wp_customize->add_setting( 'contact_line2' , array(
    'default'   => 'Agadir 86360',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_line2', array(
    'label'      => __( 'Text-line 2', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_line2',
  ) ) );
  // (PAGE: CONTACT) CONTACT NUMBER1
  $wp_customize->add_setting( 'contact_number1' , array(
    'default'   => '+212 124-566-780',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_number1', array(
    'label'      => __( 'Phone Number Line 1', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_number1',
  ) ) );
  // (PAGE: CONTACT) CONTACT NUMBER2
  $wp_customize->add_setting( 'contact_number2' , array(
    'default'   => '+212 124-566-780',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_number2', array(
    'label'      => __( 'Phone Number Line 2', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_number2',
  ) ) );
  // (PAGE: CONTACT) CONTACT EMAIL
  $wp_customize->add_setting( 'contact_email' , array(
    'default'   => 'email@website.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_email', array(
    'label'      => __( 'Email', 'akad' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_email',
  ) ) );



  //(PAGE: CONTACT) CONTACT SOC LINKS SECTION

  $wp_customize->add_section( 'contact_soc_section' , array(
    'title'      => __( '(PAGE: CONTACT) Contact Soc Links Section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: CONTACT) LINK1
  $wp_customize->add_setting( 'contact_link1' , array(
    'default'   => 'https://www.facebook.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link1', array(
    'label'      => __( 'Link 1', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link1',
  ) ) );
  // (PAGE: CONTACT) LINK1 ICON
  $wp_customize->add_setting( 'contact_link1_icon' , array(
    'default'   => 'fab fa-facebook-f',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link1_icon', array(
    'label'      => __( 'Link 1 Icon(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link1_icon',
  ) ) );
  // (PAGE: CONTACT) LINK2
  $wp_customize->add_setting( 'contact_link2' , array(
    'default'   => 'https://twitter.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link2', array(
    'label'      => __( 'Link 2', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link2',
  ) ) );
  // (PAGE: CONTACT) LINK2 ICON
  $wp_customize->add_setting( 'contact_link2_icon' , array(
    'default'   => 'fab fa-twitter',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link2_icon', array(
    'label'      => __( 'Link 2 Icon(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link2_icon',
  ) ) );
  // (PAGE: CONTACT) LINK3
  $wp_customize->add_setting( 'contact_link3' , array(
    'default'   => 'https://www.youtube.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link3', array(
    'label'      => __( 'Link 3', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link3',
  ) ) );
  // (PAGE: CONTACT) LINK3 ICON
  $wp_customize->add_setting( 'contact_link3_icon' , array(
    'default'   => 'fab fa-youtube',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link3_icon', array(
    'label'      => __( 'Link 3 Icon(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link3_icon',
  ) ) );
  // (PAGE: CONTACT) LINK4
  $wp_customize->add_setting( 'contact_link4' , array(
    'default'   => 'https://www.linkedin.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link4', array(
    'label'      => __( 'Link 4', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link4',
  ) ) );
  // (PAGE: CONTACT) LINK4 ICON
  $wp_customize->add_setting( 'contact_link4_icon' , array(
    'default'   => 'fab fa-linkedin',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link4_icon', array(
    'label'      => __( 'Link 4 Icon(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link4_icon',
  ) ) );
  // (PAGE: CONTACT) LINK5
  $wp_customize->add_setting( 'contact_link5' , array(
    'default'   => 'https://www.pinterest.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link5', array(
    'label'      => __( 'Link 5', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link5',
  ) ) );
  // (PAGE: CONTACT) LINK5 ICON
  $wp_customize->add_setting( 'contact_link5_icon' , array(
    'default'   => 'fab fa-pinterest',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link5_icon', array(
    'label'      => __( 'Link 5 Icon(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link5_icon',
  ) ) );
  // (PAGE: CONTACT) LINK6
  $wp_customize->add_setting( 'contact_link6' , array(
    'default'   => 'https://www.instagram.com',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link6', array(
    'label'      => __( 'Link 6', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link6',
  ) ) );
  // (PAGE: CONTACT) LINK6 ICON
  $wp_customize->add_setting( 'contact_link6_icon' , array(
    'default'   => 'fab fa-instagram',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_link6_icon', array(
    'label'      => __( 'Link 6 Icon(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'contact_soc_section',
    'settings'   => 'contact_link6_icon',
  ) ) );



  //(PAGE: ABOUT US) newsletter

  $wp_customize->add_section( 'newsletter_section' , array(
    'title'      => __( '(PAGE: ALL PAGES) NewsLetter section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: ABOUT US) newsletter LEFT TEXT
  $wp_customize->add_setting( 'newsletter_left_text' , array(
    'default'   => 'YOU THINK WE\'RE COOL ? LET\'S WORK TOGETHER',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'newsletter_left_text', array(
    'label'      => __( 'LEFT text', 'akad' ),
    'section'    => 'newsletter_section',
    'settings'   => 'newsletter_left_text',
  ) ) );
  // (PAGE: ABOUT US) newsletter RGIHT HEDALINE
  $wp_customize->add_setting( 'newsletter_right_headline' , array(
    'default'   => 'STAY INFORMED WITH OUR NEWSLETTER',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'newsletter_right_headline', array(
    'label'      => __( 'RIGHT headline', 'akad' ),
    'section'    => 'newsletter_section',
    'settings'   => 'newsletter_right_headline',
  ) ) );
  // (PAGE: ABOUT US) newsletter RIGHT TEXT
  $wp_customize->add_setting( 'newsletter_right_text' , array(
    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'newsletter_right_text', array(
    'label'      => __( 'RIGHT text', 'akad' ),
    'section'    => 'newsletter_section',
    'settings'   => 'newsletter_right_text',
  ) ) );



  //(PAGE: ALL) footer

  $wp_customize->add_section( 'footer_section' , array(
    'title'      => __( '(PAGE: ALL PAGES) FOOTER section', 'akad' ),
    'priority'   => 30,
  ) );
  // (PAGE: ALL) footer text
  $wp_customize->add_setting( 'footer_text' , array(
    'default'   => 'Created by akhouad 2016. All Rights Reserved',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_text', array(
    'label'      => __( 'Text', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_text',
  ) ) );
  // (PAGE: ALL) footer social icon 1
  $wp_customize->add_setting( 'footer_icon1' , array(
    'default'   => 'fab fa-facebook-b',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon1', array(
    'label'      => __( 'Social Icons: Icon 1(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_icon1',
  ) ) );
  // (PAGE: ALL) footer social icon 2
  $wp_customize->add_setting( 'footer_icon2' , array(
    'default'   => 'fab fa-twitter',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon2', array(
    'label'      => __( 'Social Icons: Icon 2(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_icon2',
  ) ) );
  // (PAGE: ALL) footer social icon 3
  $wp_customize->add_setting( 'footer_icon3' , array(
    'default'   => 'fab fa-youtube',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon3', array(
    'label'      => __( 'Social Icons: Icon 3(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_icon3',
  ) ) );
  // (PAGE: ALL) footer social icon 4
  $wp_customize->add_setting( 'footer_icon4' , array(
    'default'   => 'fab fa-linkedin',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon4', array(
    'label'      => __( 'Social Icons: Icon 4(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_icon4',
  ) ) );
  // (PAGE: ALL) footer social icon 5
  $wp_customize->add_setting( 'footer_icon5' , array(
    'default'   => 'fab fa-pinterest',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon5', array(
    'label'      => __( 'Social Icons: Icon 5(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_icon5',
  ) ) );
  // (PAGE: ALL) footer social icon 6
  $wp_customize->add_setting( 'footer_icon6' , array(
    'default'   => 'fab fa-instagram',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_icon6', array(
    'label'      => __( 'Social Icons: Icon 6(FONT AWESOME CODE)', 'akad' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_icon6',
  ) ) );
}
add_action( 'customize_register', 'akad_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function akad_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function akad_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function akad_customize_preview_js() {
	wp_enqueue_script( 'akad-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'akad_customize_preview_js' );
