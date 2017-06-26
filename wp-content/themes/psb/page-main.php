<?php
/**
 * Template Name: Main
 *

 */

get_header(); ?>

		

<section class="main_banner">
	
	
	<div class="inner_content">
		
		<span class="large_header"><?php the_field( 'main_banner_header' ); ?></span><!-- large_header -->
		
<!-- 		<span class="large_header">Helping you with<br class="desktop_break"/> a <span class="extra">f</span>light to recovery</span> -->
		
		<div class="sub_header_wrapper">
			
			<div class="cloud1">
				
			<svg id="air2" viewBox="0 0 148.62 37.52">
			
			<defs></defs>
			
				<line class="cloud1_animate_1" x1="120.42" y1="36.52" x2="147.62" y2="36.52"/>
				<path class="cloud1_animate_2" d="M32.82,7.6S23.12-4.3,9.32,3.8C-6,13.9,1.42,36.5,18.52,36.5h88" transform="translate(0 0.02)"/>
			
			</svg> 
				
			</div><!-- cloud1 -->
			
			<span class="subheader"><?php the_field( 'main_banner_sub_header' ); ?></span><!-- subheader -->
			
		</div><!-- sub_header_wrapper -->
		
		<a class="button_wrapper request_button" href="#free_consulation">
			
			<div class="gradient_bg">
				
				<div class="inner_button">
					
					<span><?php the_field( 'request_button_verbiage' ); ?></span>
				
				</div><!-- inner_button -->
				
			</div><!-- request_wrapper -->
			
		</a><!-- request_wrapper -->
		
	</div><!-- inner_content -->
	
	
</section><!-- main_banner -->


<section id="about_runway" class="about">
	
	<div class="waves_wrapper_1">
		
		
		<div class="wave_set_inner_wrapper">
		
		<svg id="wave_set_1" height="500">
    
    	<path class="primary" d=""/>
			<path class="secondary" d=""/>
  
		</svg>
		
		
		<svg id="mobile_waves_about" viewBox="0 0 1924 377.97" preserveAspectRatio="none">
		
			<defs></defs>
			
			
			
			<path class="mobile_path" d="M0,96S277.33.64,818.67,107.31,1924,134.06,1924,134.06V378H0Z"/>
			<path class="mobile_path" d="M0,176.06s321.88,12,720.91-69,624.82-168,1203.09-48V378H0Z"/>
			
		</svg>
		
		
		</div><!-- wave_set_inner_wrapper -->
		

		
<svg id="wave_bg_one" viewBox="0 0 1924 1434.45" preserveAspectRatio="none">

	<defs>
	
	<linearGradient id="wavebg1_gradient" x2="100%" y2="0%" gradientTransform="rotate(35 0 0)">
						
				<stop offset="50%" stop-color="#193cc9" />
				<stop offset="100%" stop-color=" #0b2691" />
      
	</linearGradient>
	
	</defs>
	
	
	<path class="wavebg_path" d="M0,186.45s742,124,1224-50,700-132,700-132v1430H0Z"/>
	
	<line class="runways" vector-effect="non-scaling-stroke" x1="382.5" y1="224.58" x2="382.98" y2="1434.45"/>
	<line class="runways" vector-effect="non-scaling-stroke" x1="766.98" y1="222.7" x2="766.98" y2="1434.45"/>
	<line class="runways" vector-effect="non-scaling-stroke" x1="1153.58" y1="159.3" x2="1153.58" y2="1434.45"/>
	<line class="runways" vector-effect="non-scaling-stroke" x1="1537.07" y1="42.34" x2="1537.07" y2="1434.45"/>
	
	
	
	<rect class="runway_blink" x="381.52" y="361.22" width="1.97" height="9.98"/>
	<rect class="runway_blink" x="766" y="693.22" width="1.97" height="9.98"/>
	<rect class="runway_blink" x="766" y="1237.22" width="1.97" height="9.98"/>
	<rect class="runway_blink" x="1152.5" y="825.22" width="1.97" height="9.98"/>
	<rect class="runway_blink" x="1536.09" y="337.22" width="1.97" height="9.98"/>
	<rect class="runway_blink" x="1536.09" y="1325.22" width="1.97" height="9.98"/>
	
	
