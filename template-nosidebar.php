<?php
/*
  Template Name: Without Sidebar
 */
get_header();
$page_id = get_option('page_on_front');
?>
<section class="main-banner inner-banner" style="background-image: url(<?php the_field('main_banner_bg_img',$page_id); ?>);">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="h1-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
</section>
<div class="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php
                            while (have_posts()) :
                            the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                                <?php banowetz_post_thumbnail(); ?>
                                <div class="entry-content">
                                    <?php
                                    the_content(sprintf(
                                                    wp_kses(
                                                            /* translators: %s: Name of current post. Only visible to screen readers */

                                                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'banowetz'), array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                                            )
                                                    ), get_the_title()
                                    ));
                                    wp_link_pages(array(
                                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'banowetz'),
                                        'after' => '</div>',
                                    ));
                                    ?>
                                </div><!-- .entry-content -->
                            </article><!-- #post-the_ID(); -->
                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;
                        endwhile; // End of the loop.
                        ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
        </div>
    </div>
</div>  
<?php
get_footer();
