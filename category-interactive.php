<?php
/**
 * The template for displaying categories pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header();

	if ( have_posts() ) :

		// get_template_part( 'templates/category', 'layout' );

	// If no content, include the "No posts found" template.
	else :

		// get_template_part( 'templates/content/error' );

	endif;
	?>
<style>
	.titlebar {display: none !important;}
</style>
<style type="text/css">
		#contents .c_intro,
		#contents .c_intro .wrap,
		#contents .c_intro .ci_visual,
		#contents .c_intro .ci_visual .civ_slide,
		#contents .c_intro .ci_visual .civ_slide .item {
			min-height: 100vh;
		}
		#contents .c_intro .ci_slogan .cis_wrap {
			top: calc(50% - 30px);
			height: initial;
			margin-top: 0;
			transform: translate(0, -50%);
		}
		#contents .c_intro .ci_slogan .cis_wrap:before {
			content: none;
		}
		#contents .c_intro .ci_slogan .cis_wrap h3 {
			position: relative;
			width: inherit;
			height: inherit;
			top: inherit;
			margin-top: 0;
			color: #1d1d1d;
			font-size: 50px;
			line-height: 1.5;
		}
		#contents .c_intro .ci_slogan .cis_wrap h3.underline:before {
			content: "";
			position: absolute;
			bottom: 10px;
			width: 100%;
			height: 28px;
			background-color: #f9e032;
			z-index: -1;
		}
		#contents .c_intro .ci_slogan .cis_wrap button {
			position: relative;
			margin-top: 68px;
			left: 60px;
			width: 55px;
		}
		#contents .c_intro .ci_slogan .cis_wrap button img {
			width: 100%;
		}
		#contents .c_intro .ci_slogan .cis_wrap img.logo {
			display: block;
			left: 60px;
			position: relative;
			width: 50px;
			margin-bottom: 42px;
		}

		@media (max-width: 1180px) {
			#contents .c_intro .ci_slogan .cis_wrap button,
			#contents .c_intro .ci_slogan .cis_wrap img.logo {
				left: 35px;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3 {
				font-size: 34px;
			}
		}
		@media (max-width: 800px) {
			#contents .c_intro .ci_slogan {
				display: block;
				left: 0;
				z-index: 1;
				pointer-events: none;
			}
			#contents .c_intro .ci_slogan .cis_wrap {
				top: 130px;
				transform: inherit;
			}
			#contents .c_intro .ci_slogan .cis_wrap img.logo,
			#contents .c_intro .ci_slogan .cis_wrap button {
				display: none;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3 {
				font-size: 35px;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3.underline:before {
				bottom: 6px;
				height: 11px;
				background-color: white;
			}
		}
		@media (max-width: 560px) {
			#aside .a_quick {
				left: -11px;
			}
			#contents .c_intro .ci_slogan .cis_wrap {
				top: 120px;
			}
			#contents .c_intro .ci_slogan .cis_wrap h3 {
				font-size: 25px;
			}
		}
	</style>
<div id="wrap" class="main">
	<!-- Header S -->
	<!-- <header id="header">
		<div class="h_logo">
			<a href="index.html" title="Go to Home">
				<i class="hl_n"></i><i class="hl_e"></i><i class="hl_w"></i><i class="hl_b"></i><i class="hl_i"></i><i class="hl_r"></i><i class="hl_d"></i><i class="hl_bar"></i>
				<h1 class="blind"></h1>
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
						<a href="index.html" class="on"><span>인덱스</span></a>
					</li>
					<li>
						<a href="about/index.html"><span>공스타 소개</span></a>
					</li>
					<li>
						<a href="service/index.html"><span>서비스 소개</span></a>
					</li>
					<li>
						<a href="portfolio/index.html"><span>포트폴리오</span></a>
					</li>
					<li>
						<a href="contact/index.html"><span>상담신청</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header> -->
	<!-- Header E -->
	<hr />
	<!-- Aside S -->
	<aside id="aside">
		<div class="a_quick">
			<ul>
				<li><a href="#location"><i class="aq_icon location"></i><span class="blind">Location</span></a></li>
				<li><a href="mailto:info@.co.kr"><i class="aq_icon mail"></i><span class="blind">Send to mail</span></a></li>
			</ul>
		</div>
		<div class="a_customer">
			<h2 class="ac_title">SEARCH</h2>
			<a href="tel:0264044224" class="">
				<svg data-v-ae75f7f2="" data-v-9760bdba="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" class="ico_search"><g data-v-ae75f7f2="" fill="none" fill-rule="evenodd"><g data-v-ae75f7f2="" stroke-width="1.6"><g data-v-ae75f7f2="" transform="translate(-308 -16) translate(312 20)"><circle data-v-ae75f7f2="" cx="8.944" cy="8.944" r="8.944"></circle> <path data-v-ae75f7f2="" d="M14.987 14.987L21.017 21.017"></path></g></g></g></svg>
			</a>
		</div>
	</aside>
	<!-- Aside E -->
	<hr />
	<!-- Contents S -->
	<div id="contents">
		<div id="portfolio" class="c_position"></div>
		<section class="c_intro height">
			<div class="wrap height">
				<div class="ci_visual">
					<div class="civ_slide owl-carousel">
						<div class="item height t1">
							<div class="civ_wrap">
								<strong class="counter">447</strong>
							</div>
						</div>
						<div class="item height t2">
							<div class="civ_wrap">
								<a href="#!" class="btn">VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="ci_slogan">
					<div class="cis_wrap">
						<img src="/wp-content/themes/hub/images/new/logo.png" class="logo">
						<div><h3 class="underline">공주의 모든 정보</h3></div>
						<div><h3>공스타에서 확인하세요</h3></div>
						<!-- <p>
							!-- <span><strong>공스타는 E-비즈니스 마케팅 에이전시 입니다.</strong></span>
							<span>온라인 서비스 컨설팅과 홈페이지, 어플리케이션, 솔루션 개발 서비스를 제공하고 있습니다.</span> --
						</p> -->
						<!-- <a href="about/index.html" class="btn arrow">MORE</a> -->
						<button><img src="/wp-content/themes/hub/images/new/arrow-right-wh.png"></button>
					</div>
				</div>
			</div>
			<div class="ci_scroll">
				<a href="#portfolio" class="scroll"><i></i><span>SCROLL</span></a>
			</div>
		</section>
	</div>
	<!-- Contents E -->
	<hr />

	<!-- 이쪽에 contents 영역 제작 부탁드립니다 -->
	<!-- 따로 제작이 편하시면 다른 형식으로 새로 작업하셔도 됩니다^^. -->
	
	<!-- 참고 사이트 (헤더, 메인슬라이더, 푸터) : http://www.newbird.co.kr/index.html -->
	<!-- 참고 사이트 (메인 컨텐츠) : https://www.jobda.im/ -->

	<!-- 감사합니다 -->


	<!-- Contents S -->
	<style type="text/css">
		@font-face {
			font-family: "AppleSDGothicNeo";
			src: url("/wp-content/themes/hub/fonts/AppleSDGothicNeoH.ttf") format('truetype');
			font-weight: 900;
		}
		@font-face {
			font-family: "AppleSDGothicNeo";
			src: url("/wp-content/themes/hub/fonts/AppleSDGothicNeoB.ttf") format('truetype');
			font-weight: 700;
		}
		@font-face {
			font-family: "AppleSDGothicNeo";
			src: url("/wp-content/themes/hub/fonts/AppleSDGothicNeoM.ttf") format('truetype');
			font-weight: 500;
		}
		@font-face {
			font-family: "AppleSDGothicNeo";
			src: url("/wp-content/themes/hub/fonts/AppleSDGothicNeoL.ttf") format('truetype');
			font-weight: 200;
		}
		@font-face {
			font-family: "SCDream3";
			src: url("/wp-content/themes/hub/fonts/SCDream3.otf") format('opentype');
		}

		button.dots {
			position: absolute;
			bottom: 23px;
			right: 14px;
			display: inline-block;
			width: 13px;
			height: 7px;
			border: none;
			background: transparent;
			padding: 5px;
			box-sizing: content-box;
		}
		button.dots:before,
		button.dots:after,
		button.dots span {
			content: "";
			width: 12%;
			height: 15%;
			border-radius: 100px;
			position: absolute;
			left: 0px;
			background: #323537;
			transform: rotate(0deg);
			transition: all 0.4s;
			left: 1%;
			right: 1%;
			margin: 0 auto;
		}
		button.dots:before {
			bottom: 10%;
			margin-bottom: 0px;
		}
		button.dots:after {
			top: 10%;
			margin-top: 0px;
		}
		button.dots span {
			top: 50%;
			margin-top: -2px;
		}

		#contents-2 {
			min-height: 1000px;
			font-family: "AppleSDGothicNeo", sans-serif;
		}
		#contents-2 .c_contents {
			padding-top: 200px;
			background-color: white;
		}
		#contents-2 .c_contents .contents-header-inner {
			display: grid;
			/* grid-template-columns: repeat(2, auto); */
			grid-template-columns: 246px auto;
			gap: 30px;
			align-items: center;
			justify-items: center;
			justify-content: start;
		}
		#contents-2 .c_contents .contents-header img {
			width: 100%;
			max-width: 300px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu {
			margin-top: 40px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .title {
			font-size: 40px;
			font-weight: 800;
			line-height: 1;
			color: #1d1d1d;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .title span {
			display: inline-block;
			vertical-align: middle;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .title span.image {
			width: 40px;
			font-size: 0;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .menu {
			display: grid;
			grid-template-columns: repeat(3, auto);
			gap: 11px;
			align-items: center;
			justify-items: center;
			margin-top: 15px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .menu .menu-item {
			width: 100%;
			min-width: 80px;
			max-width: 150px;
			padding: 17px 0px;
			border-radius: 35px;
			font-size: 15px;
			font-weight: 900;
			color: #1d1d1d;
			background-color: #e7e7e7;
		}
		#contents-2 .c_contents .card-list {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-template-rows: repeat(auto-fit, minmax(0, auto));
			gap: 17px 28px;
			grid-auto-flow: dense;
		}
		#contents-2 .c_contents .card-list .card-item {
			position: relative;
			color: #323537;
			border-radius: 10px;
			box-shadow: 1.6px 6.8px 9px 0 rgba(65, 65, 65, 0.19);
			overflow: hidden;
		}
		#contents-2 .c_contents .card-list .card-item.right-circle {
			border-top-right-radius: 50%;
		}
		#contents-2 .c_contents .card-list .card-item .image {
			position: relative;
			overflow: hidden;
		}
		#contents-2 .c_contents .card-list .card-item .image.bg-effect-1:before,
		#contents-2 .c_contents .card-list .card-item .image.bg-effect-1:after {
			content: "";
			position: absolute;
			top: 0;
			width: 200%;
			background-color: transparent;
			box-shadow: 0 100px 0 0 rgba(255, 255, 255, 0.8);
		}
		#contents-2 .c_contents .card-list .card-item .image.bg-effect-1:before {
			left: 75%;
			bottom: 5px;
			border-bottom-left-radius: 28%;
		}
		#contents-2 .c_contents .card-list .card-item .image.bg-effect-1:after {
			left: -125%;
			bottom: 15px;
			border-bottom-right-radius: 25%;
		}
		#contents-2 .c_contents .card-list .card-item .image.color-yellow:before,
		#contents-2 .c_contents .card-list .card-item .image.color-yellow:after {
			box-shadow: 0 100px 0 0 #f9e12e;
		}
		#contents-2 .c_contents .card-list .card-item .content {
			line-height: 1;
			text-align: left;
		}
		#contents-2 .c_contents .card-list .card-item .content .label {
			line-height: 1;
			display: inline-block;
			padding: 5px 7px;
			margin-right: 3px;
			margin-bottom: 15px;
		    border-radius: 7px;
			font-size: 10px;
			font-weight: 300;
			font-family: "SCDream3";
			background-color: #eee;
		}
		#contents-2 .c_contents .card-list .card-item .content .title {
			line-height: 1;
		}
		#contents-2 .c_contents .card-list .card-item .content .title.color-wh {
			color: white;
		}
		#contents-2 .c_contents .card-list .card-item .content .title > span {
			display: block;
			margin-bottom: 5px;
		}
		#contents-2 .c_contents .card-list .card-item .content .sub {
			line-height: 1;
			margin-top: 25px;
			font-size: 10px;
			font-weight: 300;
			font-family: "SCDream3";
		}
		#contents-2 .c_contents .card-list .card-item.type-1 {
			grid-row-end: span 20;
		}
		#contents-2 .c_contents .card-list .card-item.type-1:hover {
			box-shadow: 0 20px 25px rgb(0 0 0 / 10%), 0 10px 10px rgb(0 0 0 / 4%);
			-webkit-transform: translateY(-4px);
			-moz-transform: translateY(-4px);
			transform: translateY(-4px);
		}
		#contents-2 .c_contents .card-list .card-item.type-1 .image {
			padding-top: 92%;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		#contents-2 .c_contents .card-list .card-item.type-1 .content {
			padding: 21px 24px;
			background-color: #fff;
		}
		#contents-2 .c_contents .card-list .card-item.type-1 .content .title {
			font-size: 18px;
			font-weight: bold;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 {
			grid-row-end: span 14;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .image {
			padding-top: 92.23%;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .content {
			position: absolute;
			top: 18px;
			left: 16px;
			right: 16px;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .content .title {
			font-size: 20px;
			font-weight: bold;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .btn-wrap {
			position: absolute;
			bottom: 18px;
			left: 16px;
			right: 16px;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .btn-wrap button {
			display: grid;
			grid-template-columns: 17px auto;
			gap: 7px;
			align-items: center;
			justify-content: center;
			width: 100%;
			padding: 13px 0;
			border-radius: 7px;
			font-size: 16px;
			font-weight: bold;
			color: white;
			background-color: #222;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .btn-wrap button img {
			max-width: 100%;
		}
		#contents-2 .c_contents .card-list .card-item.type-2 .btn-wrap button span {
			margin-top: 3px;
		}
		#contents-2 .c_contents .card-list .card-item.type-3 {
			grid-row-end: span 20;
			grid-column-end: span 2;
			display: grid;
			grid-template-columns: 4fr 6fr;
		}
		#contents-2 .c_contents .card-list .card-item.type-3:hover {
			box-shadow: 0 20px 25px rgb(0 0 0 / 10%), 0 10px 10px rgb(0 0 0 / 4%);
			-webkit-transform: translateY(-4px);
			-moz-transform: translateY(-4px);
			transform: translateY(-4px);			
		}
		#contents-2 .c_contents .card-list .card-item.type-3 .content .label {
			margin-bottom: 30px;
		}
		#contents-2 .c_contents .card-list .card-item.type-3 .content {
			padding: 34px 32px;
			background-color: #fff;
		}
		#contents-2 .c_contents .card-list .card-item.type-3 .content .title {
			font-size: 32px;
			font-weight: bold;
		}
		#contents-2 .c_contents .card-list .card-item.type-3 .image {
			border-top-left-radius: 50%;
			border-bottom-left-radius: 50%;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		#contents-2 .c_contents .card-list .card-item.type-4 {
			grid-row-end: span 11;
			padding: 22px 14px;
			background-color: #e7e7e7;
		}
		#contents-2 .c_contents .card-list .card-item.type-4 .image {
			margin-bottom: 14px;
			text-align: left;
		}
		#contents-2 .c_contents .card-list .card-item.type-4 .image img {
			padding-left: 14px;
		}
		#contents-2 .c_contents .card-list .card-item.type-4 .content .title {
			font-size: 32px;
			font-weight: bold;
		}
		#contents-2 .c_contents .card-list .card-item.type-4 .btn-wrap {
			margin-top: 19px;
		}
		#contents-2 .c_contents .card-list .card-item.type-4 .btn-wrap button {
			display: grid;
			grid-template-columns: auto 35px;
			align-items: center;
			width: 100%;
			padding-left: 14px;
			font-size: 20px;
			font-weight: bold;
			line-height: 1;
			text-align: left;
		}
		#contents-2 .c_contents .banner {
			margin: 165px 0 145px;
		}
		#contents-2 .c_contents .banner a {
			display: grid;
		}
		#contents-2 .c_contents .banner img {
			max-width: 100%;
		}

		@media (max-width: 1024px) {
			#contents-2 .c_contents {
				padding-top: 100px;
			}
			#contents-2 .c_contents .card-list {
				grid-template-columns: repeat(2, 1fr);
			}
			#contents-2 .c_contents .card-list .card-item {
				align-self: start;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 .image {
				padding-top: 90%;
			}
			#contents-2 .c_contents .banner {
				margin: 100px 0 100px;
			}
		}

		@media (max-width: 560px) {
			#contents-2 .c_contents {
				padding-top: 76px;
			}
			#contents-2 .c_contents .contents-header-inner {
				justify-items: start;
				padding: 0 27px;
			}
			#contents-2 .c_contents .contents-header-inner > img {
				display: none;
			}
			#contents-2 .c_contents .contents-header .title-n-menu {
				grid-column-end: span 2;
			}
			#contents-2 .c_contents .contents-header .title-n-menu .title {
				font-size: 21px;
			}
			#contents-2 .c_contents .contents-header .title-n-menu .title span.image {
				width: 25px;
			}
			#contents-2 .c_contents .contents-header .title-n-menu .menu {
				gap: 5px;
				margin-top: 20px;
				margin-bottom: 13px;
			}
			#contents-2 .c_contents .contents-header .title-n-menu .menu .menu-item {
				padding: 9px 0px;
				font-size: 10px;
			}
			#contents-2 .c_contents .card-list {
				gap: 20px;
				grid-template-columns: 1fr;
				grid-template-rows: auto;
				padding: 0 27px;
			}
			#contents-2 .c_contents .card-list .card-item {
				grid-column-end: span 1 !important;
				grid-row-end: auto !important;
			}
			#contents-2 .c_contents .card-list .card-item .content .label {
				margin-bottom: 10px;
			}
			#contents-2 .c_contents .card-list .card-item .content .sub {
				margin-top: 16px;
			}
			#contents-2 .c_contents .card-list .card-item.type-1 .content {
				padding: 14px 15px;
			}
			#contents-2 .c_contents .card-list .card-item.type-1 .content .title {
				font-size: 17px;
			}
			#contents-2 .c_contents .card-list .card-item:hover {
				box-shadow: 0 20px 25px rgb(0 0 0 / 10%), 0 10px 10px rgb(0 0 0 / 4%);
				-webkit-transform: translateY(-4px);
				-moz-transform: translateY(-4px);
				transform: translateY(-4px);
			}
			#contents-2 .c_contents .card-list .card-item.type-2 .content {
				top: 11px;
				left: 10px;
				right: 10px;
			}
			#contents-2 .c_contents .card-list .card-item.type-2 .content .title {
				font-size: 19px;
			}
			#contents-2 .c_contents .card-list .card-item.type-2 .btn-wrap {
				bottom: 11px;
				left: 10px;
				right: 10px;
			}
			#contents-2 .c_contents .card-list .card-item.type-2 .btn-wrap button {
				font-size: 15px;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 {
				grid-template-columns: 1fr;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 .image {
				margin-left: 40px;
				padding-top: 69.68%;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 .content {
				padding: 16px;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 .content .label {
				margin-bottom: 11px;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 .content .title {
				font-size: 19px;
			}
			#contents-2 .c_contents .card-list .card-item.type-3 .content .sub {
				margin-top: 14px;
			}
			#contents-2 .c_contents .card-list .card-item.type-4 {
				padding: 14px;
			}
			#contents-2 .c_contents .card-list .card-item.type-4 .image {
				margin-bottom: 8px;
			}
			#contents-2 .c_contents .card-list .card-item.type-4 .content .title {
				font-size: 20px;
			}
			#contents-2 .c_contents .card-list .card-item.type-4 .image img {
				padding-left: 0;
			}
			#contents-2 .c_contents .card-list .card-item.type-4 .btn-wrap button {
				padding-left: 0;
				font-size: 16px;
			}
			#contents-2 .c_contents .banner {
				margin: 40px 0 0 0;
			}
		}
	</style>
