<div class="blog-post">
  <div class="blog-post-inner">
    <a href="<?php echo get_permalink($args['thePost']->ID); ?>" class="post-thumbnail-wrapper">
      <?php echo get_the_post_thumbnail($args['thePost']->ID); ?>
    </a>
    <div class="post-content-wrapper">
      <h2 class="blog-post-title green"><?php echo $args['thePost']->post_title; ?></h2>
      <p class="blog-post-author mb-0">
        <?php echo get_the_author_meta('display_name', $args['thePost']->post_author); ?>
      </p>
      <p class="blog-post-date">
        <?php echo get_the_date('m.d.y', $args['thePost']->ID); ?>
      </p>
      <div class="blog-post-content">
        <?php echo truncateString($args['thePost']->post_content, 200); ?>
      </div>
      <a href="<?php echo get_permalink($args['thePost']->ID); ?>" class="btn">Read More</a>
    </div>
  </div>
</div>