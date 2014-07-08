<?php get_header('sub'); ?>

<?php get_template_part('part','titleblog');?>
  	<section class="white">
	  	<div class="container main ">

	  		<div class="col-sm-8">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2><hr/>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2><hr/>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2><hr/>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2><hr/>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2><hr/>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2><hr/>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2> <hr/>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
			<div class="entry">
				
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					
						<?php the_excerpt(); ?>
					</div>

				</div>

			<?php endwhile; endif; ?>

	<div class="col-sm-3 sidebararea col-xs-offset-1">
		<?php get_sidebar('blog'); ?>
	</div>	
	</div>
 	</section>	
<?php get_footer(); ?>
