<?php
/**
 * Template for displaying Category Archive pages
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
						
						<h1 class="title_header"><?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );?></h1><!-- title_header -->
					
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
						<div class="content">
							
							<div class="news_wrapper">
								
								<?php get_template_part( 'loop', 'category' ); ?>
								
								
								
							</div><!-- news_wrapper -->
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php include('sidebar-blog.php');?>
				
				</div><!-- container_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>


			