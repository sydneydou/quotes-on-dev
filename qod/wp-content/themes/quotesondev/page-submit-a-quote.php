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

                
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="quote-include">
	        			<i class="fas fa-quote-left"></i>
	        			<div class="info-chunk submit-chunk">
		        			<header class="entry-header">
			       				 <?php the_title(); ?>
                			</header><!-- .entry-header -->
                    			<div class="quote-submission-form"> 
                    				<?php if (is_user_logged_in() && current_user_can('edit_posts')) : ?>
                         			<form id="submit-form">
                             			<p>Author of Quote</p>
                             			<input type="text" name="author" id="quote-author">
                             			<p>Quote</p>
                             			<textarea  name="quote" id="quote"></textarea>
                            			<p>Where did you find this quote? (e.g. book name)</p>
                            			<input type="text" name="quote-location" id="quote-location">
                             			<p>Provide the URL of the quote source, if available.</p>
                            			<input type="url" name="quote-source" id="quote-url"><br>
                            			<button type="submit" id="submit-click" class="submit-button">Submit Quote</button>
                         			</form>

                         				<?php else : ?>
            							<p>Sorry, you must be logged in to submit a quote</p>
             							<a href="<?php echo wp_login_url() ?>">Click here to login<a>
            							<?php endif; ?>
        
                    			</div>             
            			</div>
            			<i class="fas fa-quote-right"></i>
   				 </div>        

			</article><!-- #post-## -->
                

			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
        
    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

