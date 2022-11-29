<?php $page_id = get_option('page_on_front'); ?>
<section class="main-banner inner-banner" style="background-image: url('<?php the_field('main_banner_bg_img',$page_id); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section><!-- End of Inner Banner -->

<section class="services-page-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="flooring-title wow zoomIn">
                    <p class="sub-content">Services</p>
                    <h2 class="h2-title">Flooring</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="flooring-skew">
                    <div class="flooring-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>');"></div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="tab-content wow slideInRight">
                    <div class="tabcontent">
                        <h3 class="h3-title"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<?php
$frontpage_id = get_option( 'page_on_front' );
if (have_rows('condition_section',$frontpage_id)) {

	while (have_rows('condition_section',$frontpage_id)) { the_row();

		if (get_row_layout() == 'faq_section') { ?>

			<!-- FAQ -->

			<section class="faq" style="background-image: url(<?php the_sub_field('faq_bg_img'); ?>)">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<h2 class="h2-title wow slideInLeft"><?php the_sub_field('faq_title'); ?></h2>
						</div>
					</div>
					<div class="row faq-slider wow zoomIn">
						<?php
						if (have_rows('all_faq')) :
							while (have_rows('all_faq')) : the_row();
						?>
								<div class="col-lg-4">
									<div class="faq-box">
										<h3><?php the_sub_field('all_faq_title'); ?></h3>
										<div class="text-overflow">
											<?php the_sub_field('all_faq_content') ?>
										</div>
									</div>
								</div>
						<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
			</section>
			<!-- End FAQ -->
		<?php
		} elseif (get_row_layout() == 'gallery_section') { ?>

			<!-- gallery -->

			<div class="gallery" id="gallery">
				<div class="container-fluid">
					<div class="row gal-slider wow zoomIn">
						<?php
						$images = get_sub_field('gallery');
						if ($images) :
							foreach ($images as $image) : ?>
								<div class="col-lg-3">
									<a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>" title="<?php echo $image['title'] ?>">
										<div class="gallery-img" style="background-image: url(<?php echo esc_url($image['url']); ?>);">
										</div>
									</a>
								</div>
						<?php endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
			<!-- End gallery -->
		<?php
		} elseif (get_row_layout() == 'testimonials_section') { ?>

			<!-- Testimonials -->
			<?php
			get_template_part('template-parts/content', 'testimonials');
			?>
			<!-- End Testimonials -->

		<?php
		} elseif (get_row_layout() == 'brands_section') { ?>

			<!-- BRANDS WE CARRY -->

			<div class="brand-we-carry">
				<div class="container-fluid	">
					<div class="row">
						<div class="col-lg-12 text-center">
							<p class="sub-content wow zoomIn"><?php the_sub_field('brands_title') ?></p>
						</div>
					</div>
					<div class="brands-slider">
						<div class="row brand-slider">
							<?php
							if (have_rows('all_brands')) :
								while (have_rows('all_brands')) : the_row();
									$link = get_sub_field('brands_link');
									if ($link != '') {
							?>
										<div class="col-lg-2">
											<a href="<?php echo $link; ?>" target="_blank" title="Bradns We Carray">
												<div class="brand-img" style="background-image: url(<?php the_sub_field('brands_img'); ?>)">
												</div>
											</a>
										</div>
									<?php
									} else {
									?>
										<div class="col-lg-2">
											<div class="brand-img" style="background-image: url(<?php the_sub_field('brands_img'); ?>)">
											</div>
										</div>
							<?php
									}
								endwhile;
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- End BRANDS WE CARRY -->
<?php
		}
	}
}
?>


