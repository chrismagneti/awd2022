<div class="class-post">
  <div class="class-post-inner">
  <?php $thumbnailUrl = get_the_post_thumbnail_url($args['thePost']->ID) ? get_the_post_thumbnail_url($args['thePost']->ID) : get_stylesheet_directory_uri() . '/library/images/hero-default.jpg'; ?>
    <a href="<?php echo get_permalink($args['thePost']->ID); ?>" class="post-thumbnail-wrapper">
      <div class="aspect-video" style="background-image: url(<?php echo $thumbnailUrl; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
    </a>
    <div class="post-content-wrapper">
      <h2 class="class-post-title green"><?php echo truncateString($args['thePost']->post_title, 38); ?></h2>
      <?php if(get_field('location', $post->id)): ?>
        <p class="class-post-author mb-0">
          <?php echo get_field('location', $post->id); ?>
        </p>
      <?php endif; ?>
      <?php if(get_field('class_date', $post->id)): ?>
        <p class="class-post-date">
          <?php echo get_field('class_date', $post->id); ?>
        </p>
      <?php endif; ?>
      <div class="class-post-content body-l">
        <p><?php echo truncateString($args['thePost']->post_content, 200); ?></p>
      </div>
      <a href="<?php echo get_permalink($args['thePost']->ID); ?>" class="btn btn-on-navy">Read More</a>
    </div>
  </div>
</div>