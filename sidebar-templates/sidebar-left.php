<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Sweetweb
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'left-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'sweetweb_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="col-md-3 widget-area" id="left-sidebar">
<?php else : ?>
	<div class="col-md-4 widget-area" id="left-sidebar">
<?php endif; ?>
<?php 
do_action( 'sweetweb_left_sidebar' );	
dynamic_sidebar( 'left-sidebar' ); 
?>

</div><!-- #left-sidebar -->
