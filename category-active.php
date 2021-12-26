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
?>
<style>
	.lqd-lp-grid {padding: 60px 0;}
</style>
<?php
get_header();

	if ( have_posts() ) :

		get_template_part( 'templates/category', 'layout' );

	// If no content, include the "No posts found" template.
	else :

		get_template_part( 'templates/content/error' );

	endif;

get_footer();