</svg>


		
	</div><!-- waves_wrapper_1 -->
	
	
	
	
	
	<div class="about_inner">
	
				
		
		<div class="about_content">
			
			
			
			<div class="large_header_wrapper">
			
			<span class="large_header"><?php the_field( 'about_title' ); ?></span><!-- large_header --> 
			
			
			
			
<svg id="air" viewBox="0 0 197.72 110.06">
	
	
	<defs></defs>
	
	
	<line class="air1_lines_1" x1="1" y1="37.29" x2="28.2" y2="37.29"/>
	<path class="air1_lines_2" d="M42.3,37.3h87.4c11.6,0,20.8-10.4,17.4-23.6C142-1.1,124.4-2.8,116,7.8"/>
	<path class="air1_lines_3" d="M91.2,55.3h87.4c11.7,0,20.8-10.4,17.4-23.6-5.2-14.8-22.8-16.5-31.2-5.9"/>
	<path class="air1_lines_4" d="M1.2,73.2H89.1c11.2,0,20.6,10.3,17.3,23.4-5.2,14.8-22.8,15.9-31,6.1"/>
	<line class="air1_lines_5" x1="1" y1="55.29" x2="8.3" y2="55.29"/>
	<line class="air1_lines_6" x1="22.2" y1="55.29" x2="75.3" y2="55.29"/>

</svg>
			
			
			</div><!-- large_header_wrapper -->
			
			
			<div class="h1_wrapper">
				
				<div class="tablet_line"></div><!-- tablet_line -->
				
				<h1><?php the_field( 'about_subtitle' ); ?></h1>
				
			</div><!-- h1_wrapper -->
			
			
			
			
			<div class="about_image_wrapper mobile">
			
			
			<?php the_field( 'about_image_caption' ); ?>
			
				
									
					<?php $about_image = get_field( 'about_image' ); ?>

					<?php if ( $about_image ) { ?>
	
						<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />

					<?php } ?>
			
			
		
		<a class="button_wrapper meet_attorneys" href="<?php the_field( 'meet_our_attorney_page_link' ); ?>">
			
			<div class="gradient_bg">
				
				<div class="inner_button">
					
					<span><?php the_field( 'meet_our_attorneys_button_main_page' ); ?></span>
				
				</div><!-- inner_button -->
				
			</div><!-- request_wrapper -->
			
		</a><!-- request_wrapper -->
			
		</div><!-- about_image_wrapper -->
			
		
			<div class="about_inner_content">
				
				
				<p>
					
					<svg id="air3" viewBox="0 0 148.62 37.52">
			
			<defs></defs>
			
				<line class="cloud1_animate_1" x1="120.42" y1="36.52" x2="147.62" y2="36.52"/>
				<path class="cloud1_animate_2" d="M32.82,7.6S23.12-4.3,9.32,3.8C-6,13.9,1.42,36.5,18.52,36.5h88"/>
			
			</svg> 
					
					
					 <?php the_field( 'about_content' ); ?>
					 
					</p>
				
				
			</div>
			
		</div><!-- about_inner_content -->
		
		
		<div class="about_image_wrapper desktop">
			
			
			<?php the_field( 'about_image_caption' ); ?>
			
			<?php $about_image = get_field( 'about_image' ); ?>

				<?php if ( $about_image ) { ?>
	
					<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />

				<?php } ?>
			
			
			<a class="button_wrapper meet_attorneys" href="<?php the_field( 'meet_our_attorney_page_link' ); ?>">
			
			<div class="gradient_bg">
				
				<div class="inner_button">
					
					<span><?php the_field( 'meet_our_attorneys_button_main_page' ); ?></span>
				
				</div><!-- inner_button -->
				
			</div><!-- request_wrapper -->
			
		</a><!-- request_wrapper -->
			
		</div><!-- about_image_wrapper -->
		
		
	
	</div><!-- about_inner -->
	
	
	
