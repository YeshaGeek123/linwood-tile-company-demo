<section class="about-page-banner main-banner" style="background-image:url(<?php the_field('banner_image') ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h1-title"><?php the_field('banner_title') ?></h1>
            </div>
        </div>
    </div>
</section> <!-- About Us Banner -->

<!-- About Us Start -->
<section class="main-about-us about-page-content">
	<div class="container">
		<div class="about-before">
			<div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content wow bounceInLeft">
                        <h2 class="h2-title"><?php the_field('about_title') ?></h2>
                        <p class="sub-content wow zoomIn"><?php the_field('about_sub_title') ?></p>
                        <div class="overflow-text">
                            <?php the_field('about_content') ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
					<div class="abou-us-img"  style="background-image:url(<?php the_field('about_image') ?>)"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Us End -->


<?php 
if (have_rows('condition_section')) {
	while (have_rows('condition_section')) {	the_row();
        if (get_row_layout() == 'our_process') { 
            if (have_rows('condition_section',11)) {

                while (have_rows('condition_section',11)) {
                    the_row();
                    if (get_row_layout() == 'our_process_section') { ?>
                        <!-- Process section start -->
                        <section class="our-process-sec about-sec-process">
            
                            <div class="container">
                                <div class="process">
                
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="flooring-title wow slideInLeft">
                                                <p class="sub-content" id="our-process"><?php the_sub_field('our_process_title',11); ?></p>
                                                <h2 class="h2-title"><?php the_sub_field('our_process_sub_title',11); ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php
                                        if (have_rows('all_processes')) :
                                            while (have_rows('all_processes')) : the_row();
                                        ?>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="process-box">
                                                        <div class="process-img wow zoomIn" data-wow-delay="200ms">
                                                            <img width="80" height="80" src="<?php the_sub_field('all_processes_image',11); ?>" alt="process icon">
                                                        </div>
                                                        <div class="process-content">
                                                            <h3 class="wow zoomIn" data-wow-delay="400ms"><?php the_sub_field('all_processes_title,11') ?></h3>
                                                            <div class="text-overflow wow zoomIn" data-wow-delay="600ms">
                                                                <?php the_sub_field('all_processes_content',11); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Process section end -->
                    <?php
                    } 
                }
            }
        }elseif (get_row_layout() == 'our_team') { ?>
            <!-- THE TEAM -->
            <section class="team about-sec-team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="team-title wow slideInLeft">
                                <p class="sub-content"><?php the_sub_field('team_sub_title'); ?></p>
                                <h2 class="h2-title"><?php the_sub_field('team_title'); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (have_rows('team_member')) :
                            while (have_rows('team_member')) : the_row();
                        ?>
                                <div class="col-lg-4">
                                    <div class="team-img wow zoomIn" style="background-image: url(<?php the_sub_field('profile_image'); ?>)">
                                    </div>
                                    <div class="team-content wow slideInRight">
                                        <h3><?php the_sub_field('name'); ?></h3>
                                        <p class="sub-title"><?php the_sub_field('designation'); ?></p>
                                        <div class="text-overflow">
                                            <?php the_sub_field('member_about'); ?>
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
            <!-- End THE TEAM -->
            <?php
        }
    }
}

?>



