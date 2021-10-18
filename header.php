<?php
/**
 * The template for displaying the header
 *
 * @package Hub theme
 */

?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
<head <?php liquid_helper()->attr( 'head' ); ?>>

	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/hub/css/init.css" />
	<link rel="stylesheet" href="/wp-content/themes/hub/css/common.css" />
	<link rel="stylesheet" href="/wp-content/themes/hub/css/layout.css" />
	<!-- <link rel="stylesheet" href="/wp-content/themes/hub/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="/wp-content/themes/hub/css/owl.theme.default.css" /> -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="/wp-content/themes/hub/js/html5.js"></script>
	<!-- <script src="/wp-content/themes/hubjs/jquery-1.11.0.min.js"></script> -->
	<script src="/wp-content/themes/hub/js/owl.carousel.min.js"></script>
	<script src="/wp-content/themes/hub/js/jquery.easing.1.3.min.js"></script>
	<script src="/wp-content/themes/hub/js/jquery.appear.js"></script>
</head>

<body <?php body_class(); ?> <?php liquid_helper()->attr( 'body' ); ?>>
	
	<?php
		if (function_exists('wp_body_open')) {
			wp_body_open();
		}
	?>

	<?php liquid_action( 'before' ) ?>

	<div id="wrap">

		<?php
			liquid_action( 'before_header' );
			// liquid_action( 'header' );
			liquid_action( 'after_header' );
		?>

		<main <?php liquid_helper()->attr( 'content' ); ?>>

			<?php liquid_action( 'before_contents_wrap' ); ?>

			<div <?php liquid_helper()->attr( 'contents_wrap' ); ?>>

			<?php liquid_action( 'before_content' ); ?>

			<header id="header">
		<div class="h_logo">
			<a href="index.html" title="Go to Home">
				<img src="/wp-content/uploads/2021/10/공스타-로고-가로형.png" alt="공스타 로고" />
				<h1 class="blind">GONG STAR</h1>
			</a>
		</div>
		<hr />
		<nav class="h_gnb">
			<h2 class="blind">GNB</h2>
			<i class="hg_icon"></i>
			<button type="button" class="hg_btn"><span class="blind">Menu Button</span></button>
			<div class="hg_wrap">
				<ul>
					<li>
						<a href="index.html" class="on"><span>HOME</span></a>
					</li>
					<li>
						<a href="about/index.html"><span>공스타 소개</span></a>
					</li>
					<li>
						<a href="service/index.html"><span>인터렉티브</span></a>
					</li>
					<li>
						<a href="portfolio/index.html"><span>액티브</span></a>
					</li>
					<li>
						<a href="contact/index.html"><span>네트워크</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- <header class="header site-header main-header main-header-overlay  " id="header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
