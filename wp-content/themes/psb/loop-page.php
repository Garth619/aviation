

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			
					

					
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					

				

<?php endwhile; // end of the loop. ?>
