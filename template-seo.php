<?php
/**
 * Template Name: Seo Page
 */
get_header();
?>
<div class="seo-content">
   	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			get_template_part( 'template-parts/content', 'seo' );
		
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
get_footer();