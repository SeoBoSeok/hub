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

	// if ( have_posts() ) :

	// 	get_template_part( 'templates/category', 'layout' );

	// If no content, include the "No posts found" template.
	// else :

	// 	get_template_part( 'templates/content/error' );

	// endif;
	?>
<style>
	.titlebar {display: none !important;}
</style>
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
					<h2 class="ct_m">인터렉티브</h2>
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
						<ul>
						<?php
							$args = array( 'category' => 29, 'post_type' =>  'post' ); 
							$postslist = get_posts( $args );    
							foreach ($postslist as $post) :  setup_postdata($post); 
							?> 
							<li>
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
							</li>  
						<?php endforeach; ?> 
						</ul>
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