<?php $page_id = get_option('page_on_front'); ?>
<section class="main-banner inner-banner service-page-banner" style="background-image:url(<?php the_field('main_banner_bg_img',$page_id); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="banner-content">
                    <h1 class="h1-title"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END OF SERVICE-PAGE-BANNER -->

<section class="career-page-sec">
    <div class="container">
        <div class="career-box ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="career-content">
                        <h2 class="h2-title"><?php the_field('title'); ?></h2>
                        <div class="career-content-text">
                            <?php the_field('content'); ?>
                        </div> 
                    </div>
                    <div class="career-form">
                        <?php echo do_shortcode('[contact-form-7 id="301" title="Career Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- end of career sec -->