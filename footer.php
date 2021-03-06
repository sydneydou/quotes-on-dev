<?php

/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			</footer><!-- #colophon -->
		</div><!-- #page -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button>
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>	
					<p> <span class="broughtby">Brought to you by </span><a href="https://redacademy.com/vancouver/">Red Academy</a></p>	
			</nav><!-- #site-navigation -->

		<?php wp_footer(); ?>

	</body>
</html>
