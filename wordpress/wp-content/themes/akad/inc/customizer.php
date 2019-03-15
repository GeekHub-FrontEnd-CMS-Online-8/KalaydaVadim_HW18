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
