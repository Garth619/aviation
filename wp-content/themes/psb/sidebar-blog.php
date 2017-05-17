<div class="sidebar_wrapper">
	
	<div class="sidebar_inner">
		
		<div class="sidebar_title_wrapper">
			
			<span class="sidebar_title">Recent News</span>
			
			<img class="svg" src="<?php bloginfo('template_directory');?>/images/svgs/air3.svg"/>
			
		</div><!-- sidebar_title_wrapper -->
		
			<div class="recent_posts_sidebar">
			
				<?php dynamic_sidebar( 'sidebar' ); ?>
			
			</div><!-- recent_posts_sidebar -->
	
	</div><!-- sidebar_inner -->
	
	<div class="sidebar_inner">
		
		<div class="sidebar_title_wrapper">
			
			<span class="sidebar_title">Categories</span>
			
			<img class="svg" src="<?php bloginfo('template_directory');?>/images/svgs/air3.svg"/>
			
		</div><!-- sidebar_title_wrapper -->
		
		
		<?php dynamic_sidebar( 'sidebar-cat' ); ?>
		
		
	</div><!-- sidebar_inner -->
	
	<div style="clear:both"></div>
	
</div><!-- sidebar_wrapper -->