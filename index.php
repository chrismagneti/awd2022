<?php get_header(); ?>

<main id="content" class="blog">

  <div class="magneti-custom-template-wrapper">
		<?php 
      $blogPageId = get_option('page_for_posts');
      $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'2048x2048');
      $imageUrl = $img[0];
		?>
    <div class="custom-template-module gradient-green-to-navy template-part-hero has-bg dark-mode"<?php if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

      <div class="hero-img-container">
        <div class="aspect-container">
          <div class="center wide">
            
            <div class="normal-hero-wrap">
              <?php the_field('hero_content', $blogPageId); ?>
            </div>

          </div>
          <img class="bg-image" src="<?php echo $imageUrl; ?>" alt="">
        </div>
      </div>
    </div>
    

	</div>
  
  <div class="center outer wide">
    <div class="blog-posts-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php 
          get_template_part( 
            'template-parts/components/blog-post', 
            null, // name
            [
              'thePost' => $post
            ]
          ); 
        ?>


      <?php endwhile; ?>
    </div>
  </div>
  
</main>
<?php //end content ?>

<?php get_footer(); ?>