<?php
/**
 * Template Name: 2 Column
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
	  	<div class="container main ">

		  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		 	<div class="col-sm-8"> 		

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div>	

		<?php endwhile; endif; ?>

		<div class="col-sm-3 sidebararea col-xs-offset-1">
			<?php get_sidebar(); ?>
		</div>

		</div>
  	</section>

<?php get_footer(); ?>
