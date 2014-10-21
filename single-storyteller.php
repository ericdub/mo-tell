<?php get_header(); ?>

<div class="wrapper section-inner">

	<div class="content left">
												        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div class="posts">
		
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					<div class="post-header">

						<?php if ( has_post_thumbnail() ) : ?>
					
							<div class="featured-media-storyteller">
							
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
								
									<?php the_post_thumbnail('post-image'); ?>
									
									
									
								</a>
										
							</div> <!-- /featured-media -->
								
						<?php endif; ?>
						
						<?php $videourl = get_post_meta($post->ID, 'videourl', true); if ( $videourl != '' ) : ?>

							<div class="featured-media">
							
								<?php if (strpos($videourl,'.mp4') !== false) : ?>
				
									<video controls>
									  <source src="<?php echo $videourl; ?>" type="video/mp4">
									</video>
																							
								<?php else : ?>
									
									<?php 
									
										$embed_code = wp_oembed_get($videourl); 
										
										echo $embed_code;
										
									?>
										
								<?php endif; ?>
								
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
														                                    	    
					<div class="post-content storyteller-post-content">
						<?php 
						//Loop through custom storyteller fields
                                                echo '<div class="storyteller-contact"><div class="storyteller-contact-title">Contact Info</div>'; 
                                                   echo'<div class="storyteller-contact-meta">';
                                                   if(get_field('storyteller_email')){
                                                             $st_email = get_field('storyteller_email');
                                                             echo '<p><a href="mailto:'. $st_email.'">';
                                                             echo $st_email;						
	                                                     echo '</a></p>';
                                                    }
                                                  if(get_field('storyteller_phone')){
                                                              $st_phone = get_field('storyteller_phone');
                                                             echo '<p>'.$st_phone;
                                                             echo '</p>';						
	                                                     
                                                    }
                                                    if(get_field('storyteller_web_site')){
                                                              $st_web = get_field('storyteller_web_site');
                                                             echo '<p><a href="'.$st_web.'">'.$st_web.'</a>';
                                                             echo '</p>';						
	                                                     
                                                    }
                                                    if(get_the_term_list( $post->ID, 'storyteller_categories', 'Categories: ', ' / ' )){
                                                              $st_terms = get_the_term_list( $post->ID, 'storyteller_categories', 'Categories: ', ' / ' );
                                                             echo '<p>'.$st_terms;
                                                             echo '</p>';						
	                                                     
                                                    }
                                                echo '</div>';    
                                                echo '</div>';
                                                if(get_field('storyteller_biography')){
                                                              $st_bio = get_field('storyteller_biography');
                                                             echo $st_bio;
                                                             						
	                                                     
                                                    }
                         ?>  <!--storyteller content -->  		            			            	                                                                                            
						<?php //the_content(); ?>
								
						<?php wp_link_pages(); ?>
									        
					</div> <!-- /post-content -->
					            
					<div class="clear"></div>
					
					<?php /*
					<div class="post-meta-bottom">
																		
						<p class="post-categories"><span class="category-icon"><span class="front-flap"></span></span> <?php the_category(', '); ?></p>
						
						<?php if( has_tag()) { ?><p class="post-tags"><?php the_tags('', ''); ?></p><?php } ?>
						
						<div class="clear"></div>
												
						<div class="post-nav">
													
							<?php
							$prev_post = get_previous_post();
							if (!empty( $prev_post )): ?>
							
								<a class="post-nav-older" title="<?php _e('Previous post:', 'hemingway'); echo ' ' . get_the_title($prev_post); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>">
								
								<h5><?php _e('Previous post', 'hemingway'); ?></h5>																
								<?php echo get_the_title($prev_post); ?>
								
								</a>
						
							<?php endif; ?>
							
							<?php
							$next_post = get_next_post();
							if (!empty( $next_post )): ?>
								
								<a class="post-nav-newer" title="<?php _e('Next post:', 'hemingway'); echo ' ' . get_the_title($next_post); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>">
								
								<h5><?php _e('Next post', 'hemingway'); ?></h5>							
								<?php echo get_the_title($next_post); ?>
								
								</a>
						
							<?php endif; ?>
														
							<div class="clear"></div>
						
						</div> <!-- /post-nav -->
											
					</div> <!-- /post-meta-bottom -->
					
					*/?> 
												                        
			   	<?php endwhile; else: ?>
			
					<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "hemingway"); ?></p>
				
				<?php endif; ?>    
		
			</div> <!-- /post -->
			
		</div> <!-- /posts -->
	
	</div> <!-- /content -->
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>
	
</div> <!-- /wrapper -->
		
<?php get_footer(); ?>