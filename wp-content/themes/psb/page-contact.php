<?php
/**
 * Template Name: Contact
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
						
					
							
							<div class="contact_wrapper">
								
								<?php the_field( 'contact_intro' ); ?>
								
								<div class="contact_location_wrapper">
									
									<div class="contact_single_location">
										
										
										<div class="location_left">
											
											<span class="contact_address"><?php the_field( 'location_1_address' ); ?></span>
											
											<a class="contact_get_directions" href="<?php the_field( 'locaton_1_google_map_link' ); ?>" target="_blank">
												
												<div class="contact_gradient">
													
													<div class="contact_inner_gradient">
														
														<span><?php the_field( 'location_1_direction_button_verbiage' ); ?></span>
														
													</div><!-- contact_inner_gradient -->
													
												</div><!-- contact_gradient -->
												
											</a><!-- contact_get_directions -->
											
											<div class="black_line_wrapper">
												
												<div class="black_line"></div><!-- black_line -->
												
												<div class="black_square"></div><!-- black_square -->
												
											</div><!-- black_line_wrapper -->
											
										</div><!-- location_left -->
										
										<div class="location_map_wrapper">
											
											<div class="inner_map">
											
											
											<?php the_field( 'location_1_google_iframe' ); ?>
											
											</div><!-- inner_map -->
											
										</div><!-- location_map -->
										
										
									</div><!-- contact_single_location -->
									
									
									
									<div id="tablet_black_line" class="black_line_wrapper">
												
												<div class="black_line"></div><!-- black_line -->
												
												<div class="black_square"></div><!-- black_square -->
												
											</div><!-- black_line_wrapper -->
									
									
									<div class="contact_single_location">
										
										
										<div class="location_left">
											
											<span class="contact_address"><?php the_field( 'location_2_address' ); ?></span>
											
											<a class="contact_get_directions" href="<?php the_field( 'locaton_2_google_map_link' ); ?>" target="_blank">
												
												<div class="contact_gradient">
													
													<div class="contact_inner_gradient">
														
														<span><?php the_field( 'location_2_direction_button_verbiage' ); ?></span>
														
													</div><!-- contact_inner_gradient -->
													
												</div><!-- contact_gradient -->
												
											</a><!-- contact_get_directions -->
											
											<div class="black_line_wrapper">
												
												<div class="black_line"></div><!-- black_line -->
												
												<div class="black_square"></div><!-- black_square -->
												
											</div><!-- black_line_wrapper -->
											
										</div><!-- location_left -->
										
										<div class="location_map_wrapper">
											
											<div class="inner_map">
											
											
											<?php the_field( 'location_2_google_iframe' ); ?>
											
											</div><!-- inner_map -->
											
										</div><!-- location_map -->
										
										
									</div><!-- contact_single_location -->
									
								</div><!-- contact_location_wrapper -->
								
							</div><!-- contact_wrapper -->
							
						
					
						
					
					</div><!-- container -->
				
				
				
			
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
