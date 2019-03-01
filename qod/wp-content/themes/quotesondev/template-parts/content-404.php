<?php

/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="quote-include">
	<div class="about-section">
	<i class="fas fa-quote-left"></i>
	<div class="info-chunk">
		<header class="entry-header">
			<?php the_title(); ?>
        </header><!-- .entry-header -->
        
        <section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html('Oops!'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html('It looks like nothing was found at this location. Maybe try a search?'); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div>
</div>
		<i class="fas fa-quote-right"></i>
</div>

</article><!-- #post-## -->