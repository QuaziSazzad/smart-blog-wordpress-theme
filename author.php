
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

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <h2 class="author">Posts by <?php echo $curauth->nickname; ?></h2>
		<div class="col-2-3">
			<div id="main-content">
				<div class="row">	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
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
    <?php endif; ?>
      <?php get_sidebar(); ?>
   </div>
</section >
<?php get_footer(); ?>