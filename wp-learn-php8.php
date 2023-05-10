<?php
/**
 * Plugin Name: WP Learn PHP8
 * Description: Learn to get a plugin ready for PHP 8
 * Version: 1.0.0
 */

add_shortcode( 'wp_learn_php8', 'wp_learn_php8_shortcode_render' );
function wp_learn_php8_shortcode_render() {
	$posts     = get_posts();
	$post_html = '<div class="post">';
	foreach ( $posts as $post ) {
		if ( array_key_exists( 'post_title', $post ) ) {
			$post_html .= sprintf(
				'<h4><a href="%s">%s</a></h4>',
				get_permalink( $post->ID ),
				$post->post_title
			);
		}
	}
	$post_html .= '</div>';

	return $post_html;
}