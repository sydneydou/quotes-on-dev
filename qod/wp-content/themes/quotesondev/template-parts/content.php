<?php

/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="quote-include">
	<i class="fas fa-quote-left"></i>
	<div class="info-chunk">
		<div  id="post-quote" class="entry-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-content -->
		<header id="author" class="entry-header">
			<span id="media-source">-<?php the_title(); ?></span>
		</header><!-- .entry-header -->
		</div>
		<i class="fas fa-quote-right"></i>
</div>

</article><!-- #post-## -->
