<?php
/**
 * Template Name: Attorney Profile
 *

 */

get_header(); ?>

		

			<?php include('banner.php');?>
			
			<div class="inner_main">
				
				
				<div class="container_wrapper">
				
					<div class="container">
					
						<h1 class="title_header">Brian Panish</h1><!-- title_header -->
						
						<div class="purple_line_wrapper">
							
							<div class="purple_line"></div><!-- purple_line -->
							
							<div class="purple_square"></div><!-- purple_square -->
							
						</div><!-- purple_line_wrapper -->
						
						<div class="content">
							

							<div class="tablet_profile_wrapper">
	
								<div class="tablet_profile_inner">
		
									
									<?php global $profilepic;?>
									
									<?php $profilepic = get_field( 'profile_pic' ); ?>
									
									
									<?php if ( $profilepic ) { ?>
	
										<img class="profile_pic" src="<?php echo $profilepic['url']; ?>" alt="<?php echo $profilepic['alt']; ?>" />

									<?php } ?>
									
									
									<script src="https://fast.wistia.com/embed/medias/<?php the_field( 'profile_video' ); ?>.jsonp" async></script>
									<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
									
									
									
									<span class="wistia_embed wistia_async_<?php the_field( 'profile_video' ); ?> popover=true popoverContent=link" style="display:inline">
									
										<a href="#">
										
										
										<div class="video_wrapper">
			
											<div class="video_title"><?php the_field( 'profile_title' ); ?></div><!-- video_title -->
			
											<div class="play_button">
				
												<span class="tri"></span>
					
											</div><!-- play_button -->
			
										</div><!-- video_wrapper -->
										
										
										
										
										
										</a>
									
									</span>
									
									
									
									
											
								</div><!-- sidebar_inner -->
	
								<div class="email_vcard_wrapper_tablet">
			
									<a class="email_profile profile_link" href="mailto:<?php the_field( 'profile_email' ); ?>"><?php the_field( 'email_button' ); ?></a><!-- email_profile -->
			
									<?php if(get_field('download_vcard')):?>
			
										<a class="vcard_profile profile_link" href="<?php the_field( 'download_vcard' ); ?>" target="_blank">
				
											<?php the_field( 'vcard_button' ); ?>
				
										</a>
				
										<?php else:?>
				
				
										<a class="vcard_profile profile_link" href="tel:<?php the_field( 'telephone','option'); ?>">
				
										Call
				
									</a>
				
				
			
									<?php endif;?>
			
								</div><!-- email_vcard_wrapper -->
	
								<div style="clear:both"></div>
	
							</div><!-- sidebar_wrapper -->
							

							
							<?php get_template_part( 'loop', 'page' ); ?>
							
								
							
							
						</div><!-- content -->
					
						
					
					</div><!-- container -->
				
				
				
				<?php include('sidebar-attorney.php');?>
				
				</div><!-- content_wrapper -->
				
				
			</div><!-- inner_main -->
			
			
			<?php get_footer(); ?>
