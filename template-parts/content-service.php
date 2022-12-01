<section class="main-banner inner-banner bg-img" style="background-image: url('<?php the_field('service_banner_image'); ?>');">
	<div class="sec-wp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="inner-banner-text">
						<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End of Inner Banner -->

<section class="services-page-sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
				<div class="service-content main-service-content">
					<?php
					$service_info_title = get_field('service_info_title');
					$service_info_content = get_field('service_info_content');
					$service_info_image = get_field('service_info_image');
					?>
					<?php if(!empty($service_info_title)): ?>
						<h2 class="h2-title"><?php echo $service_info_title; ?></h2>
					<?php endif; ?>
					<?php if(!empty($service_info_content)): ?>
						<div class="service-text-wp">
							<?php echo $service_info_content; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if(!empty($service_info_image)): ?>
			<div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
				<div class="service-skew main-service-img">
					<div class="bg-img" style="background-image: url('<?php echo $service_info_image; ?>')"></div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>

</section>

<section class="services main-service-sec">
	<div class="container-fluid">
		<div class="service-wp">
		<?php
		if (have_rows('sub_services_list')) :
			while (have_rows('sub_services_list')) : the_row();
				$sub_service_list_image = get_sub_field('sub_service_list_image');
				$sub_service_list_title = get_sub_field('sub_service_list_title');
				$sub_service_list_content = get_sub_field('sub_service_list_content');
				$sub_service_list_points = get_sub_field('sub_service_list_points');
				$sub_service_list_description = get_sub_field('sub_service_list_description');
				if (get_row_index() % 2 != 0) :
		?>
					<div class="service-row odd">
						<div class="container">
							<div class="row">
								<?php if(!empty($sub_service_list_image)): ?>
									<div class="col-lg-5 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
										<div class="service-skew">
											<div class="bg-img" style="background-image: url('<?php echo $sub_service_list_image; ?>')"></div>
										</div>
									</div>
								<?php endif; ?>
								<div class="col-lg-7 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
									<div class="service-content">
										<?php if(!empty($sub_service_list_title)): ?>
											<h3 class="h3-title"><?php echo $sub_service_list_title; ?></h3>
										<?php endif; ?>
										<?php 
										if(!empty($sub_service_list_content)):
											echo $sub_service_list_content;		
										endif; 
										?>
										<?php if(!empty($sub_service_list_points)): ?>
											<ul>
												<?php
												if (have_rows('sub_service_list_points')) :
													while (have_rows('sub_service_list_points')) : the_row();
												?>
												<li><?php the_sub_field('sub_service_points'); ?></li>
												<?php
													endwhile;
												endif; 
												?>
											</ul>
										<?php endif; ?>
										<?php
										if(!empty($sub_service_list_description)):
											echo $sub_service_list_description;
										endif;
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php else: ?>
					<div class="service-row even">
						<div class="container">
							<div class="row">
								<div class="col-lg-7 order-2 order-lg-1">
									<div class="service-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
										<?php if(!empty($sub_service_list_title)): ?>
											<h3 class="h3-title"><?php echo $sub_service_list_title; ?></h3>
										<?php endif; ?>
										<?php 
											if(!empty($sub_service_list_content)):
												echo $sub_service_list_content;		
											endif; 
										?>
										<?php if(!empty($sub_service_list_points)): ?>
											<ul>
												<?php
												if (have_rows('sub_service_list_points')) :
													while (have_rows('sub_service_list_points')) : the_row();
												?>
												<li><?php the_sub_field('sub_service_points'); ?></li>
												<?php
													endwhile;
												endif; 
												?>
											</ul>
										<?php endif; ?>
										<?php
										if(!empty($sub_service_list_description)):
											echo $sub_service_list_description;
										endif;
										?>
									</div>
								</div>
								<?php if(!empty($sub_service_list_image)): ?>
									<div class="col-lg-5 order-1 order-lg-2">
										<div class="service-skew wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
											<div class="bg-img" style="background-image: url('<?php echo $sub_service_list_image; ?>')"></div>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php
				endif;
			endwhile;
		endif;
		?>
		</div>
	</div>
</section>
<!-- End Services -->


