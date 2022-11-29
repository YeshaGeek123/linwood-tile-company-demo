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

<section class="services-page-sec event-page-sec ">
    <div class="container">
    <?php
		if(have_rows('add_event_repeater')):
			$event_counter = 1;
			while(have_rows('add_event_repeater')):the_row();
			if($event_counter%2==0):
	?>
        <div class="event-box even">
            <div class="row align-items-center">
                <div class="col-lg-9 order-lg-1 order-2">
                    <div class="tab-content wow slideInLeft">
                        <div class="tabcontent">
                            <h3 class="h3-title"><?php the_sub_field('event_title'); ?></h3>
                            <div class="event-date-title">
                                    <div class="event-date">
                                        <p><i class="fa fa-calendar" aria-hidden="true"></i><?php the_sub_field('event_date'); ?></p>
                                    </div>
                                    <div class="event-time">
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_sub_field('event_time'); ?></p>
                                    </div>
                            </div>
                                <?php the_sub_field('event_content'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 order-1">
                    <div class="flooring-skew">
                        <div class="flooring-img" style="background-image:url(<?php the_sub_field('event_image'); ?>)"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        else:
		?>
        <div class="event-box odd">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="flooring-skew">
                        <div class="flooring-img" style="background-image:url(<?php the_sub_field('event_image'); ?>)"></div>
                    </div>
                </div>
    
                <div class="col-lg-9">
                    <div class="tab-content wow slideInRight">
                        <div class="tabcontent">
                            <h3 class="h3-title"><?php the_sub_field('event_title'); ?></h3>
                            <div class="event-date-title">
                                    <div class="event-date">
                                        <p><i class="fa fa-calendar" aria-hidden="true"></i><?php the_sub_field('event_date'); ?></p>
                                    </div>
                                    <div class="event-time">
                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php the_sub_field('event_time'); ?></p>
                                    </div>
                            </div>
                                <?php the_sub_field('event_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
			endif;
			$event_counter++;
			endwhile;
		endif;
		?>
        
    </div>
</section>