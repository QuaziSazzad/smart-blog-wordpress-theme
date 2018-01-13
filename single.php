<?php get_header(); ?>
<section class="container">
	<div class="zerogrid">
	   	<?php while(have_posts()):the_post(); ?>
	   		<div <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			     <div class="col-2-3">
					<div id="main-content" class="wrap-col">
						<article class="single">
							<?php the_post_thumbnail('id',array('class'=>'full')); ?>
							<div class="wrap-art">
								<div class="art-header">
									<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								</div>
								<div class="art-content">
		                   <?php the_content(); ?>						
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
	    	<?php endwhile; ?>
		<?php get_sidebar(); ?>
 		<?php 	if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
?>
	</div>
</section>
<?php get_footer(); ?>