<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banowetz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/linwood-tile-company/assets/fonts/Poppins-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/linwood-tile-company/assets/fonts/Poppins-Light.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/linwood-tile-company/assets/fonts/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/linwood-tile-company/assets/fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/linwood-tile-company/assets/fonts/Poppins-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="site-branding">
							<?php
							the_custom_logo(); ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-lg-9">
						<?php
						$phone_number = get_field('phone_number', 'option');
						$val = array("(", ")", " ", "-");
						$replace = array("", "", "", "");
						$phone_link = str_replace($val, $replace, $phone_number);
						?>
						<a href="tel:<?php echo $phone_link; ?>" class="call-mobile" title="Call on <?php echo $phone_link; ?>">
							<img width="30" height="30" src="<?php echo home_url('/wp-content/uploads/2022/11/phone.svg'); ?>" alt="mobile icon">
						</a>
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
							<div class="header-icon">
								<!-- <div>
									<a href="tel:5638724723" title="563-872-4723" class="mobile-number">
										<span class="footer-link-icon">
											<img src="<?php //bloginfo('template_url'); ?>/assets/images/phone.png" alt="Phone">
										</span>
										<div class="footer-link-content">
											<span class="bold">563-872-4723</span>
										</div>
									</a>
								</div> -->
								<div class="hd-social">
									<a href="<?php the_field('facebook_link', 'option'); ?>" title="Facebook" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16">
											<g id="Facebook" transform="translate(0 0)">
												<path id="Path_261" data-name="Path 261" d="M39.75,23.5h2.5v-3h-2.5a3.5,3.5,0,0,0-3.5,3.5v1.5h-2v3h2v8h3v-8h2.5l.5-3h-3V24A.507.507,0,0,1,39.75,23.5Z" transform="translate(-34.25 -20.5)" fill="#063583" />
											</g>
										</svg>
									</a>
								</div>

							</div>
						</nav><!-- #site-navigation -->

					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">