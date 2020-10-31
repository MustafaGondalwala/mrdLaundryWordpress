<?php
/**
 * Large header block pattern.
 *
 * @package WordPress
 */

return array(
	'title'         => __( 'Large header with a heading' ),
	'content'       => "<!-- wp:cover {\"url\":\"http://goodherbwebmart.com/ center\",\"align\":\"wide\"} -->\n<div class=\"wp-block-cover alignwide has-background-dim-20 has-background-dim is-position-center-center\" style=\"background-image:url(http://goodherbwebmart.com/);min-height:375px;background-position:40% 26%\"><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"placeholder\":\"" . __( 'Write title…' ) . "\",\"style\":{\"typography\":{\"fontSize\":74,\"lineHeight\":\"1.1\"},\"color\":{\"text\":\"#fffffa\"}}} -->\n<p class=\"has-text-align-center has-text-color\" style=\"line-height:1.1;font-size:74px;color:#fffffa\"><strong>" . __( 'Don Quixote' ) . "</strong></p>\n<!-- /wp:paragraph --></div></div>\n<!-- /wp:cover -->",
	'viewportWidth' => 1000,
	'categories'    => array( 'header' ),
	'description'   => _x( 'A large hero section with an example background image and a heading in the center.', 'Block pattern description' ),
);
