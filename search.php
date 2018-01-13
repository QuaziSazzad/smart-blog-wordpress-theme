<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package smart_blog
 */

get_header(); ?>

<section class="container">
	<div class="zerogrid">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'smart-blog' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->
		<div class="col-2-3">
			<div id="main-content">
				<div class="row">	
			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
       
			endwhile;
					?>

		</div>	
		  <div class="all-pagination">
		      <div class="p-counter large">
		        <div class="pagination">						     
		          <?php the_posts_pagination( array(
                     'prev_text'=> 'PREVIOUS',
                     'next_text'=> 'NEXT',
                     'screen_reader_text'=> ' '
                   )); ?>
	            	  </div>
	         	</div>
			 </div>	
			</div>
		</div>

	<?php	else :
		get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			 <?php get_sidebar(); ?>
	</div>
</section>

<?php
get_footer();
