<?php get_header(); ?>

<main id="content" class="blog">

  <div class="magneti-custom-template-wrapper">
		<?php 
      $blogPageId = get_option('page_for_posts');
      $imageUrl = get_the_post_thumbnail_url($post->ID, '2048x2048');
		?>
    <div class="custom-template-module gradient-green-to-navy template-part-hero has-bg dark-mode">

      <div class="hero-img-container">
        <div class="aspect-container" style="background-image: url(<?php echo $imageUrl; ?>); background-size: cover; background-position: center;">
          <div class="center wide">
            
            <div class="normal-hero-wrap">
              <?php the_field('hero_content', $blogPageId); ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    

	</div>
  
  <div class="center outer wide">
   
    <div class="single-content-wrapper">
      <h2 class="h-2xl serif single-post-title"><?php the_title(); ?></h2>
      <div class="post-meta">
        <p class="blog-post-author mb-0">
          <?php echo get_the_author_meta('display_name', $post->post_author); ?>
        </p>
        <p class="blog-post-date">
          <?php echo get_the_date('m.d.y', $post->ID); ?>
        </p>
      </div>
      <div class="post-content-wrapper">
        <?php the_content(); ?>
      </div>
    </div>

    
  </div>
  
</main>
<?php //end content ?>

<?php get_footer(); ?>