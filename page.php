<?php get_header(); ?>

<main id="content" class="page-template magneti-custom-template-wrapper bg-navy">
	<div class="center wide">

		<div class="custom-template-module dark-mode padding-control">

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
				<h1 class="h-3xl white"><?php the_title(); ?></h1>
	
				<?php the_content(); ?>
	
			<?php endwhile; endif; ?>

		</div>
	
		
	</div>
</main>
<?php //end content ?>

<?php get_footer(); ?>