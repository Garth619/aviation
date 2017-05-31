<div class="sidebar_wrapper">
	
	<div class="sidebar_inner">
		
		
		
		
		<?php if ( $profilepic ) { ?>
	
			<img class="profile_pic" src="<?php echo $profilepic['url']; ?>" alt="<?php echo $profilepic['alt']; ?>" />

		<?php } ?>

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
	
	<div class="email_vcard_wrapper">
			
			<a class="email_profile profile_link" href="mailto:<?php the_field( 'profile_email' ); ?>">
				
				<?php the_field( 'email_button' ); ?>
				
			</a><!-- email_profile -->
			
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