<?php

/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
            <!-- <a class="front-logo" href="<?php bloginfo('url'); ?>"> </a> -->
            
            <?php /* Start the Loop */ ?>
           
			<?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content'); ?>
                

			<?php endwhile; ?>

            <button class="another-button" id="change-quote">Show Me Another!</button>
            
            

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
        
    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

