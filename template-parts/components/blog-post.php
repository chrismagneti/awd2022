<div class="blog-post">
  <div class="blog-post-inner">
  <?php $thumbnailUrl = get_the_post_thumbnail_url($args['thePost']->ID) ? get_the_post_thumbnail_url($args['thePost']->ID) : get_stylesheet_directory_uri() . '/library/images/hero-default.jpg'; ?>
    <a href="<?php echo get_permalink($args['thePost']->ID); ?>" class="post-thumbnail-wrapper">
      <div class="aspect-video" style="background-image: url(<?php echo $thumbnailUrl; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
    </a>
    <div class="post-content-wrapper">
      <h2 class="blog-post-title green">
        <a class="line-clamp-2" href="<?php echo get_permalink($args['thePost']->ID); ?>">
          <?php echo $args['thePost']->post_title; ?>
        </a>
      </h2>
      <p class="blog-post-author mb-0">
        <?php echo get_the_author_meta('display_name', $args['thePost']->post_author); ?>
      </p>
      <p class="blog-post-date">
        <?php echo get_the_date('m.d.y', $args['thePost']->ID); ?>
      </p>
      <div class="blog-post-content body-l">
        <?php echo '<p>' . get_the_excerpt($args['thePost']->ID) . '</p>'; ?>
      </div>
      <a href="<?php echo get_permalink($args['thePost']->ID); ?>" class="btn btn-on-navy">Read More</a>
    </div>
  </div>
</div>