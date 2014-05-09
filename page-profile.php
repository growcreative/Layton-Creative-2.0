<?php /* Template Name: Profile */ get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- section -->
	<section id="profile" role="main">
		<h1>Profile</h1>
		<hr />
		<article class="group">
			<div class="pc50">
				<h2>About</h2>
				<?php the_field('about_text'); ?>
			</div>
			<?php $attachment_id = get_field('profile_image');
			$size = "halfwidth"; 
			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
			<img class="pc50" src="<?php echo $image[0]; ?>"/>
		</article>
		<article id="services" class="group">
			<?php $attachment_id = get_field('services_image');
			$size = "halfwidth"; 
			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
			<img class="pc50" src="<?php echo $image[0]; ?>"/>
			<div class="pc50">
				<h2>Services</h2>
				<?php the_field('services'); ?>
			</div>
		</article>
		<article class="group">
			<div class="pc50">
				<h2>Feedback</h2>
				<?php if( get_field('feedback') ): while( has_sub_field('feedback') ): ?>
				<blockquote>
				<?php the_sub_field('testimonial_text'); ?> 
				<cite><?php the_sub_field('testimonial_author'); ?></cite>
				</blockquote> 
				<?php endwhile; ?><?php endif; ?>
			</div>
			<?php $attachment_id = get_field('feedback_image');
			$size = "halfwidth"; 
			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
			<img class="pc50" src="<?php echo $image[0]; ?>" />
		</article>		
	<?php endwhile; endif; ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>	