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
	<div class="archive-chunk">
		
		<div id="archive-title" class="entry-header">
			<?php the_title(); ?>
		</div>
<!-- authors -->
	<div class="archive-page">
			<div class="author-archive">
				<h2> Quote Authors </h2>
					<ul>
						<?php

						global $post;
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

			<!-- categories -->
			<div class="category-archive">
				<h2> Categories </h2>
				<ul>
    				<?php wp_list_categories(array(
								'title_li' => '',
								'posts_per_page' => 5
							)); ?>
				</ul>
			</div>


			<!-- tags -->
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

</article><!-- #post-## -->