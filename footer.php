<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banowetz
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="footer-bg footer-mobile-bg bg-img" style="background-image: url('<?php the_field('footer_background_image','options'); ?>')"></div>
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<div class="footer-form white-text" id="contact">
						<h2 class="h2-title">Contact Us</h2>
						<?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
					</div>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="footer-skew for-des">
						<div class="footer-bg bg-img" style="background-image: url('<?php the_field('footer_background_image','options'); ?>')"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-middel">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-middel-bg">
						<iframe class="map" width="240" height="325" src="<?php the_field('iframe_link','options'); ?>"  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="footer-content" id="locations">
						<div class="footer-link-box">
							<a href="<?php the_field('main_address_link', 'options'); ?>" title="<?php the_field('main_address_link', 'options') ?>" target="_blank">
								<span class="footer-link-icon">
									<img width="30" height="38" src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/localization.svg" alt="location">
								</span>
								<div class="footer-link-content">
									<?php the_field('main_address', 'option'); ?>
								</div>
							</a>
						</div>
						<div class="footer-link-box dark mail">
							<a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>">
								<span class="footer-link-icon">
									<img width="29" height="24" src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/envelope.svg" alt="Envolope">
								</span>
								<div class="footer-link-content">
									<?php the_field('email','options'); ?>
								</div>
							</a>
						</div>
						<div class="footer-link-box dark contact-no">
							<?php
							$phone_number = get_field('phone_number', 'option');
							$val = array("(", ")", " ", "-");
							$replace = array("", "", "", "");
							$phone_link = str_replace($val, $replace, $phone_number);
							?>
							<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone_number; ?>">
								<span class="footer-link-icon">
									<img width="30" height="30" src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/phone.svg" alt="phone">
								</span>
								<div class="footer-link-content">
									<span class="bold"><?php the_field('phone_number', 'option'); ?></span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7 offset-lg-1">
					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>" title="Linwood Tile Company">
							<img width="407" height="77" src="<?php the_field('footer_logo','options'); ?>" alt="Logo">
						</a>
					</div>
					<div class="footer-content-text white-text">
						<?php the_field('footer_content','options'); ?>
					</div>
					<div class="header-icon footer-social">
						<a href="<?php the_field('facebook_link', 'option'); ?>" title="Facebook" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16">
								<g id="Facebook2" transform="translate(0 0)">
									<path id="Path_262" data-name="Path 262" d="M39.75,23.5h2.5v-3h-2.5a3.5,3.5,0,0,0-3.5,3.5v1.5h-2v3h2v8h3v-8h2.5l.5-3h-3V24A.507.507,0,0,1,39.75,23.5Z" transform="translate(-34.25 -20.5)" fill="#063583" />
								</g>
							</svg>
						</a>
					</div>
					<div class="footer-menu">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-3',
							'menu_id' => 'footer-menu',
						));
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<div class="footer-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="copyright">
					<ul>
						<li>&copy; <?php echo date('Y'); ?> Linwood Tile Company</li>
						<li> <a href="<?php echo home_url() . '/privacy-policy/'; ?>" title="Privacy Policy">Privacy Policy</a></li>
						<li> <a href="<?php echo home_url() . '/terms-of-use/'; ?>" title="Terms of Use">Terms of Use</a></li>
						<li> <a href="<?php echo home_url() . '/cookie-policy/'; ?>" title="Cookie Policy">Cookie Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="copyright-bottom-link">
					<p>Web Design &amp; Digital Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>