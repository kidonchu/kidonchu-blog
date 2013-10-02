<!DOCTYPE html>

<html <?php language_attributes() ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

	<!-- <link rel="stylesheet" href="http://basehold.it/24"> -->

	<title><?php wp_title('|', true, 'right') ?></title>

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>

<?php themezee_wrapper_before(); // hook before #wrapper ?>

	<div class="container wrapper">

		<div class="row">

			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">

				<?php themezee_header_before(); // hook before #header ?>
				<div class="logo">
					<a class="logo-title" href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a>
					<h2 class="logo-subtitle"><?php echo bloginfo('description') ?></h2>
				</div>
				<?php themezee_header_after(); // hook after #header ?>

				<div class="wrap">

					<div class="inner-wrap">

						<div class="navi">
							<?php
							// Get Main Navigation out of Theme Options
								wp_nav_menu(array('theme_location' => 'main_navi', 'container' => false, 'menu_id' => 'nav', 'echo' => true, 'fallback_cb' => 'themezee_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
							?>
						</div>
