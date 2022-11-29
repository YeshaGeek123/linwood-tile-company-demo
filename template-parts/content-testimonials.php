<?php $frontpage_id = get_option( 'page_on_front' ); ?>
<section class="testimonials" id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="h2-title wow zoomIn"><?php the_field('testimonials_title',$frontpage_id); ?></h2>
				<p class="sub-content wow slideInRight"><?php the_field('testimonials_sub_title',$frontpage_id); ?></p>
			</div>
		</div>
		<div class="testimonial-slider">
			<div class="row testimonials-slider">
				<?php
				$args = array( 'orderby' => 'title', 'post_type' => 'testimonials' );
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post();?>
						<div class="col-lg-10 text-center m-auto">
							<div class="testimonial-content">
								<div class="text-overflow">
									<?php the_content(); ?>
								</div>
								<h3 class="testimonial-title"><?php the_title();?></h3>
							</div>
						</div>
						<?php
					endwhile; 
				endif; 
				wp_reset_query();?>
			</div>
		</div>
	</div>
</section>