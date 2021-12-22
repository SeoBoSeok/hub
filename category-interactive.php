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
		#contents-2 .c_contents {
			padding-top: 100px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu.sub {
			text-align: left;
			padding-bottom: 50px;
		}
		#contents-2 .c_contents .contents-header .title-n-menu .menu.sub {float: left; grid-template-columns: repeat(3, auto)}
		#contents-2 .c_contents .contents-header .title-n-menu::after {
			content: "";
			display: table;
			clear: both;
		}
	</style>
<div id="wrap" class="main">
	<hr />
	<!-- Aside S -->
	<aside id="aside">
		<div class="a_quick">
			<ul>
				<li><a href="#location"><i class="aq_icon location"></i><span class="blind">Location</span></a></li>
				<li><a href="mailto:info@.co.kr"><i class="aq_icon mail"></i><span class="blind">Send to mail</span></a></li>
			</ul>
		</div>
	</aside>
	<!-- Aside E -->
	<hr />
	<!-- Contents S -->
	<div id="contents">
		<div id="portfolio" class="c_position"></div>
	</div>
	<hr />

<div id="contents-2">
	<section class="c_portfolio c_contents sub">
			<div class="">
				<div class="c_title">
				</div>
				<div id="page" class="c_wrap">
					<div class="cp_list" id="box_local" style="display:block">
					<div class="contents-header">
						<div class="title-n-menu sub">
							<div class="title">
								<!-- <span>HOT</span> -->
								<span class="image"><img src="/wp-content/themes/hub/assets/img/logotitle.png"></span>
								<span>콘텐츠</span>
							</div>
							<div class="menu sub">
								<button class="menu-item">전체</button>
								<button class="menu-item">라이프</button>
								<button class="menu-item">비즈니스</button>
							</div>
						</div>
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
						<?php
		// Set up paginated links.
	    $links = paginate_links( array(
			'type' => 'array',
			'prev_next' => true,
			'prev_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-back"></i>', 'hub' ) ) . '</span>',
			'next_text' => '<span aria-hidden="true">' . wp_kses_post( __( '<i class="lqd-icn-ess icon-ion-ios-arrow-forward"></i>', 'hub' ) ) . '</span>'
		));
	
		if( !empty( $links ) ) {
	
			printf( '<div class="blog-nav"><nav aria-label="' . esc_attr__( 'Page navigation', 'hub' ) . '"><ul class="pagination"><li>%s</li></ul></nav></div>', join( "</li>\n\t<li>", $links ) );
		}; ?>
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