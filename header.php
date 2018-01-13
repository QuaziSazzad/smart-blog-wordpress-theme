<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="<?php bloginfo("description"); ?>">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
	
   <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<div class="wrap-body">
<div class="top-header">
	<div class="zerogrid">
		<div class="row">
			<nav>
			  <a class="toggleMenu" href="#">Menu</a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
				) );
			?>
			</nav>
		</div>
	</div>
</div>
