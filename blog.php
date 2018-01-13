		<div class="col-2-3">
			<div id="main-content">
				<div class="row">				
				<?php
				if ( have_posts() ) :
					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php
					endif;
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
					<div class="col-1-2">
						<div class="wrap-col">
						 <?php    $meta_data = get_post_meta( $post->ID, '_custom_post_options', true );
							  if ( !empty($meta_data) ) {
							      $subtitle = $meta_data['bc_color'];
							   } ?>
							<article class="<?php echo $subtitle; ?>">
								<?php the_post_thumbnail('post_image',array('class'=>'full')); ?>
								<div class="wrap-art">
									<div class="art-header">
										<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									</div>
									<div class="art-content">
									<?php the_excerpt(); ?>
										<center><a href="<?php the_permalink(); ?>" class="button">Read More</a></center>
									</div>
									<div class="art-footer">
										<div class="meta clearfix">
											<div class="comment">
											  <?php
	                           comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comment off');?> 
											</div>
											<div class="user">
											   <?php the_author_posts_link(); ?>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				<?php endwhile;
	    	else :
			get_template_part( 'template-parts/content', 'none' );
		    endif; ?> 			
			</div>	
		  <div class="all-pagination">
		      <div class="p-counter large">
		        <div class="pagination">						     
		         <?php wp_link_pages( $args ); ?>
	            	  </div>
	         	</div>
			 </div>	
			</div>
		</div>