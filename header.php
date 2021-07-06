<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@900&display=swap" rel="stylesheet">

	<?php wp_head(); // intégrer des elements indispensable à Wordpress comme les fichiers CSS, JS, Admin bar 
	?>
</head>

<body <?php body_class('bg-color-brown text-light'); ?>>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>

	<div>&nbsp;</div>

	<div class="container-fluid conteneur"> <!-- General Container -->

		<div class="row container">
			<header class="col-xl-12 bg-color-black overflow-hidden">
				<?php the_custom_logo(); ?>
				<img src="<?php header_image(); ?>" alt="">
			</header>


			<!-- NAV -->
			<nav class="col-xl-2 bg-color-black border border-primary menu_font_alegreya navbar-expand-xl col">

				<!-- BOUTON (Mobile) -->
				<button class="navbar-toggler wacool-menu-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas light fa-bars"></i>
				</button>

				<div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">

					<!-- MENU -->
					<?php

					if (has_nav_menu('primary')) {

						wp_nav_menu(
							array(
								'menu' => 'primary',
								'theme_location' => 'primary',
							)

						);
					} elseif (!has_nav_menu('expanded')) {

						wp_list_pages(
							array(
								'match_menu_classes' => true,
								'show_sub_menu_icons' => true,
								'title_li' => false,
							)
						);
					}
					?>



				</div>

			</nav> <!-- End of NAV -->