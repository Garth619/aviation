<?php
/**
 * Template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	
					
	
	<?php include('banner.php');?>
			
			<div class="inner_main">
				
				
				<div class="container_wrapper">
				
					<div class="container">
					
						<h1 class="title_header">Not Found</h1><!-- title_header -->
						
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
						<div class="content">
							
							<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>							
							
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php get_sidebar();?>
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
