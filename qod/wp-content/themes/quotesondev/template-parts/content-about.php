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
		<header class="entry-header">
			<?php the_title(); ?>
        </header><!-- .entry-header -->
        
            <div class="about-info">
                <p>Quotes on Dev is a project site for the RED Academy Web Developer Professional program. It’s used to experiment with Ajax, WP API, jQuery, and other cool things.&nbsp;</p>

                <p>This site&nbsp;is heavily inspired by Chris Coyier’s&nbsp;<a href="http://quotesondesign.com/" target="_blank" rel="noreferrer noopener">Quotes on Design</a>.</p>
            </div>
		</div>
		<i class="fas fa-quote-right"></i>
</div>

</article><!-- #post-## -->