<div class="lqd-head-sec-wrap pos-rel    vc_custom_1588843983404 " style="">
<div class="container-fluid lqd-head-container d-flex flex-wrap align-items-stretch">
<div class="lqd-head-sec d-flex flex-column w-100">
<div class="row lqd-head-row d-flex align-items-stretch"><div class="col lqd-head-col  "><style>.ld_header_image_616c3567ceee8{padding-top:30px;padding-inline-end:0px;padding-bottom:30px;padding-inline-start:0px;}.is-stuck .ld_header_image_616c3567ceee8{padding-top:30px;padding-inline-end:0px;padding-bottom:30px;padding-inline-start:0px;}</style>
<div id="ld_header_image_616c3567ceee8" class="header-module module-logo no-rotate navbar-brand-plain ld_header_image_616c3567ceee8">
<a class="navbar-brand" href="https://asymmetric-corporatepro.liquid-themes.com/" rel="home"><span class="navbar-brand-inner"> <img class="logo-default" src="https://asymmetric-corporatepro.liquid-themes.com/wp-content/uploads/2020/04/logo.svg" alt="LandingHub WordPress Theme"></span></a>
</div></div><div class="col lqd-head-col  "></div><div class="col lqd-head-col   text-right text-lg-right"><style>.ld_header_menu_616c3567cf2ab > li > a, .navbar-fullscreen .ld_header_menu_616c3567cf2ab > li > a{color:rgb(0, 0, 0);}.ld_header_menu_616c3567cf2ab > li:hover > a, .navbar-fullscreen .ld_header_menu_616c3567cf2ab > li > a:hover{color:rgba(0, 0, 0, 0.75);}.ld_header_menu_616c3567cf2ab > li.is-active > a, .ld_header_menu_616c3567cf2ab > li.current_page_item > a, .ld_header_menu_616c3567cf2ab > li.current-menu-item > a, .ld_header_menu_616c3567cf2ab > li.current-menu-ancestor > a, .navbar-fullscreen .ld_header_menu_616c3567cf2ab > li.is-active > a, .navbar-fullscreen .ld_header_menu_616c3567cf2ab > li.current_page_item > a, .navbar-fullscreen .ld_header_menu_616c3567cf2ab > li.current-menu-item > a, .navbar-fullscreen .ld_header_menu_616c3567cf2ab > li.current-menu-ancestor > a{color:rgba(0, 0, 0, 0.75);}.ld_header_menu_616c3567cf2ab{--lqd-menu-items-right-padding:30px;--lqd-menu-items-left-padding:30px;}</style><div class="header-module module-primary-nav pos-stc">
<div class="collapse navbar-collapse none  " id="main-header-collapse" aria-expanded="false">
<ul id="primary-nav" class="main-nav lqd-menu-counter-right ld_header_menu_616c3567cf2ab main-nav-hover-none nav align-items-lg-stretch justify-content-lg-start" data-submenu-options="{&quot;toggleType&quot;:&quot;fade&quot;,&quot;handler&quot;:&quot;mouse-in-out&quot;}"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4382 current_page_item menu-item-4504"><a href="https://asymmetric-corporatepro.liquid-themes.com/" aria-current="page"><span class="link-txt"><span class="link-ext"></span><span class="txt">Home</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503"><a href="https://asymmetric-corporatepro.liquid-themes.com/solutions/"><span class="link-txt"><span class="link-ext"></span><span class="txt">Solutions</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4849"><a href="https://asymmetric-corporatepro.liquid-themes.com/services/"><span class="link-txt"><span class="link-ext"></span><span class="txt">Services</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4818"><a href="https://asymmetric-corporatepro.liquid-themes.com/news/"><span class="link-txt"><span class="link-ext"></span><span class="txt">News</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5004"><a href="https://asymmetric-corporatepro.liquid-themes.com/contact/"><span class="link-txt"><span class="link-ext"></span><span class="txt">Contact</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
</ul> </div>
</div><style>.ld_header_separator_616c3567cf9d2{width:1px;margin-inline-start:11px;margin-inline-end:11px;}.ld_header_separator_616c3567cf9d2 .ld-v-sep-inner{background:rgba(0, 0, 0, 0.12);}</style><div class="header-module">
<div id="ld_header_separator_616c3567cf9d2" class="ld-module-v-sep ld_header_separator_616c3567cf9d2">
<span class="ld-v-sep-inner"></span>
</div>
</div><div class="header-module module-button">
<style>.ld_button_616c3567cfdcf.btn-icon-solid .btn-icon{background:rgb(255, 249, 2);}.ld_button_616c3567cfdcf.btn-icon-circle.btn-icon-ripple .btn-icon:before{border-color:rgb(255, 249, 2);}.ld_button_616c3567cfdcf.btn-icon-solid:hover .btn-icon{background:rgb(255, 255, 255);}.ld_button_616c3567cfdcf{background-color:rgb(255, 249, 2);border-color:rgb(255, 249, 2);color:rgb(0, 0, 0);line-height:1.5em !important;font-size:16px !important;font-weight:700 !important;}.ld_button_616c3567cfdcf:hover{background-color:rgb(255, 255, 255);border-color:rgb(255, 255, 255);color:rgb(0, 0, 0);}.ld_button_616c3567cfdcf .btn-gradient-bg-hover{background:-webkit-linear-gradient(to right, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);background:linear-gradient(to right, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%);}.ld_button_616c3567cfdcf .btn-gradient-border defs stop:first-child{stop-color:rgb(255, 249, 2);}.ld_button_616c3567cfdcf .btn-gradient-border defs stop:last-child{stop-color:rgb(255, 249, 2);}.ld_button_616c3567cfdcf:hover .btn-gradient-border defs stop:first-child{stop-color:rgb(255, 255, 255);}.ld_button_616c3567cfdcf:hover .btn-gradient-border defs stop:last-child{stop-color:rgb(255, 255, 255);}</style><a href="#header-contact-modal" class="btn btn-solid btn-hover-txt-liquid-x btn-sm circle border-none btn-has-label ld_header_button_616c3567cfaff ld_button_616c3567cfdcf vc_custom_1615365450956" data-lity="#header-contact-modal">
<span>
<span class="btn-txt split-text-applied" data-text="Let's talk" data-transition-delay="true" data-delay-options="{&quot;elements&quot;: &quot;.lqd-chars&quot;, &quot;delayType&quot;: &quot;animation&quot;, &quot;startDelay&quot;: 0, &quot;delayBetween&quot;: 32.5}" data-split-text="true" data-split-options="{&quot;type&quot;: &quot;chars, words&quot;}"><div style="position:relative;display:inline-block;" class="lqd-words split-unit lqd-unit-animation-done"><span data-text="Let's" class="split-inner"><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="L" class="split-inner">L</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="e" class="split-inner">e</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="t" class="split-inner">t</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="'" class="split-inner">'</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="s" class="split-inner">s</span></div></span></div> <div style="position:relative;display:inline-block;" class="lqd-words split-unit lqd-unit-animation-done"><span data-text="talk" class="split-inner"><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="t" class="split-inner">t</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="a" class="split-inner">a</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="l" class="split-inner">l</span></div><div style="position:relative;display:inline-block;" class="lqd-chars split-unit lqd-unit-animation-done"><span data-text="k" class="split-inner">k</span></div></span></div></span>
</span>
</a>
</div></div> </div> </div> </div></div><div class="lqd-stickybar-wrap lqd-stickybar-right    vc_custom_1588844028678 ">
<div class="lqd-stickybar"><div class="col lqd-head-col   text-left text-left"></div><div class="col lqd-head-col  "><style>.ld_header_scroll_indicator_616c3567d0f08 a{color:rgb(0, 0, 0);}.ld_header_scroll_indicator_616c3567d0f08 .lqd-scrl-indc-line{background-color:rgba(0, 0, 0, 0.3);}</style><div class="header-module">
<div class="lqd-scrl-indc ld_header_scroll_indicator_616c3567d0f08" id="ld_header_scroll_indicator_616c3567d0f08" data-lqd-scroll-indicator="true">
<a href="#wrap" data-localscroll="true">
<span class="lqd-scrl-indc-inner">
<span class="lqd-scrl-indc-txt">scroll</span>
<span class="lqd-scrl-indc-line">
<span class="lqd-scrl-indc-el" style="transform: translate(0px, 0px);"></span>
</span>
</span>
</a>
</div>
</div></div><div class="col lqd-head-col  "></div> </div></div><div class="lqd-head-sec-wrap pos-rel     " style="">
<div class="container lqd-head-container d-flex flex-wrap align-items-stretch">
<div class="lqd-head-sec d-flex flex-column w-100">
<div class="row lqd-head-row d-flex align-items-stretch"><div class="col lqd-head-col  ">
<div id="header-contact-modal" class="lqd-modal lity-hide" data-modal-type="fullscreen">
<div class="lqd-modal-inner">
<div class="lqd-modal-head">
<h2></h2>
</div>
<div class="lqd-modal-content">
<style>@media (min-width: 992px) { .liquid-row-responsive-616c3567d38f6 {padding-top:80px !important; padding-bottom:80px !important;  }  }  </style><div data-row-bg="https://asymmetric-corporatepro.liquid-themes.com/wp-content/uploads/2021/03/bg-2@2x-scaled-1.jpeg?id=5012" style="background-position:center center !important;" class="vc_row wpb_row vc_inner vc_row-fluid h-vh-100 align-items-center vc_custom_1615365430643 liquid-row-responsive-616c3567d38f6 liquid-row-shadowbox-616c3567d3911 vc_row-has-fill vc_row-o-equal-height vc_row-o-content-middle vc_row-flex"><span class="row-bg-loader"></span><div class="row-bg-wrap bg-not-loaded"><div class="row-bg-inner"><figure class="row-bg"></figure></div></div><div class="ld-container container"><div class="row ld-row"><style>@media (min-width: 992px) { .liquid-column-responsive-616c3567ddabf > .vc_column-inner > .wpb_wrapper {padding-right:10% !important;  }  } </style><div class="wpb_column vc_column_container vc_col-sm-6 liquid-column-616c3567ddabc liquid-column-responsive-616c3567ddabf"><div class="vc_column-inner"><div class="wpb_wrapper vc_custom_1615219219533"><div class="wpb_wrapper-inner"><style>.ld_fancy_heading_616c3567ddc35 h2{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567ddc35 h2 {font-size:34px; } @media (min-width: 768px) { .ld_fancy_heading_616c3567ddc35 h2 {font-size:48px; }  } @media (min-width: 992px) { .ld_fancy_heading_616c3567ddc35 h2 {font-size:122px; }  } .ld_fancy_heading_616c3567ddc35 h2 {line-height:1em; } @media (min-width: 768px) { .ld_fancy_heading_616c3567ddc35 h2 {line-height:0.75em; }  } .ld_fancy_heading_616c3567ddc35 h2 {--element-line-height:1em; } @media (min-width: 768px) { .ld_fancy_heading_616c3567ddc35 h2 {--element-line-height:0.75em; }  } .ld_fancy_heading_616c3567ddc35 h2 {font-weight:500; } .ld_fancy_heading_616c3567ddc35 h2 {margin-bottom:0.5em !important;  } .ld_fancy_heading_616c3567ddc35 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567ddc35 h2 {font-size:34px; } @media (min-width: 768px) { .ld_fancy_heading_616c3567ddc35 h2 {font-size:48px; }  } @media (min-width: 992px) { .ld_fancy_heading_616c3567ddc35 h2 {font-size:122px; }  } .ld_fancy_heading_616c3567ddc35 h2 {line-height:1em; } @media (min-width: 768px) { .ld_fancy_heading_616c3567ddc35 h2 {line-height:0.75em; }  } .ld_fancy_heading_616c3567ddc35 h2 {--element-line-height:1em; } @media (min-width: 768px) { .ld_fancy_heading_616c3567ddc35 h2 {--element-line-height:0.75em; }  } .ld_fancy_heading_616c3567ddc35 h2 {font-weight:500; } .ld_fancy_heading_616c3567ddc35 h2 {margin-bottom:0.5em !important;  } </style><div class="ld-fancy-heading ld_fancy_heading_616c3567ddc35">
<h2 class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> Send a <span style="font-family: 'DM Serif Text', serif;font-style: italic">message.</span></span></span></h2></div><style>.ld_fancy_heading_616c3567de9c8 p {margin-bottom:2.5em !important;  } .ld_fancy_heading_616c3567de9c8 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567de9c8 p {margin-bottom:2.5em !important;  } </style><div class="ld-fancy-heading ld_fancy_heading_616c3567de9c8">
<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> We’re here to answer any question you may have.</span></span></p></div></div></div></div></div><style>@media (min-width: 992px) { .liquid-column-responsive-616c3567df560 > .vc_column-inner > .wpb_wrapper {padding-top:45px !important; padding-right:65px !important; padding-bottom:45px !important; padding-left:65px !important;  }  } </style><div class="wpb_column vc_column_container vc_col-sm-6 liquid-column-616c3567df55e liquid-column-responsive-616c3567df560 vc_col-has-fill"><div class="vc_column-inner"><div class="wpb_wrapper vc_custom_1615219159553"><div class="wpb_wrapper-inner"><style>.ld_cf7_616c3567df658 input,.ld_cf7_616c3567df658 textarea,.ld_cf7_616c3567df658 .ui-button.ui-selectmenu-button{font-size:13px;}.ld_cf7_616c3567df658 input[type="submit"]{font-size:17px;line-height:1.5em;font-weight:500;color:rgb(0, 0, 0);}.ld_cf7_616c3567df658 input, .ld_cf7_616c3567df658 select, .ld_cf7_616c3567df658 textarea, .ld_cf7_616c3567df658 .ui-button.ui-selectmenu-button, .ld_cf7_616c3567df658 .wpcf7-form-control-wrap > i, .ld_cf7_616c3567df658 .wpcf7-radio{color:rgb(0, 0, 0);}.ld_cf7_616c3567df658 input:focus, .ld_cf7_616c3567df658 select:focus, .ld_cf7_616c3567df658 textarea:focus, .ld_cf7_616c3567df658 .ui-button.ui-selectmenu-button:hover, .wpcf7-acceptance .wpcf7-list-item-label:after{color:rgb(0, 0, 0);}.ld_cf7_616c3567df658 input, .ld_cf7_616c3567df658 select, .ld_cf7_616c3567df658 textarea, .ld_cf7_616c3567df658 .ui-button.ui-selectmenu-button, .ld_cf7_616c3567df658 .wpcf7-acceptance .wpcf7-list-item-label:before{border-color:rgba(0, 0, 0, 0.12);}.ld_cf7_616c3567df658 input:focus, .ld_cf7_616c3567df658 select:focus, .ld_cf7_616c3567df658 textarea:focus, .ld_cf7_616c3567df658 .ui-button.ui-selectmenu-button:hover{border-color:rgb(0, 0, 0);}.ld_cf7_616c3567df658 .wpcf7-form-control-wrap{margin-bottom:13px;}</style><div id="ld_cf7_616c3567df658" class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block ld_cf7_616c3567df658 vc_custom_1615365738756">
<div role="form" class="wpcf7" id="wpcf7-f5011-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/#wpcf7-f5011-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="5011">
<input type="hidden" name="_wpcf7_version" value="5.3.2">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5011-o1">
<input type="hidden" name="_wpcf7_container_post" value="0">
<input type="hidden" name="_wpcf7_posted_data_hash" value="">
</div>
<p><span class="wpcf7-form-control-wrap text-775"><input type="text" name="text-775" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name"></span><span class="wpcf7-form-control-wrap email-550"><input type="email" name="email-550" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email Address"></span><span class="wpcf7-form-control-wrap text-312"><input type="text" name="text-312" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject"></span><span class="wpcf7-form-control-wrap textarea-138"><textarea name="textarea-138" cols="10" rows="4" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your message"></textarea></span><span class="wpcf7-form-control-wrap acceptance-14"><span class="wpcf7-form-control wpcf7-acceptance"><span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-14" value="1" aria-invalid="false"><span class="wpcf7-list-item-label">I am bound by the terms of the Service I accept Privacy Policy</span></label></span></span></span><input type="submit" value="Send email" class="wpcf7-form-control wpcf7-submit" disabled=""><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3 liquid-column-616c3567dffc4"><div class="vc_column-inner"><div class="wpb_wrapper "><div class="wpb_wrapper-inner"><style>.ld_fancy_heading_616c3567e00b3 h6{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567e00b3 h6 {font-size:13px; } .ld_fancy_heading_616c3567e00b3 h6 {font-weight:700; } .ld_fancy_heading_616c3567e00b3 h6 {letter-spacing:0.1em; } .ld_fancy_heading_616c3567e00b3 h6 {margin-bottom:1.25em !important;  } .ld_fancy_heading_616c3567e00b3 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567e00b3 h6 {font-size:13px; } .ld_fancy_heading_616c3567e00b3 h6 {font-weight:700; } .ld_fancy_heading_616c3567e00b3 h6 {letter-spacing:0.1em; } .ld_fancy_heading_616c3567e00b3 h6 {margin-bottom:1.25em !important;  } </style><div class="ld-fancy-heading text-uppercase ld_fancy_heading_616c3567e00b3">
<h6 class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> careers</span></span></h6></div><style>.ld_fancy_heading_616c3567e0482 p{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567e0482 p {font-size:16px; } .ld_fancy_heading_616c3567e0482 p {line-height:1.18em; } .ld_fancy_heading_616c3567e0482 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e0482 p {margin-bottom:0.75em !important;  } .ld_fancy_heading_616c3567e0482 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567e0482 p {font-size:16px; } .ld_fancy_heading_616c3567e0482 p {line-height:1.18em; } .ld_fancy_heading_616c3567e0482 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e0482 p {margin-bottom:0.75em !important;  } </style><div class="ld-fancy-heading ld_fancy_heading_616c3567e0482">
<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> Would you like to join our growing team?</span></span></p></div><style>.ld_fancy_heading_616c3567e05c6 p{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567e05c6 p {font-size:16px; } .ld_fancy_heading_616c3567e05c6 p {line-height:1.18em; } .ld_fancy_heading_616c3567e05c6 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e05c6 p {font-weight:700; } .ld_fancy_heading_616c3567e05c6 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567e05c6 p {font-size:16px; } .ld_fancy_heading_616c3567e05c6 p {line-height:1.18em; } .ld_fancy_heading_616c3567e05c6 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e05c6 p {font-weight:700; } </style><div class="ld-fancy-heading ld_fancy_heading_616c3567e05c6">
<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> careers@hub.com</span></span></p></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3 liquid-column-616c3567e072b"><div class="vc_column-inner"><div class="wpb_wrapper "><div class="wpb_wrapper-inner"><style>.ld_fancy_heading_616c3567e0813 h6{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567e0813 h6 {font-size:13px; } .ld_fancy_heading_616c3567e0813 h6 {font-weight:700; } .ld_fancy_heading_616c3567e0813 h6 {letter-spacing:0.1em; } .ld_fancy_heading_616c3567e0813 h6 {margin-bottom:1.25em !important;  } .ld_fancy_heading_616c3567e0813 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567e0813 h6 {font-size:13px; } .ld_fancy_heading_616c3567e0813 h6 {font-weight:700; } .ld_fancy_heading_616c3567e0813 h6 {letter-spacing:0.1em; } .ld_fancy_heading_616c3567e0813 h6 {margin-bottom:1.25em !important;  } </style><div class="ld-fancy-heading text-uppercase ld_fancy_heading_616c3567e0813">
<h6 class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> Feedbacks</span></span></h6></div><style>.ld_fancy_heading_616c3567e0956 p{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567e0956 p {font-size:16px; } .ld_fancy_heading_616c3567e0956 p {line-height:1.18em; } .ld_fancy_heading_616c3567e0956 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e0956 p {margin-bottom:0.75em !important;  } .ld_fancy_heading_616c3567e0956 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567e0956 p {font-size:16px; } .ld_fancy_heading_616c3567e0956 p {line-height:1.18em; } .ld_fancy_heading_616c3567e0956 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e0956 p {margin-bottom:0.75em !important;  } </style><div class="ld-fancy-heading ld_fancy_heading_616c3567e0956">
<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> Have a project in mind? Send a message.</span></span></p></div><style>.ld_fancy_heading_616c3567e0a75 p{color:rgb(0, 0, 0);}.ld_fancy_heading_616c3567e0a75 p {font-size:16px; } .ld_fancy_heading_616c3567e0a75 p {line-height:1.18em; } .ld_fancy_heading_616c3567e0a75 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e0a75 p {font-weight:700; } .ld_fancy_heading_616c3567e0a75 .lqd-highlight-inner{height:0.275em;bottom:0px;}.ld_fancy_heading_616c3567e0a75 p {font-size:16px; } .ld_fancy_heading_616c3567e0a75 p {line-height:1.18em; } .ld_fancy_heading_616c3567e0a75 p {--element-line-height:1.18em; } .ld_fancy_heading_616c3567e0a75 p {font-weight:700; } </style><div class="ld-fancy-heading ld_fancy_heading_616c3567e0a75">
<p class="ld-fh-element lqd-highlight-underline lqd-highlight-grow-left text-decoration-default"><span class="ld-fh-txt"><span class="ld-fh-txt-inner"> info@hub.com</span></span></p></div></div></div></div></div></div></div></div>
</div>
<div class="lqd-modal-foot"></div>
</div>
</div></div> </div> </div> </div></div><div class="lqd-mobile-sec">
<div class="lqd-mobile-sec-inner navbar-header d-flex align-items-stretch">
<div class="lqd-mobile-modules-container"></div>
<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-ld-toggle="true" data-toggle="collapse" data-target="#lqd-mobile-sec-nav" aria-expanded="false" data-toggle-options="{ &quot;changeClassnames&quot;: {&quot;html&quot;: &quot;mobile-nav-activated overflow-hidden&quot;} }">
<span class="sr-only">Toggle navigation</span>
<span class="bars">
<span class="bars-inner">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</span>
</span>
</button>
<a class="navbar-brand" href="https://asymmetric-corporatepro.liquid-themes.com/">
<span class="navbar-brand-inner">
<img class="logo-default" src="https://asymmetric-corporatepro.liquid-themes.com/wp-content/uploads/2020/04/logo.svg" alt="LandingHub WordPress Theme">
</span>
</a>
</div>
<div class="lqd-mobile-sec-nav">
<div class="collapse navbar-collapse" id="lqd-mobile-sec-nav" aria-expanded="false"><ul id="primary-nav" class="main-nav main-nav-hover-underline-1 nav"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4382 current_page_item menu-item-4504"><a href="https://asymmetric-corporatepro.liquid-themes.com/" aria-current="page"><span class="link-txt"><span class="link-ext"></span><span class="txt">Home</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4503"><a href="https://asymmetric-corporatepro.liquid-themes.com/solutions/"><span class="link-txt"><span class="link-ext"></span><span class="txt">Solutions</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4849"><a href="https://asymmetric-corporatepro.liquid-themes.com/services/"><span class="link-txt"><span class="link-ext"></span><span class="txt">Services</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4818"><a href="https://asymmetric-corporatepro.liquid-themes.com/news/"><span class="link-txt"><span class="link-ext"></span><span class="txt">News</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5004"><a href="https://asymmetric-corporatepro.liquid-themes.com/contact/"><span class="link-txt"><span class="link-ext"></span><span class="txt">Contact</span><span class="submenu-expander"> <i class="lqd-icn-ess icon-ion-ios-arrow-down"></i> </span></span></a></li>
</ul></div>
</div>
</div></header> -->
