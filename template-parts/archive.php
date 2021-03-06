		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		<div class="col-2-3">
			<div id="main-content">
				<div class="row">	
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; ?>

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