</section><!-- about -->

<section class="eight_reasons clouds">
	
	<div class="reasons_title_wrapper">
		
		<div class="gradient_bg">
			
			<div class="inner_bg">
				
				<span class="number"><?php the_field( 'eight_reasons_number' ); ?></span>
				
				<span class="large_header"><?php the_field( 'eight_reasons_header' ); ?></span><!-- large_header -->
				
				<span class="sub_header"><?php the_field( 'eight_reasons_subheader' ); ?></span><!-- sub_header -->
				
				
			</div><!-- inner_bg -->
			
		</div><!-- gradient_bg -->
		
		
	</div><!-- reasons_title -->
	
	
	<div class="reasons_grid">
		
		
		
	<?php if(get_field('eight_resons_grid')): ?>
		 
		<?php while(has_sub_field('eight_resons_grid')): ?>
		 
				
				
		<div class="single_reason single_reason_<?php the_sub_field( 'single_reason_number_class' ); ?>">
			
			<div class="single_reason_reg">
				
				
				<div class="reasons_icon_wrapper">
					
					<?php the_sub_field( 'single_reason_svg' ); ?>	
				
				</div><!-- reasons_icon_wrapper -->
				
				
				<span class="reason_number"><?php the_sub_field( 'single_reason_number_class' ); ?></span>
				
				<span class="reason_tile"><?php the_sub_field( 'single_reason_title' ); ?></span><!-- reason_tile -->
				
				
				
				<div class="grey_line_right_wrapper">
					
					<div class="grey_line_right"></div><!-- grey_line_bottom -->
				
				</div><!-- grey_line_right_wrapper -->
				
				
				<div class="grey_line_bottom_wrapper">
					
					<div class="grey_line_bottom"></div><!-- grey_line_bottom -->
				
				</div><!-- grey_line_bottom_wrapper -->
				
			</div><!-- single_reason_reg -->
			
			<div class="single_reason_hov">
				
				<div class="single_reason_hov_gradient">
					
					<div class="single_reason_hov_inner">
						
						<div class="reason_content">
							
							<?php the_sub_field( 'single_reason_content' ); ?>
							
						</div><!-- reason_content -->
						
					</div><!-- single_reason_hov_inner -->
					
				</div><!-- single_reason_hov_gradient -->
				
			</div><!-- single_reason_hov -->
			
			
		</div><!-- single_reason -->
				
				
				
		    
		<?php endwhile; ?>
		 
	<?php endif; ?>
		

		
	</div><!-- reasons_grid -->
	
	
	<div class="reasons_button_wrapper">
		
		<div class="reasons_button_left reasons_button">
			
			<img src="<?php bloginfo('template_directory');?>/images/blue-left.png"/>
			
		</div><!-- reasons_button_left -->
		
		<div class="reasons_button_right reasons_button">
			
			<img src="<?php bloginfo('template_directory');?>/images/blue-right.png"/>
			
		</div><!-- reasons_button_left -->
		
	</div><!-- reasons_button_wrapper -->
	
	
	
</section><!-- eight_reasons -->


