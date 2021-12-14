<?php
	
	$ts_photography_theme_color_first = get_theme_mod('ts_photography_theme_color_first');

	$ts_photography_custom_css = '';

	$ts_photography_custom_css .='input[type="submit"], .search-box i, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce input.button.alt, #footer .tagcloud a:hover, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, .woocommerce button.button.alt, #sidebar .tagcloud a:hover,#menu-sidebar input[type="submit"], #footer .woocommerce a.button:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$ts_photography_custom_css .='background-color: '.esc_attr($ts_photography_theme_color_first).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='.social-media i:hover, .serach_outer i, #slider .inner_carousel h1 a, #footer li a:hover{';
		$ts_photography_custom_css .='color: '.esc_attr($ts_photography_theme_color_first).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='#sidebar form, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, #sidebar form.woocommerce-product-search input[type="search"]{';
		$ts_photography_custom_css .='border-color: '.esc_attr($ts_photography_theme_color_first).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='.page-box hr, #sidebar h3{';
		$ts_photography_custom_css .='border-top-color: '.esc_attr($ts_photography_theme_color_first).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='#sidebar h3{';
		$ts_photography_custom_css .='border-bottom-color: '.esc_attr($ts_photography_theme_color_first).';';
	$ts_photography_custom_css .='}';

	// second theme color
	$ts_photography_theme_color_second = get_theme_mod('ts_photography_theme_color_second');

	$ts_photography_custom_css .='.hvr-sweep-to-right:before, a.button, .pagination span,.pagination a {';
		$ts_photography_custom_css .='background-color: '.esc_attr($ts_photography_theme_color_second).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #footer input[type="submit"],.tags p a:hover,.meta-nav:hover,.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{';
		$ts_photography_custom_css .='background-color: '.esc_attr($ts_photography_theme_color_second).'!important;';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='input[type="submit"], #header .nav ul li a:active, .page-box h4 a,.woocommerce-message::before, .woocommerce #respond input#submit, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce input.button.alt, .know-btn a, #sidebar input[type="submit"], #footer h3, .primary-navigation a:hover , .woocommerce-MyAccount-content a,#menu-sidebar input[type="submit"],#sidebar ul li a:hover,.primary-navigation a:focus,.metabox a:hover{';
		$ts_photography_custom_css .='color: '.esc_attr($ts_photography_theme_color_second).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='#header, #footer h3,.fixed-header{';
		$ts_photography_custom_css .='border-bottom-color: '.esc_attr($ts_photography_theme_color_second).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='.woocommerce-message, .primary-navigation ul ul{';
		$ts_photography_custom_css .='border-top-color: '.esc_attr($ts_photography_theme_color_second).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='.primary-navigation ul ul{';
		$ts_photography_custom_css .='border-top-color: '.esc_attr($ts_photography_theme_color_second).'!important;';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='.primary-navigation ul ul, .know-btn a{';
		$ts_photography_custom_css .='border-color: '.esc_attr($ts_photography_theme_color_second).';';
	$ts_photography_custom_css .='}';

	$ts_photography_custom_css .='.woocommerce-MyAccount-content a, td.product-name a, a.shipping-calculator-button, .woocommerce-info a, .woocommerce-privacy-policy-text a,.primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul a,.tags i{';
		$ts_photography_custom_css .='color: '.esc_attr($ts_photography_theme_color_second).'!important;';
	$ts_photography_custom_css .='}';

	// media
	$ts_photography_custom_css .='@media screen and (max-width:1000px) {';
	if($ts_photography_theme_color_second != false || $ts_photography_theme_color_first != false){
	$ts_photography_custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a, #contact-info{
	background-image: linear-gradient(-90deg, '.esc_attr($ts_photography_theme_color_second).' 0%, '.esc_attr($ts_photography_theme_color_first).' 120%);
		} ';
	}
	$ts_photography_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$ts_photography_theme_lay = get_theme_mod( 'ts_photography_theme_options','Default');
    if($ts_photography_theme_lay == 'Default'){
		$ts_photography_custom_css .='body{';
			$ts_photography_custom_css .='max-width: 100%;';
		$ts_photography_custom_css .='}';
	}else if($ts_photography_theme_lay == 'Container'){
		$ts_photography_custom_css .='body{';
			$ts_photography_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ts_photography_custom_css .='}';
		$ts_photography_custom_css .='.serach_outer{';
			$ts_photography_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$ts_photography_custom_css .='}';
		$ts_photography_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$ts_photography_custom_css .='width:97%;';
		$ts_photography_custom_css .='} }';
	}else if($ts_photography_theme_lay == 'Box Container'){
		$ts_photography_custom_css .='body{';
			$ts_photography_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$ts_photography_custom_css .='}';
		$ts_photography_custom_css .='.serach_outer{';
			$ts_photography_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0;';
		$ts_photography_custom_css .='}';
		$ts_photography_custom_css .='.page-template-custom-front-page #header{';
			$ts_photography_custom_css .='width:97%';
		$ts_photography_custom_css .='}';
		$ts_photography_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-front-page #header{';
		$ts_photography_custom_css .='width:97%;';
		$ts_photography_custom_css .='} }';
		$ts_photography_custom_css .='
		@media screen and (max-width: 1000px){
		.page-template-custom-front-page #header{';
		$ts_photography_custom_css .='width:100%;';
		$ts_photography_custom_css .='} }';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$ts_photography_theme_lay = get_theme_mod( 'ts_photography_slider_content_alignment','Left');
    if($ts_photography_theme_lay == 'Left'){
		$ts_photography_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$ts_photography_custom_css .='text-align:left; left:20%; right:20%;';
		$ts_photography_custom_css .='}';
	}else if($ts_photography_theme_lay == 'Center'){
		$ts_photography_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$ts_photography_custom_css .='text-align:center; left:20%; right:20%;';
		$ts_photography_custom_css .='}';
	}else if($ts_photography_theme_lay == 'Right'){
		$ts_photography_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$ts_photography_custom_css .='text-align:right; left:20%; right:20%;';
		$ts_photography_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$ts_photography_theme_lay = get_theme_mod( 'ts_photography_slider_image_opacity','0.7');
	if($ts_photography_theme_lay == '0'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.1'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.1';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.2'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.2';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.3'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.3';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.4'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.4';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.5'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.5';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.6'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.6';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.7'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.7';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.8'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.8';
		$ts_photography_custom_css .='}';
		}else if($ts_photography_theme_lay == '0.9'){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:0.9';
		$ts_photography_custom_css .='}';
		}

	/*-------------------------- Button Settings option------------------*/
	$ts_photography_button_padding_top_bottom = get_theme_mod('ts_photography_button_padding_top_bottom');
	$ts_photography_button_padding_left_right = get_theme_mod('ts_photography_button_padding_left_right');
	$ts_photography_custom_css .='#comments .form-submit input[type="submit"],.blogbutton-small,.know-btn a{';
		$ts_photography_custom_css .='padding-top: '.esc_attr($ts_photography_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($ts_photography_button_padding_top_bottom).'px; padding-left: '.esc_attr($ts_photography_button_padding_left_right).'px; padding-right: '.esc_attr($ts_photography_button_padding_left_right).'px; display:inline-block;';
	$ts_photography_custom_css .='}';

	$ts_photography_button_border_radius = get_theme_mod('ts_photography_button_border_radius');
	$ts_photography_custom_css .='#comments .form-submit input[type="submit"], .blogbutton-small,.know-btn a,.hvr-sweep-to-right:before{';
		$ts_photography_custom_css .='border-radius: '.esc_attr($ts_photography_button_border_radius).'px;';
	$ts_photography_custom_css .='}';

	$ts_photography_show_header = get_theme_mod( 'ts_photography_button_border', false);
	if($ts_photography_show_header == true){
		$ts_photography_custom_css .='.know-btn a{';
			$ts_photography_custom_css .='border:2px solid; margin:10px 0;';
		$ts_photography_custom_css .='}';
	}

	/*-----------------------------Responsive Setting --------------------*/
	$ts_photography_stickyheader = get_theme_mod( 'ts_photography_responsive_sticky_header',false);
	if($ts_photography_stickyheader == true && get_theme_mod( 'ts_photography_sticky_header') == false){
    	$ts_photography_custom_css .='.fixed-header{';
			$ts_photography_custom_css .='position:static;';
		$ts_photography_custom_css .='} ';
	}
    if($ts_photography_stickyheader == true){
    	$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='.fixed-header{';
			$ts_photography_custom_css .='position:fixed;';
		$ts_photography_custom_css .='} }';
	}else if($ts_photography_stickyheader == false){
		$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='.fixed-header{';
			$ts_photography_custom_css .='position:static;';
		$ts_photography_custom_css .='} }';
	}

	$ts_photography_slider = get_theme_mod( 'ts_photography_responsive_slider',false);
	if($ts_photography_slider == true && get_theme_mod( 'ts_photography_slider_hide_show', false) == false){
    	$ts_photography_custom_css .='#slider{';
			$ts_photography_custom_css .='display:none;';
		$ts_photography_custom_css .='} ';
	}
    if($ts_photography_slider == true){
    	$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#slider{';
			$ts_photography_custom_css .='display:block;';
		$ts_photography_custom_css .='} }';
	}else if($ts_photography_slider == false){
		$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#slider{';
			$ts_photography_custom_css .='display:none;';
		$ts_photography_custom_css .='} }';
	}

	$ts_photography_slider = get_theme_mod( 'ts_photography_responsive_scroll',true);
	if($ts_photography_slider == true && get_theme_mod( 'ts_photography_enable_disable_scroll', true) == false){
    	$ts_photography_custom_css .='#scroll-top{';
			$ts_photography_custom_css .='display:none !important;';
		$ts_photography_custom_css .='} ';
	}
    if($ts_photography_slider == true){
    	$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#scroll-top{';
			$ts_photography_custom_css .='visibility: visible !important;';
		$ts_photography_custom_css .='} }';
	}else if($ts_photography_slider == false){
		$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#scroll-top{';
			$ts_photography_custom_css .='visibility: hidden !important;';
		$ts_photography_custom_css .='} }';
	}

	$ts_photography_sidebar = get_theme_mod( 'ts_photography_responsive_sidebar',true);
    if($ts_photography_sidebar == true){
    	$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#sidebar{';
			$ts_photography_custom_css .='display:block;';
		$ts_photography_custom_css .='} }';
	}else if($ts_photography_sidebar == false){
		$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#sidebar{';
			$ts_photography_custom_css .='display:none;';
		$ts_photography_custom_css .='} }';
	}

	$ts_photography_loader = get_theme_mod( 'ts_photography_responsive_preloader', true);
	if($ts_photography_loader == true && get_theme_mod( 'ts_photography_preloader_option', true) == false){
    	$ts_photography_custom_css .='#loader-wrapper{';
			$ts_photography_custom_css .='display:none;';
		$ts_photography_custom_css .='} ';
	}
    if($ts_photography_loader == true){
    	$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#loader-wrapper{';
			$ts_photography_custom_css .='display:block;';
		$ts_photography_custom_css .='} }';
	}else if($ts_photography_loader == false){
		$ts_photography_custom_css .='@media screen and (max-width:575px) {';
		$ts_photography_custom_css .='#loader-wrapper{';
			$ts_photography_custom_css .='display:none;';
		$ts_photography_custom_css .='} }';
	}

	/*------------ Woocommerce Settings  --------------*/
	$ts_photography_top_bottom_product_button_padding = get_theme_mod('ts_photography_top_bottom_product_button_padding', 11);
	$ts_photography_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$ts_photography_custom_css .='padding-top: '.esc_attr($ts_photography_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($ts_photography_top_bottom_product_button_padding).'px;';
	$ts_photography_custom_css .='}';

	$ts_photography_left_right_product_button_padding = get_theme_mod('ts_photography_left_right_product_button_padding', 11);
	$ts_photography_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$ts_photography_custom_css .='padding-left: '.esc_attr($ts_photography_left_right_product_button_padding).'px; padding-right: '.esc_attr($ts_photography_left_right_product_button_padding).'px;';
	$ts_photography_custom_css .='}';

	$ts_photography_product_button_border_radius = get_theme_mod('ts_photography_product_button_border_radius', 0);
	$ts_photography_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$ts_photography_custom_css .='border-radius: '.esc_attr($ts_photography_product_button_border_radius).'px;';
	$ts_photography_custom_css .='}';

	$ts_photography_show_related_products = get_theme_mod('ts_photography_show_related_products',true);
	if($ts_photography_show_related_products == false){
		$ts_photography_custom_css .='.related.products{';
			$ts_photography_custom_css .='display: none;';
		$ts_photography_custom_css .='}';
	}

	$ts_photography_show_wooproducts_border = get_theme_mod('ts_photography_show_wooproducts_border', true);
	if($ts_photography_show_wooproducts_border == false){
		$ts_photography_custom_css .='.products li{';
			$ts_photography_custom_css .='border: none;';
		$ts_photography_custom_css .='}';
	}

	$ts_photography_top_bottom_wooproducts_padding = get_theme_mod('ts_photography_top_bottom_wooproducts_padding',10);
	$ts_photography_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_photography_custom_css .='padding-top: '.esc_attr($ts_photography_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($ts_photography_top_bottom_wooproducts_padding).'px !important;';
	$ts_photography_custom_css .='}';

	$ts_photography_left_right_wooproducts_padding = get_theme_mod('ts_photography_left_right_wooproducts_padding',10);
	$ts_photography_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_photography_custom_css .='padding-left: '.esc_attr($ts_photography_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($ts_photography_left_right_wooproducts_padding).'px !important;';
	$ts_photography_custom_css .='}';

	$ts_photography_wooproducts_border_radius = get_theme_mod('ts_photography_wooproducts_border_radius',0);
	$ts_photography_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_photography_custom_css .='border-radius: '.esc_attr($ts_photography_wooproducts_border_radius).'px;';
	$ts_photography_custom_css .='}';

	$ts_photography_wooproducts_box_shadow = get_theme_mod('ts_photography_wooproducts_box_shadow',0);
	$ts_photography_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$ts_photography_custom_css .='box-shadow: '.esc_attr($ts_photography_wooproducts_box_shadow).'px '.esc_attr($ts_photography_wooproducts_box_shadow).'px '.esc_attr($ts_photography_wooproducts_box_shadow).'px #eee;';
	$ts_photography_custom_css .='}';

	/*------------------ Skin Option  -------------------*/
	$ts_photography_theme_lay = get_theme_mod( 'ts_photography_background_skin_mode','Transparent Background');
    if($ts_photography_theme_lay == 'With Background'){
		$ts_photography_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$ts_photography_custom_css .='background-color: #fff; padding:10px;';
		$ts_photography_custom_css .='}';
		$ts_photography_custom_css .='#sidebar{';
			$ts_photography_custom_css .='background:none;';
		$ts_photography_custom_css .='}';
	}else if($ts_photography_theme_lay == 'Transparent Background'){
		$ts_photography_custom_css .='.page-box-single, #sidebar, .page-box{';
			$ts_photography_custom_css .='background-color: transparent;';
		$ts_photography_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$ts_photography_footer_content_font_size = get_theme_mod('ts_photography_footer_content_font_size', 16);
	$ts_photography_custom_css .='.copyright p{';
		$ts_photography_custom_css .='font-size: '.esc_attr($ts_photography_footer_content_font_size).'px !important;';
	$ts_photography_custom_css .='}';

	$ts_photography_copyright_padding = get_theme_mod('ts_photography_copyright_padding', 20);
	$ts_photography_custom_css .='.abovecopyright{';
		$ts_photography_custom_css .='padding-top: '.esc_attr($ts_photography_copyright_padding).'px; padding-bottom: '.esc_attr($ts_photography_copyright_padding).'px;';
	$ts_photography_custom_css .='}';

	$ts_photography_footer_widget_bg_color = get_theme_mod('ts_photography_footer_widget_bg_color');
	$ts_photography_custom_css .='#footer{';
		$ts_photography_custom_css .='background-color: '.esc_attr($ts_photography_footer_widget_bg_color).';';
	$ts_photography_custom_css .='}';

	$ts_photography_footer_widget_bg_image = get_theme_mod('ts_photography_footer_widget_bg_image');
	if($ts_photography_footer_widget_bg_image != false){
		$ts_photography_custom_css .='#footer{';
			$ts_photography_custom_css .='background: url('.esc_attr($ts_photography_footer_widget_bg_image).');';
		$ts_photography_custom_css .='}';
	}

	// scroll to top
	$ts_photography_scroll_font_size_icon = get_theme_mod('ts_photography_scroll_font_size_icon', 22);
	$ts_photography_custom_css .='#scroll-top .fas{';
		$ts_photography_custom_css .='font-size: '.esc_attr($ts_photography_scroll_font_size_icon).'px;';
	$ts_photography_custom_css .='}';

	// Slider Height 
	$ts_photography_slider_image_height = get_theme_mod('ts_photography_slider_image_height');
	$ts_photography_custom_css .='#slider img{';
		$ts_photography_custom_css .='height: '.esc_attr($ts_photography_slider_image_height).'px;';
	$ts_photography_custom_css .='}';

	// Display Blog Post 
	$ts_photography_display_blog_page_post = get_theme_mod( 'ts_photography_display_blog_page_post','In Box');
    if($ts_photography_display_blog_page_post == 'Without Box'){
		$ts_photography_custom_css .='.page-box{';
			$ts_photography_custom_css .='box-shadow:none; margin:25px 0;';
		$ts_photography_custom_css .='}';
	}

	// slider overlay
	$ts_photography_slider_overlay = get_theme_mod('ts_photography_slider_overlay', true);
	if($ts_photography_slider_overlay == false){
		$ts_photography_custom_css .='#slider img{';
			$ts_photography_custom_css .='opacity:1;';
		$ts_photography_custom_css .='}';
	} 
	$ts_photography_slider_image_overlay_color = get_theme_mod('ts_photography_slider_image_overlay_color', true);
	if($ts_photography_slider_overlay != false){
		$ts_photography_custom_css .='#slider{';
			$ts_photography_custom_css .='background-color: '.esc_attr($ts_photography_slider_image_overlay_color).';';
		$ts_photography_custom_css .='}';
	}

	// site title and tagline font size option
	$ts_photography_site_title_size_option = get_theme_mod('ts_photography_site_title_size_option', 25);{
	$ts_photography_custom_css .='.logo h1 a, .logo p a{';
	$ts_photography_custom_css .='font-size: '.esc_attr($ts_photography_site_title_size_option).'px;';
		$ts_photography_custom_css .='}';
	}

	$ts_photography_site_tagline_size_option = get_theme_mod('ts_photography_site_tagline_size_option', 12);{
	$ts_photography_custom_css .='.logo p{';
	$ts_photography_custom_css .='font-size: '.esc_attr($ts_photography_site_tagline_size_option).'px !important;';
		$ts_photography_custom_css .='}';
	}

	// woocommerce product sale settings
	$ts_photography_border_radius_product_sale = get_theme_mod('ts_photography_border_radius_product_sale',50);
	$ts_photography_custom_css .='.woocommerce span.onsale {';
		$ts_photography_custom_css .='border-radius: '.esc_attr($ts_photography_border_radius_product_sale).'%;';
	$ts_photography_custom_css .='}';

	$ts_photography_align_product_sale = get_theme_mod('ts_photography_align_product_sale', 'Right');
	if($ts_photography_align_product_sale == 'Right' ){
		$ts_photography_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ts_photography_custom_css .=' left:auto; right:0;';
		$ts_photography_custom_css .='}';
	}elseif($ts_photography_align_product_sale == 'Left' ){
		$ts_photography_custom_css .='.woocommerce ul.products li.product .onsale{';
			$ts_photography_custom_css .=' left:0; right:auto;';
		$ts_photography_custom_css .='}';
	}

	$ts_photography_product_sale_font_size = get_theme_mod('ts_photography_product_sale_font_size',14);
	$ts_photography_custom_css .='.woocommerce span.onsale{';
		$ts_photography_custom_css .='font-size: '.esc_attr($ts_photography_product_sale_font_size).'px;';
	$ts_photography_custom_css .='}';