<?php /* Template Name: Design */ get_header(); ?>
	
	
	<!-- section -->
	<section id="design" role="main">

	<div class="portfolioFilter">
		<ul>
			<li><a href="#" data-filter="*" class="current">Design</a></li>
			<li><a href="#" data-filter=".branding">Branding</a></li>
			<li><a href="#" data-filter=".packaging">Packaging</a></li>
			<li><a href="#" data-filter=".print">Print</a></li>
			<li><a href="#" data-filter=".advertising">Advertising</a></li>
			<li><a href="#" data-filter=".environmental">Environmental</a></li>
			<li><a href="#" data-filter=".web">Web</a></li>
		</ul>
	</div>
	<hr />
	<div class="portfolioContainer">
		<?php query_posts( array ( 'post_type' =>  'designposts' ) ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="<?php the_field('data_category'); ?> pc25">
			<div class="portfolio_post">
				<a href="<?php the_permalink() ?>">
					<?php $attachment_id = get_field('project_thumbnail');
					$size = "quartersquare"; 
					$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
					<img src="<?php echo $image[0]; ?>" />
					
					<div class="hover">
						<div class="more_info">
							<h3><?php the_title(); ?></h3>
							<h4>View Project</h3>
						</div>
					</div>
				</a>
			</div>
		</article>
		
		<?php endwhile; else: ?><?php endif; ?>
		<br class="clear" />
		
	</div>
	<div class="portfolioFilter">
		<a href="#" data-filter="*">Show All</a>
	</div>

	</section>
	<!-- /section -->
<?php get_footer(); ?>	