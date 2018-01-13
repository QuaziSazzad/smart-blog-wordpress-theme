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
	