<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer>
	<div class="row links">
		<div class="col-md-4 col-md-offset-4">
			<ul>
				<li><a href="<?php echo get_theme_mod('text_field-1'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-linkedin-link.png"/></a> </li>
				<li><a href="<?php echo get_theme_mod('text_field-2'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-twitter-link.png"/></a> </li>
				<li><a href="<?php echo get_theme_mod('text_field-3'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-mail-link.png"/></a></li>
			</ul>
		</div>
	</div>
	<div class="row footer-menu">
		<div class="col-md-5">
			<span class="copyright">&copy; 2013 Rylander Design</span>
		</div>

		<?php wp_nav_menu(
			array(
				'theme_location' 	=> 'secondary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'col-md-4 col-md-offset-3',
				'menu_class' 		=> 'menu',
				'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
				'menu_id'			=> 'second-menu',
				'walker' 			=> new wp_bootstrap_navwalker()
			)
		); ?>

	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
