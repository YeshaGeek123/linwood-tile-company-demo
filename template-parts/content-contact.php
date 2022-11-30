<section class="main-banner inner-banner contact-banner bg-img" style="background-image: url('<?php the_field('contact_background_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-content white-text">
                    <div class="content-text">
                        <?php the_field('footer_content','options'); ?>
                    </div>
                    <div class="footer-content-wp" id="locations">
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
                            <a href="mailto:<?php the_field('email', 'options'); ?>" title="<?php the_field('email', 'options'); ?>">
                                <span class="footer-link-icon">
                                    <img width="29" height="24" src="<?php echo home_url(); ?>/wp-content/uploads/2022/11/envelope.svg" alt="Envolope">
                                </span>
                                <div class="footer-link-content">
                                    <?php the_field('email', 'options'); ?>
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
                        <div class="header-icon footer-social">
                            <a href="<?php the_field('facebook_link', 'option'); ?>" title="Facebook" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="16" viewBox="0 0 8 16">
                                    <g id="Facebook3" transform="translate(0 0)">
                                        <path id="Path_263" data-name="Path 263" d="M39.75,23.5h2.5v-3h-2.5a3.5,3.5,0,0,0-3.5,3.5v1.5h-2v3h2v8h3v-8h2.5l.5-3h-3V24A.507.507,0,0,1,39.75,23.5Z" transform="translate(-34.25 -20.5)" fill="#063583" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form">
                    <div class="footer-form white-text" id="contact">
                        <h3 class="h3-title">Contact Form</h3>
                        <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>