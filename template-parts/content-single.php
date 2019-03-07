<?php

/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="quote-include">
	
	
	<div class="info-chunk">
		<div class="entry-content post-quote">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
		<header  class="entry-header author">
			<span class="media-source">-<?php the_title(); ?></span>
		</header><!-- .entry-header -->
		</div>
			
</div>


</article><!-- #post-## -->


