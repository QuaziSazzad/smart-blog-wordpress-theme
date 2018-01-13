<?php get_header(); ?>
<section class="container">
	<div class="zerogrid">
  <?php if (cs_get_customize_option( 'laout_select' )== 'right' || cs_get_customize_option( 'laout_select' ) == ''): ?>
	<?php get_template_part('blog'); ?>
	<?php get_sidebar(); ?>
	<?php endif ?>  

	<?php if (cs_get_customize_option( 'laout_select' ) == 'left'): ?>
	<?php get_sidebar(); ?>
	<?php get_template_part('blog'); ?>
	<?php endif ?>

	</div>
</section>
<?php get_footer(); ?>