<?php
/**
 * TS Photography Theme Customizer
 *
 * @package ts-photography
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function ts_photography_customize_register( $wp_customize ) {	
	//add home page setting pannel
	$wp_customize->add_panel( 'ts_photography_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'ts-photography' ),
	    'description' => __( 'Description of what this panel does.', 'ts-photography' ),
	) );

	$ts_photography_font_array = array(
        '' => 'No Fonts', 
        'Abril Fatface' =>'Abril Fatface', 
        'Acme' => 'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' => 'Architects Daughter', 
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo', 
        'Alegreya' => 'Alegreya', 
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo', 
        'Bad Script' =>'Bad Script', 
        'Bitter' => 'Bitter', 
        'Bree Serif' => 'Bree Serif', 
        'BenchNine' => 'BenchNine', 
        'Cabin' =>  'Cabin', 
        'Cardo' => 'Cardo', 
        'Courgette' => 'Courgette', 
        'Cherry Swash' => 'Cherry Swash', 
        'Cormorant Garamond' => 'Cormorant Garamond', 
        'Crimson Text' => 'Crimson Text', 
        'Cuprum' => 'Cuprum', 
        'Cookie' =>  'Cookie', 
        'Chewy' => 'Chewy',
        'Days One' =>  'Days One',
        'Dosis' => 'Dosis', 
        'Droid Sans' => 'Droid Sans', 
        'Economica' => 'Economica', 
        'Fredoka One' => 'Fredoka One', 
        'Fjalla One' => 'Fjalla One', 
        'Francois One' => 'Francois One', 
        'Frank Ruhl Libre' =>  'Frank Ruhl Libre', 
        'Gloria Hallelujah' => 'Gloria Hallelujah', 
        'Great Vibes' =>  'Great Vibes', 
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One', 
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One', 
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster',
        'Lato' => 'Lato', 
        'Lora' => 'Lora', 
        'Libre Baskerville' => 'Libre Baskerville',
        'Lobster Two' =>'Lobster Two', 
        'Merriweather' => 'Merriweather',
        'Monda' => 'Monda', 
        'Montserrat' =>  'Montserrat',
        'Muli' =>  'Muli', 
        'Marck Script' => 'Marck Script', 
        'Noto Serif' => 'Noto Serif', 
        'Open Sans' => 'Open Sans',
        'Overpass' =>'Overpass', 
        'Overpass Mono' => 'Overpass Mono', 
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico', 
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball', 
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans', 
        'Philosopher' => 'Philosopher', 
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' =>  'Russo One',
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' => 'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light',
        'Sacramento' =>'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' =>  'Tangerine', 
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One', 
        'Vollkorn' => 'Vollkorn', 
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz'
    );

	//Typography
	$wp_customize->add_section( 'ts_photography_typography', array(
    	'title'      => __( 'Typography', 'ts-photography' ),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'ts_photography_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_paragraph_color', array(
		'label' => __('Paragraph Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('ts_photography_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_paragraph_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'Paragraph Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	$wp_customize->add_setting('ts_photography_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'ts_photography_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_atag_color', array(
		'label' => __('"a" Tag Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('ts_photography_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_atag_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( '"a" Tag Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'ts_photography_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_li_color', array(
		'label' => __('"li" Tag Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('ts_photography_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control(
	    'ts_photography_li_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( '"li" Tag Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h1_color', array(
		'label' => __('H1 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_h1_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'H1 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('ts_photography_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_h1_font_size',array(
		'label'	=> __('H1 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h2_color', array(
		'label' => __('h2 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_h2_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h2 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('ts_photography_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h2_font_size',array(
		'label'	=> __('h2 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h3_color', array(
		'label' => __('h3 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_h3_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h3 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('ts_photography_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h3_font_size',array(
		'label'	=> __('h3 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h4_color', array(
		'label' => __('h4 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_h4_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h4 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('ts_photography_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h4_font_size',array(
		'label'	=> __('h4 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h5_color', array(
		'label' => __('h5 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_h5_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h5 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('ts_photography_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h5_font_size',array(
		'label'	=> __('h5 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'ts_photography_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_h6_color', array(
		'label' => __('h6 Color', 'ts-photography'),
		'section' => 'ts_photography_typography',
		'settings' => 'ts_photography_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('ts_photography_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_h6_font_family', array(
	    'section'  => 'ts_photography_typography',
	    'label'    => __( 'h6 Fonts','ts-photography'),
	    'type'     => 'select',
	    'choices'  => $ts_photography_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('ts_photography_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('ts_photography_h6_font_size',array(
		'label'	=> __('h6 Font Size','ts-photography'),
		'section'	=> 'ts_photography_typography',
		'setting'	=> 'ts_photography_h6_font_size',
		'type'	=> 'text'
	));

  	$wp_customize->add_setting('ts_photography_background_skin_mode',array(
        'default' => 'Transparent Background',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','ts-photography'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','ts-photography'),
            'Transparent Background' => __('Transparent Background','ts-photography'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('ts_photography_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','ts-photography'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('ts_photography_show_wooproducts_border',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','ts-photography'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'ts_photography_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
  		'sanitize_callback' => 'ts_photography_sanitize_choices',
	) );
	$wp_customize->add_control( 'ts_photography_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'ts-photography' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('ts_photography_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'ts_photography_sanitize_float'
	));	
	$wp_customize->add_control('ts_photography_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','ts-photography'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_photography_top_bottom_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control( 'ts_photography_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','ts-photography' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_photography_left_right_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control( 'ts_photography_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','ts-photography' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'ts_photography_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_photography_sanitize_number_range',
	));
	$wp_customize->add_control('ts_photography_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','ts-photography' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	$wp_customize->add_setting( 'ts_photography_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'ts_photography_sanitize_number_range',
	));
	$wp_customize->add_control('ts_photography_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','ts-photography' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_section('ts_photography_product_button_section', array(
		'title'    => __('Product Button Settings', 'ts-photography'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'ts_photography_top_bottom_product_button_padding',array(
		'default' => 11,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','ts-photography' ),
		'section' => 'ts_photography_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'ts_photography_left_right_product_button_padding',array(
		'default' => 11,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','ts-photography' ),
		'section' => 'ts_photography_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'ts_photography_product_button_border_radius',array(
		'default' => 50,
		'sanitize_callback'    => 'ts_photography_sanitize_number_range',
	));
	$wp_customize->add_control('ts_photography_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','ts-photography' ),
		'section' => 'ts_photography_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('ts_photography_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'ts-photography'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('ts_photography_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','ts-photography'),
        'section' => 'ts_photography_product_sale_section',
        'choices' => array(
            'Right' => __('Right','ts-photography'),
            'Left' => __('Left','ts-photography'),
        ),
	) );

	$wp_customize->add_setting( 'ts_photography_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','ts-photography'),
        'section'  => 'ts_photography_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('ts_photography_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'ts_photography_sanitize_float'
	));
	$wp_customize->add_control('ts_photography_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','ts-photography'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_photography_product_sale_section',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'ts_photography_theme_color_option', array( 
		'panel' => 'ts_photography_panel_id',
		'priority'   => 30, 
		'title' => esc_html__( 'Theme Color Option', 'ts-photography' ) )
	);
	
  	$wp_customize->add_setting( 'ts_photography_theme_color_first', array(
	    'default' => '#ffcb08',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_theme_color_first', array(
  		'label' => __( 'First Color Option', 'ts-photography' ),
  		'description' => __('One can change complete theme color on just one click.', 'ts-photography'),
	    'section' => 'ts_photography_theme_color_option',
	    'settings' => 'ts_photography_theme_color_first',
  	)));
  	
  	$wp_customize->add_setting( 'ts_photography_theme_color_second', array(
	    'default' => '#ec195c',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ts_photography_theme_color_second', array(
  		'label' => __('Second Color Option', 'ts-photography' ),
  		'description' => __('One can change complete theme color on just one click.', 'ts-photography'),
	    'section' => 'ts_photography_theme_color_option',
	    'settings' => 'ts_photography_theme_color_second',
  	)));

	//Layouts
	$wp_customize->add_section( 'ts_photography_left_right', array(
    	'title'      => __( 'Layout Settings', 'ts-photography' ),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id'
	) );

	$wp_customize->add_setting('ts_photography_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','ts-photography'),
       'section' => 'ts_photography_left_right'
    ));

	$wp_customize->add_setting( 'ts_photography_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ) );
    $wp_customize->add_control('ts_photography_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','ts-photography' ),
        'section' => 'ts_photography_left_right'
    ));

    $wp_customize->add_setting( 'ts_photography_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ) );
    $wp_customize->add_control('ts_photography_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','ts-photography'),
		'section' => 'ts_photography_left_right'
    ));

	$wp_customize->add_setting( 'ts_photography_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ) );
    $wp_customize->add_control('ts_photography_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','ts-photography'),
		'section' => 'ts_photography_left_right'
    ));

	$wp_customize->add_setting('ts_photography_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'ts_photography_sanitize_choices'	        
	) );
	$wp_customize->add_control('ts_photography_layout_options',array(
        'type' => 'radio',
        'label' => __('Sidebar Layouts','ts-photography'),
        'section' => 'ts_photography_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','ts-photography'),
            'Right Sidebar' => __('Right Sidebar','ts-photography'),
            'One Column' => __('One Column','ts-photography'),
            'Three Columns' => __('Three Columns','ts-photography'),
            'Four Columns' => __('Four Columns','ts-photography'),
            'Grid Layout' => __('Grid Layout','ts-photography')
        ),
	) );

	$wp_customize->add_setting('ts_photography_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'ts-photography'),
		'section'        => 'ts_photography_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ts-photography'),
			'Right Sidebar' => __('Right Sidebar', 'ts-photography'),
			'One Column'    => __('One Column', 'ts-photography'),
		),
	));

	$wp_customize->add_setting('ts_photography_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'ts-photography'),
		'section'        => 'ts_photography_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'ts-photography'),
			'Right Sidebar' => __('Right Sidebar', 'ts-photography'),
			'One Column'    => __('One Column', 'ts-photography'),
		),
	));

	$wp_customize->add_setting('ts_photography_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','ts-photography'),
        'description' => __('Here you can change the Width layout. ','ts-photography'),
        'section' => 'ts_photography_left_right',
        'choices' => array(
            'Default' => __('Default','ts-photography'),
            'Container' => __('Container','ts-photography'),
            'Box Container' => __('Box Container','ts-photography'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'ts_photography_theme_button', array(
		'title' => __('Button Option','ts-photography'),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id',
	));

	$wp_customize->add_setting( 'ts_photography_button_border',array(
		'default' => '',
      	'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ) );
    $wp_customize->add_control('ts_photography_button_border',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Border for Slider button','ts-photography' ),
        'section' => 'ts_photography_theme_button'
    ));

	$wp_customize->add_setting('ts_photography_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','ts-photography'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_photography_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_photography_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','ts-photography'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_photography_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'ts_photography_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_photography_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','ts-photography' ),
		'section'     => 'ts_photography_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Social Icons(topbar)
	$wp_customize->add_section('ts_photography_topbar_header',array(
		'title'	=> __('Social Icon Section','ts-photography'),
		'description'	=> __('Add Header Content here','ts-photography'),
		'priority'	=> 30,
		'panel' => 'ts_photography_panel_id',
	) );

	$wp_customize->add_setting('ts_photography_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_youtube_url',array(
		'label'	=> __('Add Youtube link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_youtube_url',
		'type'		=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_facebook_url',array(
		'label'	=> __('Add Facebook link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_facebook_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_twitter_url',array(
		'label'	=> __('Add Twitter link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_twitter_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_rss_url',array(
		'label'	=> __('Add RSS link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_rss_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_insta_url',array(
		'label'	=> __('Add Instagram link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_insta_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('ts_photography_pint_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('ts_photography_pint_url',array(
		'label'	=> __('Add Pintrest link','ts-photography'),
		'section'	=> 'ts_photography_topbar_header',
		'setting'	=> 'ts_photography_pint_url',
		'type'	=> 'url'
	) );

	//home page slider
	$wp_customize->add_section( 'ts_photography_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'ts-photography' ),
		'priority'   => 30,
		'panel' => 'ts_photography_panel_id'
	) );
	
	$wp_customize->add_setting('ts_photography_slider_hide_show',array(
      'default' => false,
      'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
	));
	$wp_customize->add_control('ts_photography_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','ts-photography'),
	  'section' => 'ts_photography_slidersettings',
	));

	$wp_customize->add_setting('ts_photography_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','ts-photography'),
       'section' => 'ts_photography_slidersettings'
    ));

    $wp_customize->add_setting('ts_photography_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','ts-photography'),
       'section' => 'ts_photography_slidersettings'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'ts_photography_slidersettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'ts_photography_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'ts_photography_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'ts-photography' ),
			'section'  => 'ts_photography_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('ts_photography_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','ts-photography'),
		'description'    => __('This option will add colors over the slider.','ts-photography'),
       'section' => 'ts_photography_slidersettings'
    ));

    $wp_customize->add_setting('ts_photography_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_photography_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'ts-photography'),
		'section'  => 'ts_photography_slidersettings',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','ts-photography'),
		'settings' => 'ts_photography_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('ts_photography_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','ts-photography'),
        'section' => 'ts_photography_slidersettings',
        'choices' => array(
            'Center' => __('Center','ts-photography'),
            'Left' => __('Left','ts-photography'),
            'Right' => __('Right','ts-photography'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'ts_photography_slider_excerpt_length', array(
		'default'              => 10,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_photography_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','ts-photography' ),
		'section'     => 'ts_photography_slidersettings',
		'type'        => 'number',
		'settings'    => 'ts_photography_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('ts_photography_slider_image_opacity',array(
      'default'              => 0.7,
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control( 'ts_photography_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','ts-photography' ),
	'section'     => 'ts_photography_slidersettings',
	'type'        => 'select',
	'settings'    => 'ts_photography_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','ts-photography'),
		'0.1' =>  esc_attr('0.1','ts-photography'),
		'0.2' =>  esc_attr('0.2','ts-photography'),
		'0.3' =>  esc_attr('0.3','ts-photography'),
		'0.4' =>  esc_attr('0.4','ts-photography'),
		'0.5' =>  esc_attr('0.5','ts-photography'),
		'0.6' =>  esc_attr('0.6','ts-photography'),
		'0.7' =>  esc_attr('0.7','ts-photography'),
		'0.8' =>  esc_attr('0.8','ts-photography'),
		'0.9' =>  esc_attr('0.9','ts-photography')
	),
	));

	$wp_customize->add_setting( 'ts_photography_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'ts_photography_sanitize_number_range',
	));
	$wp_customize->add_control( 'ts_photography_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','ts-photography' ),
		'section' => 'ts_photography_slidersettings',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('ts_photography_slider_image_height',array(
		'default'=> __('550','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_slider_image_height',array(
		'label'	=> __('Slider Image Height','ts-photography'),
		'section'=> 'ts_photography_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_photography_slider_button',array(
		'default'=> __('DISCOVER MORE','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_slider_button',array(
		'label'	=> __('Slider Button','ts-photography'),
		'section'=> 'ts_photography_slidersettings',
		'type'=> 'text'
	));

	//Photography section
  	$wp_customize->add_section('ts_photography_photo_section',array(
	    'title' => __('Photography Section','ts-photography'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'ts_photography_panel_id',
	));  
 
	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('ts_photography_category',array(
	    'default' => 'select',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
  	));
  	$wp_customize->add_control('ts_photography_category',array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label' => __('Select Category to display Latest Post','ts-photography'),
	    'section' => 'ts_photography_photo_section',
	));

	//404 Page Setting
	$wp_customize->add_section('ts_photography_404_page_setting',array(
		'title'	=> __('404 Page','ts-photography'),
		'panel' => 'ts_photography_panel_id',
	));	

	$wp_customize->add_setting('ts_photography_title_404_page',array(
		'default'=> __('404 Not Found','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_title_404_page',array(
		'label'	=> __('404 Page Title','ts-photography'),
		'section'=> 'ts_photography_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_photography_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_content_404_page',array(
		'label'	=> __('404 Page Content','ts-photography'),
		'section'=> 'ts_photography_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_photography_button_404_page',array(
		'default'=> __('Back to Home Page','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_button_404_page',array(
		'label'	=> __('404 Page Button','ts-photography'),
		'section'=> 'ts_photography_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('ts_photography_responsive_setting',array(
		'title'	=> __('Responsive Settings','ts-photography'),
		'panel' => 'ts_photography_panel_id',
	));

    $wp_customize->add_setting('ts_photography_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','ts-photography'),
       'section' => 'ts_photography_responsive_setting'
    ));

    $wp_customize->add_setting('ts_photography_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','ts-photography'),
       'section' => 'ts_photography_responsive_setting'
    ));

    $wp_customize->add_setting('ts_photography_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','ts-photography'),
       'section' => 'ts_photography_responsive_setting'
    ));

    $wp_customize->add_setting('ts_photography_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','ts-photography'),
       'section' => 'ts_photography_responsive_setting'
    ));

    $wp_customize->add_setting('ts_photography_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','ts-photography'),
       'section' => 'ts_photography_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('ts_photography_blog_post',array(
		'title'	=> __('Blog Page Settings','ts-photography'),
		'panel' => 'ts_photography_panel_id',
	));	

	$wp_customize->add_setting('ts_photography_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

    $wp_customize->add_setting('ts_photography_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','ts-photography'),
        'section' => 'ts_photography_blog_post',
        'choices' => array(
            'No Content' => __('No Content','ts-photography'),
            'Excerpt Content' => __('Excerpt Content','ts-photography'),
            'Full Content' => __('Full Content','ts-photography'),
        ),
	) );

    $wp_customize->add_setting( 'ts_photography_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	) );
	$wp_customize->add_control( 'ts_photography_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','ts-photography' ),
		'section'     => 'ts_photography_blog_post',
		'type'        => 'number',
		'settings'    => 'ts_photography_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'ts_photography_post_suffix_option', array(
		'default'   => __('...','ts-photography'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ts_photography_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','ts-photography' ),
		'section'     => 'ts_photography_blog_post',
		'type'        => 'text',
		'settings'    => 'ts_photography_post_suffix_option',
	) );

	$wp_customize->add_setting('ts_photography_button_text',array(
		'default'=> __('READ MORE','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_button_text',array(
		'label'	=> __('Add Button Text','ts-photography'),
		'section'=> 'ts_photography_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'ts_photography_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'ts_photography_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','ts-photography' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'ts-photography' ),
        ),
		'section'     => 'ts_photography_blog_post',
		'type'        => 'text',
		'settings'    => 'ts_photography_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('ts_photography_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'ts_photography_sanitize_choices'
	));
	$wp_customize->add_control('ts_photography_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','ts-photography'),
        'section' => 'ts_photography_blog_post',
        'choices' => array(
            'In Box' => __('In Box','ts-photography'),
            'Without Box' => __('Without Box','ts-photography'),
        ),
	) );

	$wp_customize->add_setting('ts_photography_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','ts-photography'),
       'section' => 'ts_photography_blog_post'
    ));

	//no Result Found
	$wp_customize->add_section('ts_photography_noresult_found',array(
		'title'	=> __('No Result Found','ts-photography'),
		'panel' => 'ts_photography_panel_id',
	));	

	$wp_customize->add_setting('ts_photography_nosearch_found_title',array(
		'default'=> __('Nothing Found','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','ts-photography'),
		'section'=> 'ts_photography_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_photography_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','ts-photography'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('ts_photography_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','ts-photography'),
		'section'=> 'ts_photography_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('ts_photography_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
    ));
    $wp_customize->add_control('ts_photography_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','ts-photography'),
       'section' => 'ts_photography_noresult_found'
    ));

	//footer
	$wp_customize->add_section('ts_photography_footer_section',array(
		'title'	=> __('Footer Text','ts-photography'),
		'priority'	=> null,
		'panel' => 'ts_photography_panel_id',
	));

	$wp_customize->add_setting('ts_photography_footer_widget_areas',array(
        'default'           => 4,
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
    ));
    $wp_customize->add_control('ts_photography_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'ts-photography'),
        'section'     => 'ts_photography_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'ts-photography'),
        'choices' => array(
            '1'     => __('One', 'ts-photography'),
            '2'     => __('Two', 'ts-photography'),
            '3'     => __('Three', 'ts-photography'),
            '4'     => __('Four', 'ts-photography')
        ),
    ));

    $wp_customize->add_setting('ts_photography_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ts_photography_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'ts-photography'),
		'section'  => 'ts_photography_footer_section',
	)));

	$wp_customize->add_setting('ts_photography_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'ts_photography_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','ts-photography'),
        'section' => 'ts_photography_footer_section'
	)));
	
	$wp_customize->add_setting('ts_photography_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('ts_photography_footer_copy',array(
		'label'	=> __('Copyright Text','ts-photography'),
		'section'	=> 'ts_photography_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('ts_photography_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','ts-photography' ),
		'section'=> 'ts_photography_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('ts_photography_copyright_padding',array(
		'default'=> 20,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_copyright_padding',array(
		'label'	=> __('Copyright Padding','ts-photography'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'ts_photography_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('ts_photography_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'ts_photography_sanitize_checkbox'
	));
	$wp_customize->add_control('ts_photography_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','ts-photography'),
      	'section' => 'ts_photography_footer_section',
	));

	$wp_customize->add_setting('ts_photography_scroll_setting',array(
        'default' => 'Right',
	  'sanitize_callback' => 'ts_photography_sanitize_choices',
	));
	$wp_customize->add_control('ts_photography_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','ts-photography'),
        'section' => 'ts_photography_footer_section',
        'choices' => array(
            'Left' => __('Left','ts-photography'),
            'Right' => __('Right','ts-photography'),
            'Center' => __('Center','ts-photography'),
        ),
	) );

	$wp_customize->add_setting('ts_photography_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'ts_photography_sanitize_float',
	));
	$wp_customize->add_control('ts_photography_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','ts-photography'),
		'section'=> 'ts_photography_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
	
}
add_action( 'customize_register', 'ts_photography_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class TS_Photography_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'TS_Photography_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new TS_Photography_Customize_Section_Pro(
				$manager,
				'ts_photography_example_1',
				array(
					'priority'	=> 9,
					'title'    => esc_html__( 'Photography Pro', 'ts-photography' ),
					'pro_text' => esc_html__( 'Go Pro','ts-photography' ),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/premium-photography-wordPress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'ts-photography-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'ts-photography-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
TS_Photography_Customize::get_instance();