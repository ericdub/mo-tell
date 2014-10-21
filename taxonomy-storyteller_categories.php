<?php get_header(); ?>

<div class="wrapper section-inner">
	
		<div class="content left">
				
			<div class="posts">
			
				<div class="page-title">

					<?php $term =	$wp_query->queried_object;
					echo '<h4>Storytellers in category: '.$term->name.' </h4>';

					?>
		
					
					
				</div> <!-- /page-title -->
				
				<div class="clear"></div>
		
				<?php if ( have_posts() ) : ?>
			
					<?php rewind_posts(); ?>
				     
					<?php 
					

					 while ( have_posts() ) : the_post(); ?>
					
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
							<?php get_template_part( 'content', 'storyteller' ); ?>
							<?php //get_template_part( 'single', 'storyteller' ); ?>

							<hr />
							
							<div class="clear"></div>
							
						</div> <!-- /post -->
						
					<?php endwhile; ?>
								
			</div> <!-- /posts -->
						
			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			
				<div class="post-nav archive-nav">
				
					<?php echo get_next_posts_link( __('Older<span> posts</span>', 'hemingway')); ?>
								
					<?php echo get_previous_posts_link( __('Newer<span> posts</span>', 'hemingway')); ?>
					
					<div class="clear"></div>
					
				</div> <!-- /post-nav archive-nav -->
				
				<div class="clear"></div>
				
			<?php endif; ?>
					
		<?php endif; ?>
	
	</div> <!-- /content -->
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>

</div> <!-- /wrapper -->

<?php get_footer(); ?>