<link rel="stylesheet" href="/wp-content/uploads/elementor/css/custom-frontend-lite.min.css">
<div id="contents">
	<section class="c_portfolio">
			<div class="wrap">
				<div class="c_title">
					<!-- <p class="ct_e">
						<span><mark>Passion leads to design, Design leads to performance,</mark></span><br />
						<span><mark>Performance leads to success!</mark></span>
					</p> -->
					<!-- <p class="ct_k">
						<span>성공적인 프로젝트를 약속합니다!</span>
					</p> -->
					<h2 class="ct_m">interactive</h2>
				</div>
				<div id="page" class="c_wrap box">
					<!-- <div class="tab div5"> -->
						<!-- <ul> -->
							<!-- <li><a href="#!" id="a_local" onClick="chg_portfolio('local')" class="cp_a on">로컬 컨텐츠</a></li>
							<li><a href="#!" id="a_oneday" onClick="chg_portfolio('oneday')" class="cp_a">원데이 클래스</a></li> -->
							<!-- <li><a href="#!" id="a_shoppingmall" onClick="chg_portfolio('shoppingmall')" class="cp_a">SHOPPING MALL</a></li>
							<li><a href="#!" id="a_app" onClick="chg_portfolio('app')" class="cp_a">APP</a></li>
							<li><a href="#!" id="a_crm" onClick="chg_portfolio('crm')" class="cp_a">CRM/ERP</a></li> -->
						<!-- </ul> -->
					<!-- </div> -->
					<div class="cp_list" id="box_local" style="display:block">
					<div class="wrap">
						<div class="card-list">
							<?php
								$args = array( 'category' => 2, 'post_type' =>  'post' ); 
								$postslist = get_posts( $args );    
								foreach ($postslist as $post) :  setup_postdata($post); 
								?>
								<a href="<?php the_permalink(); ?>" class="card-item type-1">
									<div class="image" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>');"></div>
									<div class="content">
										<div class="label">#<?php echo get_post_meta( get_the_ID(), 'post-link-url', true);?></div>
										<div class="title">
											<span><?php the_title(); ?></span>
											<span><?php echo get_post_meta( get_the_ID(), 'post-quote-url', true); ?></span>
										</div>
										<div class="sub">2021-10-11</div>
										<button class="dots"><span></span></button>
									</div>
								</a>
								<!-- <li>
									<div class="cpl_wrap">
										<div class="cpl_info">
											<div class="cpli_title">
												<strong><?php the_title(); ?></strong>
												<span></span>
											</div>
											<ul>
												<li>
													<strong><mark>TYPE</mark></strong>
													<span><?php echo get_post_meta( get_the_ID(), 'post-link-url', true);?></span>
												</li>
												<li>
													<strong><mark>DETAILS</mark></strong>
													<span><?php echo get_post_meta( get_the_ID(), 'post-quote-url', true); ?></span>
												</li>
												<li>
													<strong><mark>URL</mark></strong>
													<span><a href="<?php echo get_post_meta( get_the_ID(), 'post-video-url', true);?>" target="_blank"><?php echo get_post_meta( get_the_ID(), 'post-video-url', true);?></a></span>
												</li>
											</ul>
										</div>
										<div class="cpl_pic" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>');">
											<div class="cplp_info">
												<a href="<?php the_permalink(); ?>"><span class="blind">MORE</span></a>
												<strong>VIEW</strong>
											</div>
										</div>
									</div>
								</li>   -->
							<?php endforeach; ?> 

						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
</div>
<script>
	$("#box_all").show();
	function chg_portfolio(idx){
		$(".cp_list").hide();
		$(".cp_a").removeClass("on");
		$("#a_"+idx).addClass("on");
		$("#box_"+idx).show();
	}
</script>
<?php
get_footer();