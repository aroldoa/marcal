
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Job Sidebar')) : else : ?>

<div class="widget">
	<button class="teal">Apply Now</button>
</div>
<div class="widget">
	<h4>More Jobs</h4>


	<ul id="jobslist">
	<?php
		$args = array('post_type' => 'jobs','posts_per_page' => 3);
		$loop = new WP_Query($args);
		while ($loop->have_posts() ) : $loop ->the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<div class="date"><?php the_date();?></div>
		</li> <!-- end of product -->
		<?php endwhile; wp_reset_query(); ?>
	</ul>
</div>

<?php endif; ?>