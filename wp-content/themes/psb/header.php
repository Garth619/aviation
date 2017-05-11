<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />



<style type="text/css">
	
	

/* Critical CSS Laid  Out by Various Pages */

<?php if(is_front_page()):?>





<?php endif;?>


</style>


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="inner_header">
		
		<div class="logo_wrapper">
			
			<a class="" href="<?php bloginfo('url');?>">
				
				<img class="svg" src="<?php bloginfo('template_directory');?>/images/svgs/logo.svg"/>
				
			</a>
			
		</div><!-- logo_wrapper -->
		
		
		<nav>
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
			
			
			
		</nav>
		
		
		<a class="tel" href="tel.18778001700">1 (877) 800-1700</a><!-- tel -->
		
		</div><!-- inner_header -->
		
		
	</header>
	



		