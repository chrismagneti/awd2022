<?php
$socials = get_field('social_icons', 'option');
?>

</div>

<footer id="footer">
	<div class="footer-top">

		<div class="center outer">

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

			<div class="social-icons-list">
				<ul>
						<li>
							<a class="social-icons-list-item" href="https://facebook.com" title="DesignWealth on Facebook">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
							</a>
						</li>
						<li>
							<a class="social-icons-list-item" href="https://facebook.com" title="DesignWealth on LinkedIn">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
							</a>
						</li>
						<li>
							<a class="social-icons-list-item" href="https://facebook.com" title="DesignWealth on Twitter">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
							</a>
						</li>
						<li>
							<a class="social-icons-list-item" href="https://facebook.com" title="DesignWealth on RSS">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M25.57 176.1C12.41 175.4 .9117 185.2 .0523 198.4s9.173 24.65 22.39 25.5c120.1 7.875 225.7 112.7 233.6 233.6C256.9 470.3 267.4 480 279.1 480c.5313 0 1.062-.0313 1.594-.0625c13.22-.8438 23.25-12.28 22.39-25.5C294.6 310.3 169.7 185.4 25.57 176.1zM32 32C14.33 32 0 46.31 0 64s14.33 32 32 32c194.1 0 352 157.9 352 352c0 17.69 14.33 32 32 32s32-14.31 32-32C448 218.6 261.4 32 32 32zM63.1 351.9C28.63 351.9 0 380.6 0 416s28.63 64 63.1 64s64.08-28.62 64.08-64S99.37 351.9 63.1 351.9z"/></svg>
							</a>
						</li>
				</ul>
			</div>
			

		</div>
	</div>

	<div class="footer-bottom">
		<div class="center outer">

		
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