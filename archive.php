<?php

/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="archive-quote">
			<i class="fas fa-quote-left"></i>

			<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			?>
			</header><!-- .page-header -->
			<i class="fas fa-quote-right"></i>
</div>
			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php
			get_template_part('template-parts/content', 'single');
			?>

			<?php endwhile; ?>
				

			<?php qod_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
