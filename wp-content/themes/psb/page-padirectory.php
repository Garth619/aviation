<?php
/**
 * Template Name: PA Directory
 *

 */

get_header(); ?>

		

			<?php include('banner.php');?>
			
			<div class="inner_main">
				
				
				<div class="container_wrapper">
				
					<div class="container nosidebar">
					
						<h1 class="title_header"><?php the_title();?></h1><!-- title_header -->
						
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
					
							
							<div class="pa_wrapper">
								
								<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
								
							</div><!-- pa_wrapper -->
							
						
					
						
					
					</div><!-- container -->
				
				
				
			
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
