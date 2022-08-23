<?php
$socials = get_field('social_icons', 'option');
?>

</div>

<footer id="footer">
	<div class="footer-top">

		<div class="center outer wide">

			<a href="/" class="footer-logo-wrap" title="to home page">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/main-logo.png" alt="I.M. Financial, LLC" />
			</a>

			<div class="footer-outro-text">
				<?php the_field('paragraph_1', 'option'); ?>
			</div>

			<div class="footer-contact-section">
				<?php the_field('paragraph_2', 'option'); ?>
			</div>

			
			<div class="footer-nav-wrapper">
				<?php wp_nav_menu(array(
					'theme_location' => 'footer-nav-1',
					'container_class' => 'footer-nav-menu footer-nav-menu--col-1'
				)); ?>
				<?php wp_nav_menu(array(
					'theme_location' => 'footer-nav-2',
					'container_class' => 'footer-nav-menu footer-nav-menu--col-2'
				)); ?>
			</div>

			<?php echo do_shortcode('[socialicons]'); ?>
			

		</div>
	</div>

	<div class="footer-bottom">
		<div class="center outer wide">

		
		<?php the_field('paragraph_3', 'option'); ?>
		
		<p class="copyright">
		<?php the_field('copyright', 'option'); ?>
		</p>

		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script src="//localhost:35729/livereload.js"></script>
</body>
</html>