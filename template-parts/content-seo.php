<?php $frontpage_id = get_option('page_on_front'); ?>
<section class="main-banner seo-banner" style="background-image: url(<?php the_field('main_banner_bg_img',$frontpage_id); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
				<h2 class="h1-title">WE’RE More Than Just Floor COVERINGS</h2>
				<h4 class="sub-title">Residential &amp; Commercial Services</h4>
				<div class="banner-btn">
				<?php
					$phone_number = get_field('phone_number', 'option');
					$val = array("(", ")", " ", "-");
					$replace = array("", "", "", "");
					$phone_link = str_replace($val, $replace, $phone_number);
					?>
					<a href="tel:<?php echo $phone_link; ?>" class="sec-btn desktop-btn" title="<?php echo 'Call '.$phone_number; ?>"><?php echo 'Call '.$phone_number; ?></a>
					<a href="tel:<?php echo $phone_link; ?>" class="sec-btn mobile-btn" title="<?php echo 'Call '.$phone_number; ?>">Call Us Now</a>
					<a href="#locations" class="sec-btn red-btn" title="Visit Us">Visit Us</a>
				</div>
			</div>
			<div class="col-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
				<div class="footer-form seo-form">
					<h2 class="h2-title wow zoomIn">Contact Us</h2>
					<?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-us">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="about-content">
					<h2 class="h2-title vertical-text"><?php the_field('about_us_title', $frontpage_id); ?></h2>
					<h2 class="h2-title wow zoomIn" id="about"><?php the_field('about_us_title', $frontpage_id); ?></h2>
					<p class="sub-content wow zoomIn"><?php the_field('about_us_sub_title', $frontpage_id); ?></p>
					<div class="text-overflow wow slideInLeft">
						<?php the_field('about_us_content', $frontpage_id); ?>
					</div>
				</div>
			</div>

			<div class="col-lg-7">
				<div class="skew-img ">
					<div class="about-slider-img about-gal-slider">

						<?php
						$images = get_field('about_us_gallery', $frontpage_id);
						if ($images) :
							foreach ($images as $image) : ?>

								<a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
									<div class="about-img" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
								</a>

						<?php endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-about-slider about-mob-slider">
		<?php
		$images = get_field('about_us_gallery',$frontpage_id);
		if ($images) :
			foreach ($images as $image) : ?>
				<a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
					<div class="mob-slider" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
				</a>

		<?php endforeach;
		endif;
		?>
	</div>
</section>
<!-- Services -->

<section class="main-seo-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="sec-head h2-title"><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="excerpt-content">
					<?php the_content(); ?>
				</div>
				<div class="form-btn">
					<button type="button" title="Read more" id="read-more" class="sec-btn sm-btn bg-btn">
						<span>Read more</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>


