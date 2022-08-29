<?php get_header(); ?>

<main id="content" class="blog">

  <div class="magneti-custom-template-wrapper">
		<?php 
      $img = get_field('classes_archive_hero_image', 'option');
      $imageUrl = $img['sizes']['2048x2048'];
      if(!$imageUrl) $imageUrl = get_stylesheet_directory_uri() . '/library/images/hero-default.jpg';
		?>
    <div class="custom-template-module gradient-green-to-navy template-part-hero has-bg dark-mode">

      <div class="hero-img-container">
        <div class="aspect-container" style="background-image: url(<?php echo $imageUrl; ?>); background-size: cover; background-position: center;">
          <div class="center wide">
            
            <div class="normal-hero-wrap">
              <?php the_field('classes_archive_hero_content', 'option'); ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    

	</div>
  
  <div class="center outer medium">
    <div class="class-posts-grid">
      <?php while ( have_posts() ) : the_post(); ?>
      <?php 
          get_template_part( 
            'template-parts/components/class-post', 
            null, // name
            [
              'thePost' => $post
            ]
          ); 
        ?>


      <?php endwhile; ?>
    </div>

    <?php the_posts_pagination(['mid_size' => 5, 'prev_next' => false]); ?>
    
  </div>
  
</main>
<?php //end content ?>

<?php get_footer(); ?>