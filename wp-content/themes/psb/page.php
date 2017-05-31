<?php
/**
 * Template for displaying all pages
 *

 */

get_header(); ?>

		

			<?php include('banner.php');?>
			
			<div class="inner_main">
				
				
				<div class="container_wrapper">
				
					<div class="container">
					
						<h1 class="title_header"><?php the_title();?></h1><!-- title_header -->
						
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
						<div class="content">
							
							<?php get_template_part( 'loop', 'page' ); ?>
							
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php get_sidebar();?>
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
