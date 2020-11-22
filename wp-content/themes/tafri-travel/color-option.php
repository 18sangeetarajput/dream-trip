<?php

	$tafri_travel_first_theme_color = get_theme_mod('tafri_travel_first_theme_color');

	$custom_css = '';

	if($tafri_travel_first_theme_color != false){
		$custom_css .='#sidebar .tagcloud a:hover, .read-moresec a:hover,  #slider i:hover, #slider .inner_carousel .view-btn a, #destination hr, .date-color, .page-box:hover .read-more-btn a, #footer input[type="submit"], .copyright, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar input[type="submit"], .pagination a:hover, .pagination .current, #footer .tagcloud a:hover, .des_box .des_content,.search-box i,input[type="submit"],.tags p a, #comments a.comment-reply-link,.post-navigation .nav-next a, .post-navigation .nav-previous a,.scrollup i, .widget .woocommerce-product-search button, #sidebar .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle{';
			$custom_css .='background-color: '.esc_html($tafri_travel_first_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='#comments input[type="submit"].submit{';
			$custom_css .='background-color: '.esc_html($tafri_travel_first_theme_color).'!important;';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='.pagination span, .pagination a,input[type="search"], .read-moresec a, .page-box:hover h4, .read-more-btn a, #footer h3, a.showcoupon,.woocommerce-message::before, .woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .quantity .qty, #sidebar caption, #sidebar h3, h2.entry-title,
			h1.page-title, a, .content-box h2,.page-box-single .metabox, .content-box h3, #footer li a:hover, span.entry-date i, .primary-menu ul li a:hover,.primary-menu ul ul li a,.primary-menu ul ul a,#sidebar ul li a:hover{';
			$custom_css .='color: '.esc_html($tafri_travel_first_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='#slider i:hover,#destination h2, #slider .inner_carousel .view-btn a, #footer input[type="search"], .read-more-btn a,.woocommerce .quantity .qty, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .serach_inner form.search-form,.read-moresec a,.scrollup i{';
			$custom_css .='border-color: '.esc_html($tafri_travel_first_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='.woocommerce-message{';
			$custom_css .='border-top-color: '.esc_html($tafri_travel_first_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='.top-header{';
			$custom_css .='border-bottom-color: '.esc_html($tafri_travel_first_theme_color).'!important;';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='.primary-menu ul ul li:hover{';
			$custom_css .='border-left-color: '.esc_html($tafri_travel_first_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li{';
			$custom_css .='background-color: '.esc_html($tafri_travel_first_theme_color).'!important;';
		$custom_css .='}';
	}
	if($tafri_travel_first_theme_color != false){
		$custom_css .='.page-box-single h1{';
			$custom_css .='color: '.esc_html($tafri_travel_first_theme_color).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/
	$tafri_travel_second_theme_color = get_theme_mod('tafri_travel_second_theme_color');

	if($tafri_travel_second_theme_color != false){
		$custom_css .='#footer, #resmenu-sidebar,.tags p a:hover,.post-navigation .nav-next a:hover, .post-navigation .nav-previous a:hover{';
			$custom_css .='background-color: '.esc_html($tafri_travel_second_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_second_theme_color != false){
		$custom_css .='{';
			$custom_css .='color: '.esc_html($tafri_travel_second_theme_color).';';
		$custom_css .='}';
	}
	if($tafri_travel_second_theme_color != false){
		$custom_css .='{';
			$custom_css .='border-color: '.esc_html($tafri_travel_second_theme_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/
	$tafri_travel_theme_lay = get_theme_mod( 'tafri_travel_theme_options','Default');
    if($tafri_travel_theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .middle-header{';
			$custom_css .='width: 97.3%';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'Wide Layout'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .middle-header{';
			$custom_css .='width: 97.7%';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'Box Layout'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-home-custom #header{';
			$custom_css .=' right: 0;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$tafri_travel_slider_layout = get_theme_mod( 'tafri_travel_slider_opacity_color','0.7');
	if($tafri_travel_slider_layout == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($tafri_travel_slider_layout == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*----------------Slider Content Layout ----------------*/
	$tafri_travel_slider_layout = get_theme_mod( 'tafri_travel_slider_content_option','Center');
    if($tafri_travel_slider_layout == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider .inner_carousel .view-btn a{';
		$custom_css .='padding: 12px 15px; font-size: 12px;';
		$custom_css .='} }';
		$custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 768px){
		#slider .carousel-caption{';
		$custom_css .='top:43%;';
		$custom_css .='} }';
	}else if($tafri_travel_slider_layout == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($tafri_travel_slider_layout == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider .inner_carousel .view-btn a{';
		$custom_css .='padding: 12px 15px; font-size: 12px;';
		$custom_css .='} }';
		$custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 768px){
		#slider .carousel-caption{';
		$custom_css .='top:43%;';
		$custom_css .='} }';
	}

	// css
	$tafri_travel_show_slider = get_theme_mod( 'tafri_travel_slider_hide', false);
	if($tafri_travel_show_slider == false){
		$custom_css .='.page-template-home-custom #header{';
			$custom_css .='position: static; background: #0f2036; width: 100%;';
		$custom_css .='}';
	}
	if($tafri_travel_show_slider == false){
		$custom_css .='.page-template-home-custom .top-header{';
			$custom_css .='border-bottom: 1px solid #26bdf7;';
		$custom_css .='}';
	}

	$tafri_travel_show_header = get_theme_mod( 'tafri_travel_show_hide_topbar', true);
	if($tafri_travel_show_header == true){
		$custom_css .='.top-header{';
			$custom_css .='border-bottom:1px solid #26bdf7;';
		$custom_css .='}';
	}else if($tafri_travel_show_header == false){
		$custom_css .='.top-header{';
			$custom_css .='border-bottom:none;';
		$custom_css .='}';
	}

	/*-------------------------- Button Settings option------------------*/
	$tafri_travel_top_bottom_padding = get_theme_mod('tafri_travel_top_bottom_padding');
	$tafri_travel_left_right_padding = get_theme_mod('tafri_travel_left_right_padding');
	if($tafri_travel_top_bottom_padding != false || $tafri_travel_left_right_padding != false){
		$custom_css .='.read-more-btn a, #slider .inner_carousel .view-btn a, #comments input[type="submit"].submit{';
			$custom_css .='padding-top: '.esc_html($tafri_travel_top_bottom_padding).'px; padding-bottom: '.esc_html($tafri_travel_top_bottom_padding).'px; padding-left: '.esc_html($tafri_travel_left_right_padding).'px; padding-right: '.esc_html($tafri_travel_left_right_padding).'px; display:inline-block;';
		$custom_css .='}';
	}

	$tafri_travel_border_radius = get_theme_mod('tafri_travel_border_radius');
	if($tafri_travel_border_radius != false){
		$custom_css .='.read-more-btn a,#slider .inner_carousel .view-btn a, #comments input[type="submit"].submit{';
			$custom_css .='border-radius: '.esc_html($tafri_travel_border_radius).'px;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/
	$tafri_travel_theme_lay = get_theme_mod( 'tafri_travel_blog_post_layout','Default');
    if($tafri_travel_theme_lay == 'Default'){
		$custom_css .='.page-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'Center'){
		$custom_css .='.page-box, .page-box h2, .post-info, .text p, .page-box .post-link{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.page-box .post-link{';
			$custom_css .='margin-top:25px;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin:10px auto;';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'left'){
		$custom_css .='.page-box, .page-box h2, .post-info, .text p, .page-box .post-link, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.page-box .post-link{';
			$custom_css .='margin:20px 0;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin-bottom:10px;';
		$custom_css .='}';
		$custom_css .='.page-box h2{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$tafri_travel_loader_color_setting = get_theme_mod('tafri_travel_loader_color_setting');

	if($tafri_travel_loader_color_setting != false){
		$custom_css .=' .circle .inner{';
			$custom_css .='border-color: '.esc_html($tafri_travel_loader_color_setting).';';
		$custom_css .='} ';
	}

	$tafri_travel_loader_background_color = get_theme_mod('tafri_travel_loader_background_color');

	if($tafri_travel_loader_background_color != false){
		$custom_css .=' #pre-loader{';
			$custom_css .='background-color: '.esc_html($tafri_travel_loader_background_color).';';
		$custom_css .='} ';
	}

	$tafri_travel_theme_lay = get_theme_mod( 'tafri_travel_preloader_types','Default');
    if($tafri_travel_theme_lay == 'Default'){
		$custom_css .='{';
			$custom_css .='';
		$custom_css .='}';
	}elseif($tafri_travel_theme_lay == 'Circle'){
		$custom_css .='.circle .inner{';
			$custom_css .='width:unset;';
		$custom_css .='}';
	}elseif($tafri_travel_theme_lay == 'Two Circle'){
		$custom_css .='.circle .inner{';
			$custom_css .='width:80%;
    border-right: 5px;';
		$custom_css .='}';
	}

	// Responsive Media
	$tafri_travel_stickyheader = get_theme_mod( 'tafri_travel_enable_disable_preloader', true);
	if($tafri_travel_stickyheader == true && get_theme_mod( 'tafri_travel_loader_setting', true) == false){
    	$custom_css .='#pre-loader{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($tafri_travel_stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#pre-loader{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($tafri_travel_stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#pre-loader{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$tafri_travel_sidebar = get_theme_mod( 'tafri_travel_enable_disable_sidebar',true);
    if($tafri_travel_sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($tafri_travel_sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$tafri_travel_stickyheader = get_theme_mod( 'tafri_travel_enable_disable_topbar',true);
	if($tafri_travel_stickyheader == true && get_theme_mod( 'tafri_travel_show_hide_topbar', true) == false){
    	$custom_css .='.top-header{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($tafri_travel_stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.top-header{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($tafri_travel_stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.top-header{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$tafri_travel_stickyheader = get_theme_mod( 'tafri_travel_enable_disable_fixed_header',false);
	if($tafri_travel_stickyheader == true && get_theme_mod( 'tafri_travel_fixed_header', false) == false){
    	$custom_css .='.fixed-header{';
			$custom_css .='position:static;';
		$custom_css .='} ';
	}
    if($tafri_travel_stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.fixed-header{';
			$custom_css .='position:fixed;';
		$custom_css .='} }';
	}else if($tafri_travel_stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.fixed-header{';
			$custom_css .='position:static;';
		$custom_css .='} }';
	}

	$tafri_travel_sliderbutton = get_theme_mod( 'tafri_travel_enable_disable_slider', false);
	if($tafri_travel_sliderbutton == true && get_theme_mod( 'tafri_travel_slider_hide', false) == false){
    	$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($tafri_travel_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($tafri_travel_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$tafri_travel_sliderbutton = get_theme_mod( 'tafri_travel_show_hide_slider_button',true);
	if($tafri_travel_sliderbutton == true && get_theme_mod( 'tafri_travel_slider_button',true) == false){
    	$custom_css .='.view-btn{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($tafri_travel_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.view-btn{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($tafri_travel_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='.view-btn{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$tafri_travel_sliderbutton = get_theme_mod( 'tafri_travel_enable_disable_scrolltop',true);
	if($tafri_travel_sliderbutton == true && get_theme_mod( 'tafri_travel_hide_show_scroll',true) != true){
    	$custom_css .='.scrollup i{';
			$custom_css .='display:none;';
		$custom_css .='} ';
	}
    if($tafri_travel_sliderbutton == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.scrollup i{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($tafri_travel_sliderbutton == false){
		$custom_css .='@media screen and (max-width:575px){';
		$custom_css .='.scrollup i{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$tafri_travel_copyright_top_bottom_padding = get_theme_mod('tafri_travel_copyright_top_bottom_padding');
	if($tafri_travel_copyright_top_bottom_padding != false){
		$custom_css .='.copyright{';
			$custom_css .='padding-top: '.esc_html($tafri_travel_copyright_top_bottom_padding).'px; padding-bottom: '.esc_html($tafri_travel_copyright_top_bottom_padding).'px;';
		$custom_css .='}';
	}

	$tafri_travel_footer_text_font_size = get_theme_mod('tafri_travel_footer_text_font_size');
	if($tafri_travel_footer_text_font_size != false){
		$custom_css .='.copyright span{';
			$custom_css .='font-size: '.esc_html($tafri_travel_footer_text_font_size).'px;';
		$custom_css .='}';
	}

	// scroll to top setting
	$tafri_travel_scroll_border_radius = get_theme_mod('tafri_travel_scroll_border_radius');
	if($tafri_travel_scroll_border_radius != false){
		$custom_css .='.scrollup i{';
			$custom_css .='border-radius: '.esc_html($tafri_travel_scroll_border_radius).'px;';
		$custom_css .='}';
	}

	$tafri_travel_scroll_top_fontsize = get_theme_mod('tafri_travel_scroll_top_fontsize');
	if($tafri_travel_scroll_top_fontsize != false){
		$custom_css .='.scrollup i{';
			$custom_css .='font-size: '.esc_html($tafri_travel_scroll_top_fontsize).'px;';
		$custom_css .='}';
	}

	$tafri_travel_scroll_top_bottom_padding = get_theme_mod('tafri_travel_scroll_top_bottom_padding');
	$tafri_travel_scroll_left_right_padding = get_theme_mod('tafri_travel_scroll_left_right_padding');
	if($tafri_travel_scroll_top_bottom_padding != false || $tafri_travel_scroll_left_right_padding != false){
		$custom_css .='.scrollup i{';
			$custom_css .='padding-top: '.esc_html($tafri_travel_scroll_top_bottom_padding).'px; padding-bottom: '.esc_html($tafri_travel_scroll_top_bottom_padding).'px; padding-left: '.esc_html($tafri_travel_scroll_left_right_padding).'px; padding-right: '.esc_html($tafri_travel_scroll_left_right_padding).'px;';
		$custom_css .='}';
	}

	// Topbar padding top bottom
	$tafri_travel_topbar_top_bottom_padding = get_theme_mod('tafri_travel_topbar_top_bottom_padding');
	if($tafri_travel_topbar_top_bottom_padding != false){
		$custom_css .='.top-header{';
			$custom_css .='padding-top: '.esc_html($tafri_travel_topbar_top_bottom_padding).'px; padding-bottom: '.esc_html($tafri_travel_topbar_top_bottom_padding).'px;';
		$custom_css .='}';
	}

	// Slider Height 
	$tafri_travel_slider_height_option = get_theme_mod('tafri_travel_slider_height_option');
	if($tafri_travel_slider_height_option != false){
		$custom_css .='#slider img{';
			$custom_css .='height: '.esc_html($tafri_travel_slider_height_option).'px;';
		$custom_css .='}';
	}

	$tafri_travel_padding_top_bottom_slider_content = get_theme_mod('tafri_travel_padding_top_bottom_slider_content');
	$tafri_travel_padding_left_right_slider_content = get_theme_mod('tafri_travel_padding_left_right_slider_content');
	if($tafri_travel_padding_top_bottom_slider_content != false || $tafri_travel_padding_left_right_slider_content != false){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='top: '.esc_html($tafri_travel_padding_top_bottom_slider_content).'%; bottom: '.esc_html($tafri_travel_padding_top_bottom_slider_content).'%;left: '.esc_html($tafri_travel_padding_left_right_slider_content).'%;right: '.esc_html($tafri_travel_padding_left_right_slider_content).'%;';
		$custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$tafri_travel_theme_lay = get_theme_mod( 'tafri_travel_background_image_type','Transparent');
    if($tafri_travel_theme_lay == 'Background'){
		$custom_css .='.page-box, #sidebar aside, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .front-page-content,.background-img-skin, .page-box-single,.pages-te,#destination{';
			$custom_css .='background-color: #fff;';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'Transparent'){
		$custom_css .='{';
			$custom_css .='background-color: transparent;';
		$custom_css .='}';
	}

	// footer widget background
	$tafri_travel_footer_widget_background = get_theme_mod('tafri_travel_footer_widget_background');
	if($tafri_travel_footer_widget_background != false){
		$custom_css .='#footer{';
			$custom_css .='background-color: '.esc_html($tafri_travel_footer_widget_background).';';
		$custom_css .='}';
	}

	$tafri_travel_footer_widget_image = get_theme_mod('tafri_travel_footer_widget_image');
	if($tafri_travel_footer_widget_image != false){
		$custom_css .='#footer{';
			$custom_css .='background: url('.esc_html($tafri_travel_footer_widget_image).');';
		$custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$tafri_travel_navigation_menu_font_size = get_theme_mod('tafri_travel_navigation_menu_font_size');
	if($tafri_travel_navigation_menu_font_size != false){
		$custom_css .='.primary-menu a{';
			$custom_css .='font-size: '.esc_html($tafri_travel_navigation_menu_font_size).'px;';
		$custom_css .='}';
	}

	$tafri_travel_theme_lay = get_theme_mod( 'tafri_travel_menu_text_tranform','Default');
    if($tafri_travel_theme_lay == 'Default'){
		$custom_css .='.primary-menu a,#resmenu-sidebar .primary-menu a{';
			$custom_css .='';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'Uppercase'){
		$custom_css .='.primary-menu a,#resmenu-sidebar .primary-menu a{';
			$custom_css .='text-transform:Uppercase;';
		$custom_css .='}';
	}

	$tafri_travel_theme_lay = get_theme_mod( 'tafri_travel_menu_font_weight','Default');
    if($tafri_travel_theme_lay == 'Default'){
		$custom_css .='.primary-menu a,#resmenu-sidebar .primary-menu a{';
			$custom_css .='';
		$custom_css .='}';
	}else if($tafri_travel_theme_lay == 'Normal'){
		$custom_css .='.primary-menu a,#resmenu-sidebar .primary-menu a{';
			$custom_css .='font-weight: normal;';
		$custom_css .='}';
	}
	
	/*------------ Woocommerce Settings  --------------*/

	$tafri_travel_shop_button_padding_top = get_theme_mod('tafri_travel_shop_button_padding_top', 10);
	if($tafri_travel_shop_button_padding_top != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$custom_css .='padding-top: '.esc_html($tafri_travel_shop_button_padding_top).'px; padding-bottom: '.esc_html($tafri_travel_shop_button_padding_top).'px;';
		$custom_css .='}';
	}

	$tafri_travel_shop_button_padding_left = get_theme_mod('tafri_travel_shop_button_padding_left', 16);
	if($tafri_travel_shop_button_padding_left != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$custom_css .='padding-left: '.esc_html($tafri_travel_shop_button_padding_left).'px; padding-right: '.esc_html($tafri_travel_shop_button_padding_left).'px;';
		$custom_css .='}';
	}

	$tafri_travel_shop_button_border_radius = get_theme_mod('tafri_travel_shop_button_border_radius', 0);
	if($tafri_travel_shop_button_border_radius != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$custom_css .='border-radius: '.esc_html($tafri_travel_shop_button_border_radius).'px;';
		$custom_css .='}';
	}

	$tafri_travel_display_related_products = get_theme_mod('tafri_travel_display_related_products',true);
	if($tafri_travel_display_related_products == false){
		$custom_css .='.related.products{';
			$custom_css .='display: none;';
		$custom_css .='}';
	}

	$tafri_travel_shop_products_border = get_theme_mod('tafri_travel_shop_products_border', true);
	if($tafri_travel_shop_products_border == false){
		$custom_css .='.woocommerce .products li{';
			$custom_css .='border: none;';
		$custom_css .='}';
	}

	$tafri_travel_shop_page_top_padding = get_theme_mod('tafri_travel_shop_page_top_padding',0);
	if($tafri_travel_shop_page_top_padding != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='padding-top: '.esc_html($tafri_travel_shop_page_top_padding).'px !important; padding-bottom: '.esc_html($tafri_travel_shop_page_top_padding).'px !important;';
		$custom_css .='}';
	}

	$tafri_travel_shop_page_left_padding = get_theme_mod('tafri_travel_shop_page_left_padding',0);
	if($tafri_travel_shop_page_left_padding != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='padding-left: '.esc_html($tafri_travel_shop_page_left_padding).'px !important; padding-right: '.esc_html($tafri_travel_shop_page_left_padding).'px !important;';
		$custom_css .='}';
	}

	$tafri_travel_shop_page_border_radius = get_theme_mod('tafri_travel_shop_page_border_radius',0);
	if($tafri_travel_shop_page_border_radius != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='border-radius: '.esc_html($tafri_travel_shop_page_border_radius).'px;';
		$custom_css .='}';
	}

	$tafri_travel_shop_page_box_shadow = get_theme_mod('tafri_travel_shop_page_box_shadow',0);
	if($tafri_travel_shop_page_box_shadow != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='box-shadow: '.esc_html($tafri_travel_shop_page_box_shadow).'px '.esc_html($tafri_travel_shop_page_box_shadow).'px '.esc_html($tafri_travel_shop_page_box_shadow).'px #e4e4e4;';
		$custom_css .='}';
	}
