<?php get_header('sub'); ?>

<?php get_template_part('part','titleblog');?>
  	<section class="white">
	  	<div class="container main ">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div class="col-sm-8">
				<h2><?php the_title();?></h2> <hr style="margin-bottom:30px;" />
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
	<?php endwhile; endif; ?>

	<div class="col-sm-3 sidebararea col-xs-offset-1">
			<?php get_sidebar('blog'); ?>
	</div>

	</div>
 	</section>	
<?php get_footer(); ?>