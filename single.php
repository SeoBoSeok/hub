<?php
/**
 * The template for displaying all single posts.
 *
 * @package Hub
 */

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$sp_style = $page_settings_model->get_settings( 'post_style' );
	$sp_style = $sp_style ? $sp_style : liquid_helper()->get_option( 'post-style' );
	$style = $sp_style ? $sp_style : liquid_helper()->get_option( 'post-style', 'classic' );
	$floating_enable = $page_settings_model->get_settings( 'post_floating_box_enable' );
} else {
	$sp_style = liquid_helper()->get_option( 'post-style' );
	$style = liquid_helper()->get_option( 'post-style', 'classic' );
	$floating_enable = liquid_helper()->get_option( 'post-floating-box-enable' );
}

if( 'classic' == $sp_style || empty( $sp_style ) ) {
	add_action( 'liquid_before_single_article_content', 'liquid_get_single_media', 5 );	
}
elseif( 'classic' !== $sp_style && !empty( $sp_style ) ) {
	add_action( 'liquid_before_single_article', 'liquid_get_single_media', 5 );	
}

if( 'on' == $floating_enable ) {
	add_action( 'liquid_before_single_article_content', 'liquid_get_single_floating_box', 5 );
}

get_header();

	while ( have_posts() ) : the_post();
		
		//if empty style get default
		if( !$style ) {
			$style = 'minimal';
		}

		$format = get_post_format();
		if( 'video' === $format && class_exists( 'ReduxFramework' ) ){
			$style = 'classic';
		}
		elseif( 'audio' === $format && class_exists( 'ReduxFramework' ) ){
			$style = 'minimal';
		}
		get_template_part( 'templates/blog/single/classic' );

	endwhile;

	?>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://gongstar-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<?php

get_footer();