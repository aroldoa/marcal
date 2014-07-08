  	<div class="spacer"></div>
  	<section class="bottom">
	  	<div class="container">
		  	<div class="col-lg-5">
			  	<h4>Company News</h4>
	<ul id="featured-articles">
			  	<?php
					// the query

$args = array(
	'post_type' => 'post',
	'posts_per_page'=> 2,
	'order' => 'ASC'
);

$get_resources = new WP_Query( $args ); ?>

<?php if ( $get_resources->have_posts() ) : ?>

<?php while ( $get_resources->have_posts() ) : $get_resources->the_post(); ?>

			  	
				  		<li>
					  		<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  									the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); 
									} 
							?>
					  		<div class="date"><?php the_date();?></div>
					  		<div class="excerpt"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>

				  		</li>

<?php endwhile; endif;?>

			  		</ul>
		  	</div>
		  	<div class="col-lg-5 col-lg-offset-2 newsletter">
			  	<h4>Join our Newsletter</h4>
			  	<p>Ut imperdiet sed enim vel cursus. Integer vulputate tempus aliquet. Nam consequat libero vel lorem pulvinar accumsan. Nunc vulputate auctor augue, et condimentum mi sagittis id. Vestibulum ante ipsum</p>

			  	<form>
			  		<div class="col-lg-6 row">
			  		<label>Your Name</label>
				  		<input class="span10" type="text" value="" id=""/>
				  	</div>
				  	<div class="col-lg-6 ">
				  	<label>Your Email</label>
				  		<input class="span10" type="text" value="" id=""/>
				  	</div>

				  	<button class="orange">Sign Up!</button>

			  	</form>
		  	</div>
	  	</div>
  	</section>
  	<footer>
	  	<div class="container foot">
		  	<div class="col-lg-10">
			  	<nav>
				  	<ul id="footer-nav">
					  	<li><a href="#">Home</a></li>
					  	<li><a href="#">About Us</a></li>
					  	<li><a href="#">Search Jobs</a></li>
					  	<li><a href="#">For Employers</a></li>
					  	<li><a href="#">Contact Us</a></li>
				  	</ul>
			  	</nav>
		  	</div>
		  	<div class="col-lg-2">
			  	asf
		  	</div>
	  	</div>
	  	<div class="copyright container">
		  	&copy; Copyright 2014, MarCal Recruiting All Rights reserved.
	  	</div>
  	</footer>
  	<?php wp_footer(); ?>
	<script>
		jQuery(document).ready(function(){
			jQuery('#slippry-demo').slippry({
				 // general elements & wrapper
				 slippryWrapper: '<div class="sy-box portfolio-slider" />', // wrapper to wrap everything, including pager

				 // options
				 adaptiveHeight: false, // height of the sliders adapts to current slide
				 start: '1', // num (starting from 1), random
				 loop: true, // first -> last & last -> first arrows

				 // transitions
				 transition: 'fade', // fade, horizontal, kenburns, false
				 easing: 'linear', // easing to use in the animation [(see... [jquery www])]
				 continuous: true,

				 // slideshow
				 auto: true
			});
			jQuery('.alternate:nth-child(even)').addClass('light');
			jQuery('.alternate:nth-child(odd)').css({'background-color':'#fff'});
		});
	</script>
  </body>
</html>