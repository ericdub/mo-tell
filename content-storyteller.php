<div class="post-header">

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="featured-media-storyteller">
							
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
								
									<?php the_post_thumbnail('post-image'); ?>
									
									
									
								</a>
										
							</div> <!-- /featured-media -->
			
	<?php else: ?>

	    <div class="featured-media-storyteller">
							
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
								
				<img src="/wp-content/themes/mo-tell/images/storyteller-placeholder.png" width="150" height="150" alt="placeholder image for author photo" />
									
			</a>
										
		</div> <!-- /featured-media -->

	<?php endif; ?>
	
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    
    <div class="post-meta">
	
		
		
		<?php if ( current_user_can( 'manage_options' ) ) { ?>
		
			<span class="date-sep"> / </span>
						
			<?php edit_post_link(__('Edit', 'hemingway')); ?>
		
		<?php } ?>
								
	</div>
    
</div> <!-- /post-header -->
									                                    	    
<div class="post-content">
	    		            			            	                                                                                            
		<?php the_content(); ?>
					
		<?php wp_link_pages(); ?>

</div> <!-- /post-content -->
            
<div class="clear"></div>