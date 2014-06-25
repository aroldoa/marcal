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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="home band">
	<div class="upperdeck container">
		<div class="col-md-6">
			asdfasdf
		</div>
		<div class="col-md-6">
			asdfds
		</div>
	</div>
</header>