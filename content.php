<div class="post-header">

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="featured-media-storyteller">
		
			<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'hemingway'); ?></span> <?php } ?>
		
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
			
				<?php the_post_thumbnail('post-image'); ?>
				
				<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
								
					<div class="media-caption-container">
					
						<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
						
					</div>
					
				<?php endif; ?>
				
			</a>
					
		</div> <!-- /featured-media -->
			
	<?php else: ?>

	    <div class="featured-media-storyteller">
		
			<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'hemingway'); ?></span> <?php } ?>
		
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
			
				<img src="/wp-content/themes/mo-tell/images/storyteller-placeholder.png" />
				
				
								
					<div class="media-caption-container">
					
						<p class="media-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
						
					</div>
					
			
				
			</a>
					
		</div> <!-- /featured-media -->
	<?php endif; ?>
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    
   
    
</div> <!-- /post-header -->
									                                    	    
<div class="post-content">


	    		            			            	                                                                                            
		<?php the_content(); ?>
					
		<?php wp_link_pages(); ?>

</div> <!-- /post-content -->
            
<div class="clear"></div>