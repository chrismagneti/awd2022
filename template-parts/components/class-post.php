<div class="class-post">
  <div class="class-post-inner">
  <?php $thumbnailUrl = get_the_post_thumbnail_url($args['thePost']->ID) ? get_the_post_thumbnail_url($args['thePost']->ID) : get_stylesheet_directory_uri() . '/library/images/hero-default.jpg'; ?>
    <a href="<?php echo get_field('url', $args['thePost']->ID); ?>" class="post-thumbnail-wrapper" target="_blank">
      <div class="aspect-video" style="background-image: url(<?php echo $thumbnailUrl; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
    </a>
    <div class="post-content-wrapper">
      <h2 class="class-post-title green">
        <a href="<?php echo get_field('url', $args['thePost']->ID); ?>" target="_blank">
          <?php echo get_field('event_title', $args['thePost']->ID); ?>
        </a>
      </h2>
      <?php if(get_field('sub_line', $args['thePost']->ID)): ?>
        <p class="class-post-date mb-0">
          <?php echo get_field('sub_line', $args['thePost']->ID); ?>
        </p>
      <?php endif; ?>
      <div class="class-post-content body-l">
        <p><?php echo truncateString($args['thePost']->post_content, 200); ?></p>
      </div>
      <?php if(get_field('url', $args['thePost']->ID)): ?>
        <a href="<?php echo get_field('url', $args['thePost']->ID); ?>" class="btn btn-on-navy" target="_blank">Register</a>
      <?php endif; ?>
    </div>
  </div>
</div>