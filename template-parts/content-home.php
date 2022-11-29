<section class="main-banner bg-img" style="background-image: url(<?php the_field('main_banner_bg_img'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 m-auto text-center">
				<div>
					<h1 class="h1-title"><?php the_field('main_banner_title'); ?></h1>
					<div class="banner-btn">
						<?php
						$phone_number = get_field('phone_number', 'option');
						$val = array("(", ")", " ", "-");
						$replace = array("", "", "", "");
						$phone_link = str_replace($val, $replace, $phone_number);
						?>
						<a href="tel:<?php echo $phone_link; ?>" class="sec-btn" title="<?php echo 'Call ' . $phone_number; ?>"><?php echo 'Call ' . $phone_number; ?></a>
						<a href="<?php the_permalink(257); ?>" class="sec-btn green-btn" title="Contact Us">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-content">
					<h2 class="h2-title vertical-text"><?php the_field('about_us_title'); ?></h2>
					<h2 class="h2-title" id="about"><?php the_field('about_us_title'); ?></h2>
					<div class="text-overflow">
						<?php the_field('about_us_content'); ?>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="skew-img ">
					<div class="about-slider-img about-gal-slider about-slider">
						<?php
						$images = get_field('about_us_gallery');
						if ($images) :
							foreach ($images as $image) : ?>
								<a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>" title="about us gallery">
									<div class="about-img bg-img" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
								</a>
						<?php endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services -->
<section class="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="service-title">
					<p class="sub-content" id="flooring-services">Our Services</p>
					<h2 class="h2-title"><?php the_field('home_service_main_title'); ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container service-wp">
		<?php
		if (have_rows('home_service_list')) :
			while (have_rows('home_service_list')) : the_row();
				if (get_row_index() % 2 != 0) :
		?>
					<div class="row align-items-center service-row odd">
						<div class="col-lg-5">
							<div class="service-skew">
								<div class="bg-img" style="background-image: url(<?php the_sub_field('home_list_service_image'); ?>)"></div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="service-content">
								<h3 class="h3-title"><?php the_sub_field('home_list_service_title'); ?></h3>
								<?php the_sub_field('home_list_service_content'); ?>
								<a href="<?php the_sub_field('home_service_list_page_link') ?>" class="learn-more" title="<?php the_sub_field('home_list_service_title'); ?>, Learn More">
									<span>Learn More</span>
									<span class="icon"></span>
								</a>
							</div>
						</div>
					</div>
					<?php else: ?>
					<div class="row align-items-center service-row even">
						<div class="col-lg-7 order-2 order-lg-1">
							<div class="service-content">
								<h3 class="h3-title"><?php the_sub_field('home_list_service_title'); ?></h3>
								<?php the_sub_field('home_list_service_content'); ?>
								<a href="<?php the_sub_field('home_service_list_page_link') ?>" class="learn-more" title="<?php the_sub_field('home_list_service_title'); ?>, Learn More">
									<span>Learn More</span>
									<span class="icon"></span>
								</a>
							</div>
						</div>
						<div class="col-lg-5 order-1 order-lg-2">
							<div class="service-skew">
								<div class="bg-img" style="background-image: url(<?php the_sub_field('home_list_service_image'); ?>)"></div>
							</div>
						</div>
					</div>
		<?php
				endif;
			endwhile;
		endif;
		?>
	</div>

</section>
<!-- End Services -->


<!-- Start of Gallery -->
<div class="gallery" id="gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 gallery-slider">
			<?php 
			$images = get_field('home_gallery_images');
			if ($images) :
				$gallery_counter = 1;
				foreach ($images as $image) : 
			?>
					<a href="<?php echo esc_url($image['url']); ?>" class="gallery-img-box"  data-fancybox="gallery1" title="<?php echo 'Gallery Image ' . $gallery_counter; ?>">
						<div class="gallery-img bg-img" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
					</a>
			<?php
				$gallery_counter++;
				endforeach;
			endif;
			?>	
			</div>
		</div>
	</div>
</div>
<!-- End of Gallery -->

<!-- Start of Hiring -->
<section class="hiring-sec bg-img" style="background-image: url('<?php the_field('home_careers_background_image'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="hiring-content white-text">
					<span class="icon"><img width="29" height="29" src="<?php the_field('home_careers_icon'); ?>" alt="Human Resource"></span>
					<h2 class="h2-title"><?php the_field('home_careers_title'); ?></h2>
					<?php the_field('home_careers_content'); ?>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hiring-form">
					<?php echo do_shortcode('[contact-form-7 id="275" title="Careers Form"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Hiring -->