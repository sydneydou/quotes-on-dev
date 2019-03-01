<?php

/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */
/* Template Name:page-submit-a-quote */ 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
            
            <?php /* Start the Loop */ ?>
           
			<?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content', 'submit'); ?>
                

			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
        
    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
