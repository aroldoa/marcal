<?php
/**
 * Template Name: Job Search
 *
 * A custom Search Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header('sub'); ?>
<?php get_template_part('part','titlearea');?>
  	<section class="white">
	  	<div class="container main jobs-list light">
	  		<div class="col-md-6">
		  		<?php
			  		// the query
			  		$args = array(
			  		'post_type' => 'jobs',
			  		'posts_per_page'=> 12
			  		);
			  		$get_resources = new WP_Query( $args );
			  		?>

			  	<?php if ( $get_resources->have_posts() ) : ?>

			  	<?php while ( $get_resources->have_posts() ) : $get_resources->the_post(); ?>
		  		<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
		  		<?php the_excerpt();?>

		  	</div>
		  	<div class="col-md-4">
			  		<?php echo get_post_meta($post->ID, 'Location', true); ?>
		  	</div>
		  	<div class="col-md-2">
			  		<?php echo get_post_meta($post->ID, 'Job Type', true); ?>
		  	</div>

		  	<?php endwhile; endif; ?>

	  	</div>
  	</section>
<?php get_footer(); ?>