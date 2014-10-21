<?php get_header(); ?>

<div class="wrapper section-inner">
	
		<div class="content left">
				
			<div class="posts">


			
				<div class="page-title">
		
					<h4>Storytellers</h4>
					

				</div> <!-- /page-title -->
				
				<div class="clear"></div>


		
				<?php if ( have_posts() ) : ?>

			
					<?php rewind_posts(); ?>
				     
					<?php 
					$args = array( 'post_type' => 'storyteller', 'posts_per_page'=>-1, 'meta_key'=> 'storyteller_last_name','orderby'=> 'meta_value','order'=>'ASC');
					$loop = new WP_Query( $args );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
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