<?php

function tabut_more_customize_register( $wp_customize ) {

	$wp_customize->get_section( 'title_tagline' )->title = __( 'General Settings', 'tabut' );
	$wp_customize->get_section( 'colors' )->title        = __( 'Theme Colors', 'tabut' );

	// Color
	$wp_customize->add_setting(
		'heading_color',
		array(
			'default'           => '#363636',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_color',
			array(
				'label'    => __( 'Website Heading Color', 'tabut' ),
				'section'  => 'colors',
				'priority' => 10,
				'settings' => 'heading_color',
			)
		)
	);

	$wp_customize->add_setting(
		'heading_hover_color',
		array(
			'default'           => '#121212',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_hover_color',
			array(
				'label'    => __( 'Website Heading Hover Color', 'tabut' ),
				'section'  => 'colors',
				'priority' => 20,
				'settings' => 'heading_hover_color',
			)
		)
	);

	$wp_customize->add_setting(
		'paragraph_color',
		array(
			'default'           => '#404040',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'paragraph_color',
			array(
				'label'    => __( 'Paragraph Color', 'tabut' ),
				'section'  => 'colors',
				'priority' => 30,
				'settings' => 'paragraph_color',
			)
		)
	);

	$wp_customize->add_setting(
		'link_color',
		array(
			'default'           => '#363636',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_color',
			array(
				'label'    => __( 'Link Color', 'tabut' ),
				'section'  => 'colors',
				'priority' => 40,
				'settings' => 'link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'link_hover_color',
		array(
			'default'           => '#121212',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'link_hover_color',
			array(
				'label'    => __( 'Link Hover Color', 'tabut' ),
				'section'  => 'colors',
				'priority' => 50,
				'settings' => 'link_hover_color',
			)
		)
	);

	// Front Page Panel
	$wp_customize->add_panel(
		'front_page',
		array(
			'title'       	  => __( 'Front Page Settings', 'tabut' ),
			'capability'  	  => 'edit_theme_options',
			'description' 	  => __( 'Here you can customize your front page of website website.', 'tabut' ),
			'priority'    	  => 30,
		)
	);

	// Hero Section
	$wp_customize->add_section(
		'hero_section',
		array(
			'title'      => __( 'Hero Section', 'tabut' ),
			'capability' => 'edit_theme_options',
			'priority'   => 10,
			'panel'      => 'front_page',
		)
	);

	$wp_customize->add_setting(
		'Hero_background_image_setting',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'Hero_background_image_setting',
			array(
				'label'    => __( 'Background Image', 'tabut' ),
				'section'  => 'hero_section',
				'settings' => 'Hero_background_image_setting',
			)
		)
	);

	// Button One
	$wp_customize->add_section(
		'button_one',
		array(
			'title' => 'Primary Button',
			'panel' => 'hero_setting',
		)
	);

	// Toggle
	$wp_customize->add_setting(
		'primary_btn_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'primary_btn_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'hero_section',
			'label'    => __( 'Hide Button ?', 'tabut' ),
			'priority' => 10,
		)
	);

	// Text
	$wp_customize->add_setting(
		'btn_one_setting_text',
		array(
			'transport'         => 'refresh',
			'default'           => 'Primary',
			'sanitize_callback' => 'tabut_customizer_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'btn_one_setting_text',
		array(
			'label'   => __( 'Primary Button Text', 'tabut' ),
			'section' => 'hero_section',
			'type'    => 'text',
		)
	);

	// Link
	$wp_customize->add_setting(
		'btn_one_setting',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'btn_one_setting',
		array(
			'label'       => __( 'Primary Button Link', 'tabut' ),
			'section'     => 'hero_section',
			'type'        => 'url',
			'input_attrs' => array(
				'placeholder' => __( 'http://www.example.com', 'tabut' ),
			),
		)
	);

	// Button Two
	$wp_customize->add_section(
		'second_button',
		array(
			'title' => __( 'Secondary Button', 'tabut' ),
			'panel' => 'hero_setting',
		)
	);

	$wp_customize->add_setting(
		'secondary_btn_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'secondary_btn_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'hero_section',
			'label'    => __( 'Hide Button ?', 'tabut' ),
			'priority' => 10,
		)
	);

	// Text
	$wp_customize->add_setting(
		'btn_two_setting_text',
		array(
			'default'           => 'Secondary',
			'transport'         => 'refresh',
			'sanitize_callback' => 'tabut_customizer_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'btn_two_setting_text',
		array(
			'label'   => __( 'Secondary Button Text', 'tabut' ),
			'section' => 'hero_section',
			'type'    => 'text',
		)
	);

	// Link
	$wp_customize->add_setting(
		'btn_two_setting',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		'btn_two_setting',
		array(
			'label'       => __( 'Secondary Button Link', 'tabut' ),
			'section'     => 'hero_section',
			'type'        => 'url',
			'input_attrs' => array(
				'placeholder' => __( 'http://www.example.com', 'tabut' ),
			),
		)
	);

	//  About
	$wp_customize->add_section(
		'about_content',
		array(
			'title'      => __( 'About Section', 'tabut' ),
			'capability' => 'edit_theme_options',
			'priority'   => 10,
			'panel'      => 'front_page',
		)
	);

	$wp_customize->add_setting(
		'about_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'about_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'about_content',
			'label'    => __( 'Hide Section ?', 'tabut' ),
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'tabut_about_setting_id',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_dropDown',
		)
	);

	$wp_customize->add_control(
		'tabut_about_setting_id',
		array(
			'type'        => 'dropdown-pages',
			'section'     => 'about_content',
			'label'       => __( 'About Page Select', 'tabut' ),
			'description' => __( 'Select page which contain about yourself.', 'tabut' ),
			'priority'    => 20,
		)
	);

	$wp_customize->add_setting(
		'aboutMore_btn_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'aboutMore_btn_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'about_content',
			'label'    => __( 'Hide Read More Button ?', 'tabut' ),
			'priority' => 30,
		)
	);

	//Services
	$wp_customize->add_section(
		'services_content',
		array(
			'title'      => __( 'Services Section', 'tabut' ),
			'capability' => 'edit_theme_options',
			'priority'   => 20,
			'panel'      => 'front_page',
		)
	);

	$wp_customize->add_setting(
		'services_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'services_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'services_content',
			'label'    => __( 'Hide Section ?', 'tabut' ),
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'tabut_services_setting_id',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_dropDown',
		)
	);

	$wp_customize->add_control(
		'tabut_services_setting_id',
		array(
			'type'        => 'dropdown-pages',
			'section'     => 'services_content',
			'label'       => __( 'Service Page Select', 'tabut' ),
			'description' => __( 'Select page which contain services.', 'tabut' ),
		)
	);

	//   Portfolio
	$wp_customize->add_section(
		'portfolio_content',
		array(
			'title'      => __( 'Portfolio Section', 'tabut' ),
			'capability' => 'edit_theme_options',
			'priority'   => 30,
			'panel'      => 'front_page',
		)
	);

	$wp_customize->add_setting(
		'portfolio_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'portfolio_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'portfolio_content',
			'label'    => __( 'Hide Section ?', 'tabut' ),
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'tabut_portfolio_setting_id',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_dropDown',
		)
	);

	$wp_customize->add_control(
		'tabut_portfolio_setting_id',
		array(
			'type'        => 'dropdown-pages',
			'section'     => 'portfolio_content',
			'label'       => __( 'Portfolio Page Select', 'tabut' ),
			'description' => __( 'Select page which contain title and subtitle.', 'tabut' ),
		)
	);
	//   Contact
	$wp_customize->add_section(
		'contact_content',
		array(
			'title'      => __( 'Contact Section', 'tabut' ),
			'capability' => 'edit_theme_options',
			'priority'   => 30,
			'panel'      => 'front_page',
		)
	);

	$wp_customize->add_setting(
		'contact_toggle',
		array(
			'default'           => 0,
			'transport'         => 'refresh',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'contact_toggle',
		array(
			'type'     => 'checkbox',
			'section'  => 'contact_content',
			'label'    => __( 'Hide Section ?', 'tabut' ),
			'priority' => 10,
		)
	);

	$wp_customize->add_setting(
		'tabut_contact_setting_id',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'tabut_customizer_dropDown',
		)
	);

	$wp_customize->add_control(
		'tabut_contact_setting_id',
		array(
			'type'        => 'dropdown-pages',
			'section'     => 'contact_content',
			'label'       => __( 'Contact Page Select', 'tabut' ),
			'description' => __( 'Select page which contain title and subtitle.', 'tabut' ),
		)
	);

	$wp_customize->add_setting(
		'contact_background_image_setting',
		array(
			'transport'         => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'contact_background_image_setting',
			array(
				'label'    => __( 'Background Image', 'tabut' ),
				'section'  => 'contact_content',
				'settings' => 'contact_background_image_setting',
			)
		)
	);

	$wp_customize->add_section(
		'font_color',
		array(
			'title'      => __( 'Front Page Font Color', 'tabut' ),
			'capability' => 'edit_theme_options',
			'priority'   => 40,
			'panel'      => 'front_page',
		)
	);

	$wp_customize->add_setting(
		'primary_font_color',
		array(
			'default'           => '#404040',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'primary_font_color',
			array(
				'label'    => __( 'Primary Color', 'tabut' ),
				'section'  => 'font_color',
				'settings' => 'primary_font_color',
			)
		)
	);

	$wp_customize->add_setting(
		'secondry_font_color',
		array(
			'default'           => '#404040',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'secondry_font_color',
			array(
				'label'    => __( 'Secondry Color', 'tabut' ),
				'section'  => 'font_color',
				'settings' => 'secondry_font_color',
			)
		)
	);

	/**
	 *  Sanitize Checkbox
	 * */

	function tabut_customizer_sanitize_checkbox( $checked ) {
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	/**
	 *  Sanitize Dropdown
	 * */

	function tabut_customizer_dropDown( $page_id, $setting ) {
		// Ensure $input is an absolute integer.
		$page_id = absint( $page_id );
		// If $page_id is an ID of a published page, return it; otherwise, return the default.
		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	/**
	 *  Sanitize Text
	 * */
	function tabut_customizer_sanitize_text( $text ) {
		return Sanitize_text_field( $text );
	}

}
add_action( 'customize_register', 'tabut_more_customize_register' );
