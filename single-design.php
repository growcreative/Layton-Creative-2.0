<?php get_header(); ?>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<section id="design-single" role="main">
		<h2><a href="/design"> Design</a></h2>
		<hr />
		<article id="post-<?php the_ID(); ?>"  class="group">
			<div class="project_details pc30">
				<!-- post title -->
				<h1><?php the_title(); ?></h1>
				<?php the_field('project_description'); ?>
				<br />
				<strong>STUDIO</strong>
				<?php the_field('studio'); ?>				
			</div>
			<div class="project_images pc70">
			<?php if( get_field('project_images') ): while( has_sub_field('project_images') ): ?>
			<?php $attachment_id = get_sub_field('image');
			$size = "fullwidth"; 
			$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
			<img src="<?php echo $image[0]; ?>"/>
			 
			<?php endwhile; ?><?php endif; ?>
			</div>			
		</article>
		
		
	<?php endwhile; endif; ?>
	
	</section>
	
<?php get_footer(); ?>