<section id="testmonial_animate" class="testimonials">
	
	
	<div class="testi_slider_wrapper testi_desktop">
		

		
		<div class="test_slider_one">
			
			
		<?php if(get_field('testimonial_slider')): ?>
		 
			<?php while(has_sub_field('testimonial_slider')): ?>
		 
				<div class="test_single_slide">
				
					<span class="slide_content"><?php the_sub_field( 'single_testimonial_content' ); ?>

						<span class="slider_one_name"><?php the_sub_field( 'single_testimonial_name' ); ?></span><!-- slider_one_name -->
				
					</span><!-- slide_content -->

				</div><!-- test_single_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
			

			
		</div><!-- test_slider_one -->
		
		<div class="test_slider_two">
			
			
			
			<?php if(get_field('testimonial_slider')): ?>
		 
			<?php while(has_sub_field('testimonial_slider')): ?>
		 
				<div class="test_single_slide_name">
				
				<?php the_sub_field( 'single_testimonial_name' ); ?>
				
				</div><!-- test_single_slide_name -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
			

			
		</div><!-- test_slider_two -->
		
	</div><!-- testi_slider_wrapper -->
	
	
	
	
	<div class="test_content">
		
		<?php the_field( 'testimonial_content' ); ?>
		
	</div><!-- test_content -->
	
	
	
</section><!-- testimonials -->


