<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
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
					
						<h1 class="title_header">Latest News/Blog</h1><!-- title_header -->
						
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
						<div class="content">
							
							<div class="news_wrapper">
								
								<?php get_template_part( 'loop', 'index' ); ?>
								
								
								
							</div><!-- news_wrapper -->
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php include('sidebar-blog.php');?>
				
				</div><!-- container_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
