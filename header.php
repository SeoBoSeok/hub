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
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
	<script src="/wp-content/themes/hub/js/html5.js"></script>
	<script src="/wp-content/themes/hub/js/jquery-1.11.0.min.js"></script>
	<script src="/wp-content/themes/hub/js/owl.carousel.min.js"></script>
	<script src="/wp-content/themes/hub/js/jquery.easing.1.3.min.js"></script>
	<script src="/wp-content/themes/hub/js/jquery.appear.js"></script>
	<style>
		#lqd-contents-wrap {padding-left:0; padding-right: 0;}
	</style>
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
		<?php if(false) { ?>
		<section id="main_image_bg"></section>
		<?php } ?>
		<main <?php liquid_helper()->attr( 'content' ); ?>>

			<?php liquid_action( 'before_contents_wrap' ); ?>

			<div <?php liquid_helper()->attr( 'contents_wrap' ); ?>>

			<?php liquid_action( 'before_content' ); ?>

			<header id="header">
			<div class="h_logo">
				<a href="/" title="Go to Home">
					<img src="/wp-content/uploads/2021/11/gonstar_logo.png" alt="공스타 로고" />
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
							<a href="/" class="on"><span>HOME</span></a>
						</li>
						<li>
							<a href="/introduce"><span>공스타 소개</span></a>
						</li>
						<li>
							<a href="/category/interactive"><span>콘텐츠</span></a>
						</li>
						<li>
							<a href="/category/active"><span>플레이</span></a>
						</li>
						<li>
							<a href="/category/network"><span>네트워크</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>