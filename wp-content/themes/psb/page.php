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
							
							<?php // get_template_part( 'loop', 'page' ); ?>
							
							<h2>Air ambulances have been patrolling the skies since World War I. Designed to evacuate injured people in remote or inaccessible locations, these aircraft have no doubt helped save the lives of thousands.</h2>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore <a href="">eu fugiat nulla pariatur</a>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> 

							<h3>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</h3>
							
							<ul>
							<li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt</li> 
							<li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit ametunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium mollit anim idest laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</li>
							<ul>
							
							
							
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php get_sidebar();?>
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
