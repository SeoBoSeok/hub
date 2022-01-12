<?php

/**
 * The Liquid Themes Hub Theme
 *
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Text Domain: 'hub'
 * Domain Path: /languages/
 */

/**
 * Sort post_tags by term_order
 *
 * @param array $terms array of objects to be replaced with sorted list
 * @param integer $id post id
 * @param string $taxonomy only 'post_tag' is changed.
 * @return array of objects
 */
// function plugin_get_the_ordered_terms ( $terms, $id, $taxonomy ) {
//   if ( 'post_tag' != $taxonomy ) // only ordering tags for now but could add other taxonomies here.
//       return $terms;

//   $terms = wp_cache_get($id, "{$taxonomy}_relationships_sorted");
//   if ( false === $terms ) {
//       $terms = wp_get_object_terms( $id, $taxonomy, array( 'orderby' => 'term_order' ) );
//       wp_cache_add($id, $terms, $taxonomy . '_relationships_sorted');
//   }

//   return $terms;
// }

// add_filter( 'get_the_terms', 'plugin_get_the_ordered_terms' , 10, 4 );

/**
* Adds sorting by term_order to post_tag by doing a partial register replacing
* the default
*/
// function plugin_register_sorted_post_tag () {
//   register_taxonomy( 'post_tag', 'post', array( 'sort' => true, 'args' => array( 'orderby' => 'term_order' ) ) );
// }

// add_action( 'init', 'plugin_register_sorted_post_tag' );

// Starting The Engine / Load the Liquid Framework ----------------
include_once( get_template_directory() . '/liquid/liquid-init.php' );