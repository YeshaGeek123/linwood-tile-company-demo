<?php
/**
 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package banowetz
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			if ( 'post' === get_post_type() ) :
				banowetz_post_thumbnail();
			?>
				<div class="entry-meta">
					<?php
					banowetz_posted_on();
					banowetz_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php 
			endif;
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( 'post' === get_post_type() ) :
				banowetz_post_thumbnail();
			?>
				<div class="entry-meta">
					<?php
					banowetz_posted_on();
					banowetz_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php 
			endif;	
		endif;
		?>
	</header>
	<div class="entry-content">
		<?php
		if ( is_singular() ) :
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'absolute-foundation' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'absolute-foundation' ),
			'after'  => '</div>',
		) );
		else :
			the_excerpt();
			?>
			<div class="blog-btn">
			<a class="sec-btn bg-btn red-btn" href="<?php echo get_the_permalink();?>">Read more</a>
			</div>
			<?php
		endif;
		?>
	</div><!-- .entry-content -->
</div><!-- swaps #post-<?php the_ID(); ?> -->