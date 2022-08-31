<div class="class-post">
  <div class="class-post-inner">
  <?php $thumbnailUrl = get_the_post_thumbnail_url($args['thePost']->ID) ? get_the_post_thumbnail_url($args['thePost']->ID) : get_stylesheet_directory_uri() . '/library/images/hero-default.jpg'; ?>
    <a href="<?php echo get_field('url', $args['thePost']->ID); ?>" class="post-thumbnail-wrapper" target="_blank">
      <div class="aspect-video" style="background-image: url(<?php echo $thumbnailUrl; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
    </a>
    <div class="post-content-wrapper">
      <h2 class="class-post-title line-clamp-2 green">
        <a href="<?php echo get_field('url', $args['thePost']->ID); ?>" target="_blank">
          <?php echo $args['thePost']->post_title; ?>
        </a>
      </h2>
      <?php if(get_field('location', $args['thePost']->ID)): ?>
        <p class="class-post-author mb-0">
          <?php echo get_field('location', $args['thePost']->ID); ?>
        </p>
      <?php endif; ?>
      <?php if(get_field('class_date', $args['thePost']->ID)): ?>
        <p class="class-post-date">
          <?php echo get_field('class_date', $args['thePost']->ID); ?>
        </p>
      <?php endif; ?>
      <div class="class-post-content body-l">
        <p><?php echo truncateString($args['thePost']->post_content, 200); ?></p>
      </div>
      <?php if(get_field('url', $args['thePost']->ID)): ?>
        <a href="<?php echo get_field('url', $args['thePost']->ID); ?>" class="btn btn-on-navy" target="_blank">Read More</a>
      <?php endif; ?>
    </div>
  </div>
</div>