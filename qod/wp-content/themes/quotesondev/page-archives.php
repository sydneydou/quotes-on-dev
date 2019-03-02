<?php

/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */


/* Template Name:page-archives */ 

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
							<div class="archive-chunk">
								<div id="archive-title" class="entry-header">
									<?php the_title(); ?>
								</div>

								<div class="archive-page">
									<div class="author-archive">
										<h2> Quote Authors </h2>
										<ul>
											<?php global $post;
											$args = array('posts_per_page' => 55);
											$myposts = get_posts($args); ?>
						
											<?php foreach ($myposts as $post) : setup_postdata($post); ?>
				
											<li>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</li>
											<?php endforeach;
											wp_reset_postdata(); ?>

										</ul>
									</div>

			
										<div class="category-archive">
											<h2> Categories </h2>
											<ul>
    											<?php wp_list_categories(array(
													'title_li' => '',
													'posts_per_page' => 5
												)); ?>
											</ul>
										</div>


										<?php if (function_exists('wp_tag_cloud')) : ?>

										<h2>Tags</h2>
										<ul>
											<li><?php wp_tag_cloud('smallest=1&largest=1&unit=rem'); ?></li>
										</ul>

										<?php endif; ?>

								</div>		
							</div>
							<i class="fas fa-quote-right"></i>
					</div>

				</article>
                
				<?php endwhile; ?>

				<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

        		<?php endif; ?>
        
    

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

