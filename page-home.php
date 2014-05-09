<?php /* Template Name: Home Page */ get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- section -->
	<section role="main">
	
		<h1><?php the_field('introduction'); ?></h1>
		<section id="projects" class="group">
		<h2>Featured Projects</h2>
		<?php if( get_field('projects') ): while( has_sub_field('projects') ): ?>
		<?php	if( get_sub_field('feature') )
			{ ?>
    <article class="project w50">
			<a href="<?php the_sub_field('project_link'); ?>">
			<?php $attachment_id = get_sub_field('feature-image');
			$size = "halfwidth"; 
			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
			<img src="<?php echo $image[0]; ?>"/>
			<span>
				<h3><?php the_sub_field('project_name'); ?></h3>
				<h4>View Project</h4>
			</span>
			</a>
		</article>  
		<?php } else { ?> 
    <article class="project w25">
			<a href="<?php the_sub_field('project_link'); ?>">
			<?php $attachment_id = get_sub_field('image');
			$size = "quartersquare"; 
			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
			<img src="<?php echo $image[0]; ?>"/>
			<span>
				<h3><?php the_sub_field('project_name'); ?></h3>
				<h4>View Project</h4>
			</span>
			</a>
		</article> 
		<?php }	?>
		<?php endwhile; ?><?php endif; ?>
		</section>
		<p><a href="/projects">+ View more projects</a></p>
	<?php endwhile; endif; ?>
	</section>
	<!-- /section -->
<?php get_footer(); ?>	