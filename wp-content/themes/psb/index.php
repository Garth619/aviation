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
								
								<div class="mypost">
									
									<h2 class="myposts_title">Blog Post</h2><!-- myposts_title -->
									
									<span class="mypost_content">
									
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									
									</span><!-- mypost_content -->
									
									<a class="my_read_more" href="">Read More</a><!-- read_more -->
									
								</div><!-- mypost -->
								
								<div class="mypost">
									
									<h2 class="myposts_title">Blog Post</h2><!-- myposts_title -->
									
									<span class="mypost_content">
									
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									
									</span><!-- mypost_content -->
									
									<a class="my_read_more" href="">Read More</a><!-- read_more -->
									
								</div><!-- mypost -->
								
								<div class="mypost">
									
									<h2 class="myposts_title">Blog Post</h2><!-- myposts_title -->
									
									<span class="mypost_content">
									
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									
									</span><!-- mypost_content -->
									
									<a class="my_read_more" href="">Read More</a><!-- read_more -->
									
								</div><!-- mypost -->
								
								<div class="mypost">
									
									<h2 class="myposts_title">Blog Post</h2><!-- myposts_title -->
									
									<span class="mypost_content">
									
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									
									</span><!-- mypost_content -->
									
									<a class="my_read_more" href="">Read More</a><!-- read_more -->
									
								</div><!-- mypost -->
								
								<div class="mypost">
									
									<h2 class="myposts_title">Blog Post</h2><!-- myposts_title -->
									
									<span class="mypost_content">
									
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									
									</span><!-- mypost_content -->
									
									<a class="my_read_more" href="">Read More</a><!-- read_more -->
									
								</div><!-- mypost -->
								
							</div><!-- news_wrapper -->
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php get_sidebar();?>
				
				</div><!-- container_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
