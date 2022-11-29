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
	<div class="footer-bg desktop-footer" style="background-image: url(<?php the_field('footer_background_image','option') ?>)"></div>
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class="col-lg-8">
					<div class="footer-form" id="contact">
						<h2 class="h2-title">Contact Us</h2>
						<?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer-skew">
						<div class="footer-bg" style="background-image: url(<?php the_field('footer_background_image','option') ?>)"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-middel">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<div class="footer-middel-bg">
						<iframe class="map" width="240" height="325" src="https://maps.google.it/maps?q=<?php echo urlencode(get_field('company_address', 'option')); ?>&amp;output=embed&amp;z=10"></iframe>
					</div>
					<div class="footer-content"  id="locations">
						<div class="footer-link-box bg-red">
							<a href="https://maps.google.it/maps?q=<?php echo urlencode(get_field('main_address_link', 'options')); ?>" title="<?php the_field('main_address_link', 'options') ?>" target="_blank">
								<span class="footer-link-icon">
									<img width="30" height="38" src="<?php echo home_url(); ?>/wp-content/themes/banowetz/assets/images/location.png" alt="location">
								</span>
								<div class="footer-link-content">
									<?php the_field('main_address','option'); ?>
								</div>
							</a>
						</div>
						<div class="footer-link-box contact-no">
							<?php
							$phone_number = get_field('phone_number', 'option');
							$val = array("(", ")", " ", "-");
							$replace = array("", "", "", "");
							$phone_link = str_replace($val, $replace, $phone_number);
							?>
								<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone_number; ?>">
									<span class="footer-link-icon">
										<img width="30" height="30" src="<?php echo home_url(); ?>/wp-content/themes/banowetz/assets/images/phone.png" alt="phone">
									</span>
									<div class="footer-link-content">
										<span class="bold"><?php the_field('phone_number','option'); ?></span>
									</div>
								</a>
						</div>
						<div class="footer-link-box bg-red">
							<a href="https://maps.google.it/maps?q=<?php echo urlencode(get_field('secondary_address_link', 'options')); ?>" title="<?php the_field('secondary_address_link', 'options') ?>" target="_blank">
								<span class="footer-link-icon">
									<img width="30" height="38" src="<?php echo home_url(); ?>/wp-content/themes/banowetz/assets/images/location.png" alt="location">
								</span>
								<div class="footer-link-content">
									<?php the_field('secondary_address','option'); ?>
								</div>
								
							</a>
						</div>						
						<div class="footer-link-box contact-no">
							<?php
							$phone_number1 = get_field('secondary_phone_number', 'option');
							$val1 = array("(", ")", " ", "-");
							$replace1 = array("", "", "", "");
							$phone_link1 = str_replace($val1, $replace1, $phone_number1);
							?>
								<a href="tel:<?php echo $phone_link1; ?>" title="<?php echo $phone_number1; ?>">
									<span class="footer-link-icon">
										<img width="30" height="30" src="<?php echo home_url(); ?>/wp-content/themes/banowetz/assets/images/phone.png" alt="phone">
									</span>
									<div class="footer-link-content">
										<span class="bold"><?php the_field('secondary_phone_number','option'); ?></span>
									</div>
								</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7 offset-lg-1">
					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>" title="Banowetz">
							<img width="443" height="129" src="<?php the_field('footer_logo','option') ?>" alt="Logo">
						</a>
					</div>
					<div class="header-icon">
						<a href="<?php the_field('facebook_link','option'); ?>" title="Facebook" target="_blank">
							<img width="40" height="40" src="<?php echo home_url(); ?>/wp-content/themes/banowetz/assets/images/facebook.svg" alt="facebook">						
						</a>
						<a href="<?php the_field('instagram_link','option'); ?>" title="Instagram" target="_blank">
							<img width="40" height="40" src="<?php echo home_url(); ?>/wp-content/themes/banowetz/assets/images/instagram.svg" alt="instagram">	
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
	<div class="footer-bottom">
		<div class="container">		
			<div class="row">
				<div class="col-lg-12">
				<div class="footer-menu">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-3',
							'menu_id' => 'footer-menu',
						) );
						?>
					</div>
				</div>
			</div>
			   <div class="row align-items-center">
			      <div class="col-lg-6">
			         <div class="copyright">
			            <ul>
			               <li>© <?php echo date('Y'); ?> Banowetz Floor Covering</li>
			               <li> <a href="<?php echo home_url().'/privacy-policy/'; ?>" title="Privacy Policy">Privacy Policy</a></li>
			               <li> <a href="<?php echo home_url().'/terms-of-use/'; ?>" title="Terms of Use">Terms of Use</a></li>
			               <li> <a href="<?php echo home_url().'/cookie-policy/'; ?>" title="Cookie Policy">Cookie Policy</a></li>
			            </ul>
			         </div>
			      </div>
			      <div class="col-lg-6">
			         <div class="copyright-bottom-link">
			            <p> <a href="https://www.dotcomdesign.com/website-design-iowa-city" target="_blank" title="Website Design">Website Design</a>, <a href="https://www.dotcomdesign.com/search-engine-optimization" target="_blank" title="SEO">SEO</a> &amp; <a href="https://www.dotcomdesign.com/search-engine-marketing-iowa-city" target="_blank" title="Online Marketing">Online Marketing</a> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
			         </div>
			      </div>
			   </div>
		</div>

		<div class="row">
				<?php if (is_page_template('template-seo.php') || is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) { ?>
					<div class="col-lg-12">
						<div class="footer-last">
							<span class="text view_services_text" id="view_all_services" title="View All Services">View All Services</span>
							<div class="all-services">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'seo-menu',
								));
								?>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
