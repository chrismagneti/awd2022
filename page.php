<?php get_header(); ?>

<main id="content" class="page-template">
	<div class="center">

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

		<?php endwhile; endif; ?>
		
	</div>
</main>
<?php //end content ?>

<?php get_footer(); ?>