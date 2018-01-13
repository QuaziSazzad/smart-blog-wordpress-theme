<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart_blog
 */

get_header(); ?>

<section class="container">
	<div class="zerogrid">
  
  <?php if (cs_get_customize_option( 'ar_layout' )== 'right' || cs_get_customize_option( 'ar_layout' ) == ''): ?>
		<?php get_template_part( 'template-parts/archive' ); ?>
		<?php get_sidebar();?>
	<?php endif ?>  

	  <?php if (cs_get_customize_option( 'ar_layout' )== 'left'):?>
	  <?php get_sidebar();?>
		<?php get_template_part( 'template-parts/archive' ); ?>
	<?php endif ?>  


		</div>
</section>

<?php

get_footer();
