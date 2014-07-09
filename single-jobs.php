<?php get_header('sub'); ?>
<?php get_template_part('part','titlearea');?>
  	<section class="white">
	  	<div class="container">

	  		<div class="col-md-9 left-col">
		  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<div class="postedby">
					Posted on: <?php the_date(); ?>
				</div>
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

					<?php the_tags( 'Tags: ', ', ', ''); ?>

			<?php endwhile; endif; ?>
			<hr/>
			<div class="apply">
	  			<?php gravity_form('Apply for this Job Today!'); ?>
	  		</div>
	  		</div>
	  		<div class="col-md-3 right-col">
				<?php get_sidebar('jobs'); ?>
	  		</div>
	  	</div>
  	</section>
<?php get_footer();?>