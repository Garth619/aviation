<?php
/**
 * Template Name: Case Results
 *

 */

get_header(); ?>

		

			<?php include('banner.php');?>
			
			<div class="inner_main">
				
				
				<div class="container_wrapper">
				
					<div id="success_width" class="container nosidebar">
					
						<h1 class="title_header"><?php the_title();?></h1><!-- title_header -->
						
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
					
							
							
							<div class="success_intro">
								
								
								<?php the_field( 'success_intro' ); ?>								
								
							</div><!-- success_intro -->
							
							
							
							
							<div class="featured_case">
								
								<div class="inner_case">
									
									<div class="featured_cat_title_wrapper">
									
										<span class="featured_cat_title"><?php the_field( 'featured_case_category_title' ); ?></span><!-- featured_cat_title -->
									
									</div><!-- featured_cat_title_wrapper -->
									
									<span class="number_header"><?php the_field( 'featured_case_number_amount' ); ?></span><!-- number_header -->
									<span class="sub_header"><?php the_field( 'featured_case_subtitle' ); ?></span><!-- sub_header -->
									
									<div class="success_content">
										
										<?php the_field( 'featured_case_content' ); ?>
										
									</div><!-- success_content -->
									
								</div><!-- inner_case -->
								
							</div><!-- featured_case -->
						
							
							<div class="bottom_cases_wrapper">
								
								<div class="left_case_col case_col">
									
									
									
									<?php if(get_field('case_results_with_excerpts')): ?>
									 
										<?php while(has_sub_field('case_results_with_excerpts')): ?>
									 
												<div class="case_cat_wrapper">
												
													<span class="large_case_title"><?php the_sub_field( 'case_results_title' ); ?></span><!-- large_case_title -->
													
													<div class="lower_black_line_wrapper">
										
														<div class="lower_black_line"></div><!-- lower_black_line -->
										
														<div class="lower_black_square"></div><!-- lower_black_square -->
										
													</div><!-- lower_black_line_wrapper -->
													
													
													
													
													<?php if(get_sub_field('single_case_results')): ?>
													 
														<?php while(has_sub_field('single_case_results')): ?>
													 
															<div class="lower_single_case">
										
																<span class="lower_case_title"><?php the_sub_field( 'single_case_amount' ); ?></span><!-- lower_case_title -->
																<span class="lower_case_subtitle"><?php the_sub_field( 'single_case_subtitle' ); ?></span><!-- lower_case_subtitle -->
										
																<div class="single_case_content">
											
																	<?php the_sub_field( 'single_case_content' ); ?>								
																
																</div><!-- single_case_content -->
										
															</div><!-- lower_single_case -->
													    
														<?php endwhile; ?>
													 
													<?php endif; ?>
													
													
												
												</div><!-- case_cat_wrapper -->
									    
										<?php endwhile; ?>
									 
									<?php endif; ?>
									

									
								</div><!-- left_case_col -->
								
								<div class="right_case_col case_col">
									
									<div class="case_cat_wrapper">
									
									<span class="large_case_title"><?php the_field( 'case_results_title_without_excerpts' ); ?></span><!-- large_case_title -->
									
									<div class="lower_black_line_wrapper">
										
										<div class="lower_black_line"></div><!-- lower_black_line -->
										
										<div class="lower_black_square"></div><!-- lower_black_square -->
										
										<?php if(get_field('case_results_without_excerpts')): ?>
										 
											<?php while(has_sub_field('case_results_without_excerpts')): ?>
										 
												<div class="lower_single_case">
										
													<span class="lower_case_title"><?php the_sub_field( 'single_case_amount' ); ?></span><!-- lower_case_title -->
													<span class="lower_case_subtitle"><?php the_sub_field( 'single_case_subtitle' ); ?></span><!-- lower_case_subtitle -->
										
												</div><!-- lower_single_case -->
										    
											<?php endwhile; ?>
										 
										<?php endif; ?>
										
																				
										
									</div><!-- lower_black_line_wrapper -->
									
								</div><!-- right_case_col -->
								
							</div><!-- bottom_cases_wrapper -->
						
					
					</div><!-- container -->
				
				
				
			
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
