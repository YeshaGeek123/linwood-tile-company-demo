<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package banowetz
 */

get_header();
$page_id = get_option('page_on_front');
?>
<section class="main-banner inner-banner" style="background-image: url(<?php the_field('main_banner_bg_img',$page_id); ?>);">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="h1-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'linwood-tile-company' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <img width="427" height="397" src="<?php echo home_url(); ?>/wp-content/themes/linwood-tile-company/assets/images/404.svg">
                        </div>
                    </div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
