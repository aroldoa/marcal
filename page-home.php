<?php
/**
 * Template Name: Home Page
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header();

$args = array(
    'numberposts' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'jobs',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args);

?>
 <div class="spacer"></div>
  	<section class="white">
	  	<div class="intro container">
		  	<div class="col-sm-4">
			  	<h2>For Job Seekers</h2>
			  	<img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/job-seekers.jpg" alt="Looking for a job" width="320px"/>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu risus a risus mollis</p>
			  	<a href="#">Learn More</a>
		  	</div>
		  	<div class="col-sm-4">
			  	<h2>For Employers</h2>
			  	<img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/for-employers.jpg" alt="" width="320px"/>
			  	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu risus a risus mollis</p>
			  	<a href="#">Learn More</a>
		  	</div>
		  	<div class="col-sm-4 jobbox">
			  	<h3>Recently Posted Jobs</h3>
			  	<ul id="recentjobs">
			  	<?php
					foreach( $recent_posts as $recent ){
						echo '<li>
								<div class="category">Administration</div>
								<div class="job-title">
									<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>
								</div>
							  </li> ';
					}
				?>
				  	<!-- <li>
					  	<div class="category">Administration</div>
					  	<div class="job-title">Web / Interactive Programmer & Designer</div>
				  	</li>
				  	<li>
					  	<div class="category">Administration</div>
					  	<div class="job-title">Web / Interactive Programmer & Designer</div>
				  	</li>
				  	<li class="last">
					  	<div class="category">Administration</div>
					  	<div class="job-title">Web / Interactive Programmer & Designer</div>
				  	</li> -->
			  	</ul>
			  	<button class="orange">View All Jobs</button>
		  	</div>
	  	</div>
  	</section>
  	<section class="light highlight">
	  	<div class="container centered">
	  		<div class="col-lg-10 col-lg-offset-1">
		  	<h2>20 years of combined experience in temp staffing as well as direct hire professional services</h2>
		  	<p>MarCal Recruiting has been established as a professional staffing consulting firm to service our existing candidates as well as the employers. Learn how we can help you find the perfect fit for your company today!</p>

		  	<button class="teal">How We Help</button>

		  	<img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/workforce.png" alt=""/>
		  	</div>
	  	</div>
  	</section>
<?php get_footer(); ?>