<section id="case_results_animate" class="case_results">
	
	
	<div class="case_results_wave_wrapper">
		
		
		<div class="wave_set_inner_wrapper">
		
		<svg id="wave_set_case_results" height="500">
    
    	<path class="primary" d=""/>
			<path class="secondary" d=""/>
  
		</svg>
		
		
		
		
		<svg id="mobile_waves_case_results" viewBox="0 0 1924 520.26" preserveAspectRatio="none">
		
			<defs></defs>
		
			<title>Untitled-8</title>
		
			<path class="mobile_path" d="M1924,96.26s-198-84-746,0-1178,84-1178,84v340H1924Z"/>
			<path class="mobile_path" d="M0,52.26s410-124,1046,10,846,118,878,112v346H0Z"/>
		
		</svg>
		
		
	

		
		
		
		
		
		</div><!--- wave_set_inner_wrapper -->
		
		
		
		
		
	<svg id="wave_bg_case_results" viewBox="0 0 1924 2165.36" preserveAspectRatio="none">
		
		<defs>
		
		
		
		
		<linearGradient id="wavebg_case_results_gradient" x2="100%" y2="0%" gradientTransform="rotate(35 0 0)">
						
				<stop offset="50%" stop-color="#193cc9" />
				<stop offset="100%" stop-color=" #0b2691" />
      
		</linearGradient>
		
		</defs>
		
		
		<path class="wavebg_path" d="M0,0S256.13-1.5,634.11,117s592.47,117,744,114S1909,193.49,1924,186V2165.36H0Z"/>
		
		
		<line class="runways" vector-effect="non-scaling-stroke" x1="376.12" y1="48.84" x2="376.12" y2="2165.36"/>
		<line class="runways" vector-effect="non-scaling-stroke" x1="758.6" y1="153.41" x2="758.6" y2="2165.36"/>
		<line class="runways" vector-effect="non-scaling-stroke" x1="1144.58" y1="224.97" x2="1144.58" y2="2165.36"/>
		<line class="runways" vector-effect="non-scaling-stroke" x1="1528.44" y1="223.53" x2="1528.44" y2="2165.36"/>
		
		
		<rect class="runway_blink" x="375.17" y="220.35" width="1.9" height="9.98"/>
		<rect class="runway_blink" x="375.17" y="1966.62" width="1.9" height="9.98"/>
		<rect class="runway_blink" x="757.65" y="1429.62" width="1.9" height="9.98"/>
		<rect class="runway_blink" x="757.65" y="362.38" width="1.9" height="9.98"/>
		<rect class="runway_blink" x="1143.63" y="1888.59" width="1.9" height="9.98"/>
		<rect class="runway_blink" x="1527.6" y="2062.37" width="1.9" height="9.98"/>
		<rect class="runway_blink" x="1527.55" y="531.38" width="1.9" height="9.98"/>
		
		
	</svg>

		
		
	</div><!-- case_results_wave_wrapper -->
	
	<div class="case_results_inner">
	
	<div class="testi_slider_wrapper testi_case_results">
		
		
		<div class="test_slider_one">

			<?php if(get_field('testimonial_slider')): ?>
		 
			<?php while(has_sub_field('testimonial_slider')): ?>
		 
				<div class="test_single_slide">
				
					<span class="slide_content"><?php the_sub_field( 'single_testimonial_content' ); ?>

						<span class="slider_one_name"><?php the_sub_field( 'single_testimonial_name' ); ?></span><!-- slider_one_name -->
				
					</span><!-- slide_content -->

				</div><!-- test_single_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>

			
		</div><!-- test_slider_one -->
		
		
	</div><!-- testi_slider_wrapper -->
	
	
	
	
	
	
	
	
		<span id="case_results_animate_two" class="large_header"><?php the_field( 'case_results_title' ); ?></span><!-- large_header -->
		
		<div class="sub_header_wrapper">
			
		<svg id="air4" viewBox="0 0 148.62 37.52">
			
			<defs></defs>
			
				<line class="cloud1_animate_1" x1="120.42" y1="36.52" x2="147.62" y2="36.52"/>
				<path class="cloud1_animate_2" d="M32.82,7.6S23.12-4.3,9.32,3.8C-6,13.9,1.42,36.5,18.52,36.5h88" transform="translate(0 0.02)"/>
			
			</svg> 
			
			<span class="sub_header">  <?php the_field( 'case_results_subheader' ); ?></span><!-- sub_header -->
			
		</div><!-- sub_header_wrapper -->
		
		
		
		
		<div class="case_results_slider_wrapper">
			
			<div class="large_case_slider">
				
			
				
					<div class="case_inner_content">
						
						
						
						
						
				<?php if(get_field('case_results')): ?>
						 
					<?php while(has_sub_field('case_results')): ?>
						 
								
								
								
								
								
					<div class="large_single_case large_single_case_<?php the_sub_field( 'class' ); ?>">
						
						<span class="number_header"><?php the_sub_field( 'large_header_amount' ); ?></span><!-- large_header -->
						
						
						
							<span class="case_sub_header"><?php the_sub_field( 'case_title' ); ?><div class="case_purple_line"></div><!-- case_purple_line --></span>
							
							
						
					
						
						<div class="case_content">
						
						<?php the_sub_field( 'case_results_content' ); ?>
							
						</div><!-- case_content -->
					
						
						
						
						<div class="case_category_wrapper">
							
							<div class="case_category_title"><?php the_sub_field( 'result_type' ); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php the_sub_field( 'case_category' ); ?></div><!-- case_category_title -->
							
						</div><!-- case_category_wrapper -->
						
						
						</div><!-- large_single_case -->
								
								
								
								
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
						

						
						
						<svg id="mysquare" xmlns="http://www.w3.org/2000/svg">

							<rect x="0" y="0" width="100%" height="100%"/>
  
							<defs>
							
								<linearGradient id="Gradient3" x2="100%" y2="0%">
						
									<stop offset="40%" stop-color="#b51ac9" />
									<stop offset="100%" stop-color=" #193cc9" />
      
									</linearGradient>
							</defs> 

						</svg>
					
						
					</div><!-- case_inner_content -->
				

				
			</div><!-- large_case_slider -->
			
			
			<div class="small_case_thumbnails">
				
				
				
				<?php if(get_field('case_results')): ?>
				 
					<?php while(has_sub_field('case_results')): ?>
				 
						<div class="small_single_case small_single_case_<?php the_sub_field( 'class' ); ?>">
					
							<div class="inner_single_case">
					
						
							<span class="single_case_numbers"><?php the_sub_field( 'small_thumbnail_results_amount' ); ?></span>
						
							<span class="case_description"><?php the_sub_field( 'small_thumbnail_description' ); ?></span>
					
						</div><!-- inner_single_case -->
					
					</div><!-- small_single_case -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
				
				
				
			</div><!-- small_case_thumbnails -->
			
			<div class="small_case_buttons_wrapper">
				
				
				<div class="small_button small_button_left">
					
					<img src="<?php bloginfo('template_directory');?>/images/results-arrow-tab-l.png"/>
					
				</div><!-- small_button_left -->
				
				<div class="small_button small_button_right">
					
					<img src="<?php bloginfo('template_directory');?>/images/results-arrow-tab-r.png"/>
					
				</div><!-- small_button_right -->
				
				
			</div><!-- small_case_thumbnails_buttons -->
			
			<div style="clear:both"></div>
			
		</div><!-- case_results_slider_wrapper -->
		
	
	</div><!-- case_results_inner -->
	
