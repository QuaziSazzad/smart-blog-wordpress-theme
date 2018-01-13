<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart_blog
 */

?>
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

