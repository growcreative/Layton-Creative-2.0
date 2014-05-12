<?php /* Template Name: Direction */ get_header(); ?>
	<!-- section -->
	<section id="direction" role="main">
		<h1><a href="/direction"> Direction</a></h1>
		<hr />
		<div class="portfolioContainer group">
			<?php query_posts( array ( 'post_type' =>  'direction' ) ); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php 
				$cat= get_field( 'data_category' ); 
				$cat= array_map('sanitize_title', $cat); 
				$cat= implode(' ', $cat);?>
				<article class="<?php echo $cat; ?> pc25">
				<div class="design_post">
					<a href="<?php the_permalink() ?>">
						<?php $attachment_id = get_field('project_thumbnail');
						$size = "quartersquare"; 
						$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
						<img src="<?php echo $image[0]; ?>" />
						<span>
							<h3><?php the_title(); ?></h3>
							<h4>View Project</h3>
						</span>
					</a>
				</div>
			</article>
			<?php endwhile; else: ?><?php endif; ?>
			<br class="clear" />
		</div>
	</section>
	<!-- /section -->
<?php get_footer(); ?>	