</section><!-- case_results -->


<section class="aviation_accidents clouds_two">
	
	<div class="inner_accidents">
	
		<div class="accidents_grid">
			
			
			<?php if(get_field('types_of_aviation_list')): ?>
			 
				<ul>
				
				<?php while(has_sub_field('types_of_aviation_list')): ?>
			 
					
					<li><a href="<?php the_sub_field( 'link' ); ?>"><?php the_sub_field( 'name' ); ?></a></li>
					
					
			    
				<?php endwhile; ?>
				
				</ul>
			 
			<?php endif; ?>
			
		
						
			
		</div><!-- accidents_grid -->
		
		
		<div class="accidents_right_content">
			
			
		<a href="<?php the_field( 'types_of_aviation_pa_directory_link' ); ?>" style="text-decoration: none;color:#060606">
			
			<div class="types_of_accidents_wrapper">
				
				<div class="accidents_gradient">
					
					<div class="accidents_inner_gradient">
						
						<div class="accident_title">
							
							
							
								<span class="accident_title_reg"><?php the_field( 'types_of_aviation_content' ); ?></span>
								<span class="accident_title_gradient"><?php the_field( 'types_of_aviation_content_2' ); ?></span>
								<span class="accident_title_reg"><?php the_field( 'types_of_aviation_content_3' ); ?></span>
							
						
							
						
						</div><!-- accident_title -->
						
					</div><!-- accidents_inner_gradient -->
					
				</div><!-- accidents_gradient -->
				
				
			</div><!-- types_of_accidents_wrapper -->
			
		</a>
		
		
		</div><!-- accidents_right_content -->
		
		
		<div style="clear:both"></div>
		
	
	</div><!-- inner_accidents -->
	
	
	<div class="awards_outer_wrapper">
	
	
	
	<div class="awards_wrapper">
		
		
		<span class="large_header"><?php the_field( 'awards_title' ); ?></span><!-- large_header -->
		
		<div class="greyline_wrapper">
			
			<div class="grey_line"></div><!-- grey_line -->
			
			<div class="grey_square"></div><!-- grey_square-->
			
		</div><!-- greyline_wrapper -->
		
	</div><!-- awards_wrapper -->
	
	
	<div class="awards_slider_wrapper">
		
		<div class="back_button slider_button">
				
				<img src="<?php bloginfo('template_directory');?>/images/awards-arrow-l.png"/>
				
			</div><!-- next_button -->
	
		<div class="awards_slider">
			
			
			<?php if(get_field('awards_slider')): ?>
			 
				<?php while(has_sub_field('awards_slider')): ?>
			 
				
			    <div class="awards_single_slide">
				
						<?php $image = get_sub_field( 'image' ); ?>
		
						<?php if ( $image ) { ?>
			
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		
						<?php } ?>
				
					</div><!-- awards_single_slider -->
				
				
				<?php endwhile; ?>
			 
			<?php endif; ?>

			
		</div><!-- awards_slider -->
		
		<div class="next_button slider_button">
				
				<img src="<?php bloginfo('template_directory');?>/images/awards-arrow-r.png"/>
				
			</div><!-- next_button -->
	
	</div><!-- awards_slider_wrapper -->
	
	
	
	<div style="clear:both"></div>
	
	</div><!-- awards_outer_wrapper -->
	
	
</section><!-- aviation_accidents -->



<?php get_footer(); ?>
