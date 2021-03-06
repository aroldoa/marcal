<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>
	<title>
		<?php
			if (function_exists('is_tag') && is_tag()) {
				single_tag_title("Tag Archive for "); echo '" - '; }
			elseif (is_archive()) {
				wp_title(''); echo ' Archive - '; }
			elseif (is_search()) {
				echo 'Search for "'.wp_specialchars($s).'" - '; }
			elseif (!(is_404()) && (is_single()) || (is_page() && !is_front_page())) {
				wp_title('');}
			elseif (is_404()) {
				echo 'Not Found - '; }
			if (is_home() || is_front_page()) {
				bloginfo('name');}
			else {
		}
			if ($paged>1) {
			echo ' page '. $paged; }
		?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/slippry.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/icons.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  	<header>
  		<div class="container">
  			<div class="nav-bar">
	  			<div class="col-md-8">
		  			Over 20 years experience in temp staffing as well as direct hire professional services
		  		</div>
		  		<div class="col-md-2">
		  			<div class="call">Call Today: 210-222-222</div>
		  		</div>
		  		<div class="col-md-2">
		  			<div class="social-icons">
			  			<a href="#" title="Follow me on Twitter"><span class="social_twitter_circle" aria-hidden="true"></span></a>
			  			<a href="#" title="Follow me on Facebook"><span class="social_facebook_circle" aria-hidden="true"></span></a>
			  			<a href="#" title="Follow me on YouTube"><span class="social_youtube_circle" aria-hidden="true"></span></a>
			  			<a href="#" title="Follow me on Google+"><span class="social_googleplus_circle" aria-hidden="true"></span></a>
			  		</div>
			  	</div>
  			</div>
  			<div class="col-md-3">
  				<div class="logo">
	  				<a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.svg" alt="MarCal Recruiting"/></a>
	  			</div>
  			</div>
  			<div class="col-md-9 menu">
	  			<nav>

	  			<?php

		  			$defaults = array(
		  				'theme_location'  => '',
		  				'menu'            => '',
		  				'container'       => '',
		  				'container_class' => '',
		  				'container_id'    => '',
		  				'menu_class'      => '',
		  				'menu_id'         => 'main-nav',
		  				'echo'            => true,
		  				'fallback_cb'     => 'wp_page_menu',
		  				'before'          => '',
		  				'after'           => '',
		  				'link_before'     => '',
		  				'link_after'      => '',
		  				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		  				'depth'           => 0,
		  				'walker'          => ''
		  				);

		  				wp_nav_menu( $defaults );
		  		?>

	  			</nav>
  			</div>
    	</div>
    	<div class="slider">
	    	<ul id="slippry-demo">
				<li>
					<a href="#slide1"><img src="<?php bloginfo( 'template_directory' ); ?>/images/slideshow.jpg" alt="Welcome to MarCal Recruiting,<br/> Your Professional Recuriting and Staffing Agency"></a>
				</li>
				<li>
					<a href="#slide2"><img src="<?php bloginfo( 'template_directory' ); ?>/images/slideshow2.jpg"  alt="Looking for your dream job? <br/>We can help!"></a>
				</li>
				<li>
					<a href="#slide3"><img src="<?php bloginfo( 'template_directory' ); ?>/images/slideshow3.jpg" alt="Working with Companies to help <br/>them find great people!"></a>
				</li>
			</ul>
    	</div>
  	</header>