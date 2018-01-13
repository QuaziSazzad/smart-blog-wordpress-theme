<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}


?>

<div class="col-1-3">
		<div id="sidebar" class="wrap-col">
			<div class="wrap-slidebar">
				 <?php  dynamic_sidebar('sidebar-1'); ?>
			</div>
		</div>
	</div>