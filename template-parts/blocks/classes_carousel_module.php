<?php
$moduleClasses = ' ';
$hasBgImage = $args['backgroundImage'] && isset($args['backgroundImage']['sizes']);
$slidesToShow = 1;
$moduleClasses .= " shows-{$slidesToShow}-slides";
?>
<div class="custom-template-module template-part-classes_carousel_module padding-control<?php echo $args['additionalClasses']; ?> <?php echo $moduleClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?> data-slide-count="<?php if(isset($args['classes']) && $args['classes']): echo count($args['classes']); endif; ?>">

  <?php // Only render this section if there is at least a title or BG image ?>
  <?php if($hasBgImage || get_sub_field('title')){ ?>
    <div class="image-panel aspect-container <?php if($hasBgImage){ ?> has-bg<?php } ?>" style="background-image: url(<?php if($args['backgroundImage'] && isset($args['backgroundImage']['sizes'])){ echo $args['backgroundImage']['sizes']['2048x2048']; } ?>); background-size: cover;background-repeat: no-repeat; background-position: center;">
      <div class="center outer">
        <h2 class="h-3xl"><?php echo get_sub_field('title'); ?></h2>
        <a href="<?php echo get_sub_field('button_url'); ?>" class="nav-text link-with-icon">
          <span class="link-text"><?php echo get_sub_field('button_text'); ?></span>
          <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
        </a>
      </div>
    </div>
  <?php } ?>

  <div class="center outer <?php if($slidesToShow > 1){ ?>wide<?php } ?>">
    
    <?php if(isset($args['classes']) && $args['classes']): ?>
      <div class="<?php if($slidesToShow && $slidesToShow == 1){ ?>rounded-card rounded-tl-br<?php } ?>">
        <div class="class-carousel" data-slides-to-show="<?php echo $slidesToShow; ?>">
          <?php foreach($args['classes'] as $class): ?>
            <?php $thumbnailUrl = get_the_post_thumbnail_url($class->ID) ? get_the_post_thumbnail_url($class->ID) : get_stylesheet_directory_uri() . '/library/images/hero-default.jpg'; ?>
            <div class="class-post a-slide">
              <div class="a-slide-inner">
                <?php if(!$hasBgImage): ?>
                  <?php /* only rendering this if there is no bg image in the module, to match the design spec */ ?>
                  <a href="<?php echo get_field('url', $class->ID); ?>" class="post-thumbnail-wrapper">
                    <div class="aspect-video" style="background-image: url(<?php echo $thumbnailUrl; ?>); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
                  </a>
                <?php endif; ?>
                <h2 class="class-post-title green"><?php echo truncateString($class->post_title, 80); ?></h2>
                <p class="class-post-location mb-0"><?php echo get_field('location', $class->ID); ?></p>
                <p class="class-post-date"><?php echo get_field('class_date', $class->ID); ?></p>
                <p class="class-post-content">
                  <?php echo truncateString($class->post_content, 200); ?>
                </p>
                <div class="button-wrap">
                  <a href="<?php echo get_field('url', $class->ID); ?>" class="btn">Register</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php else: ?>
      <p class="body-xl">There's no upcoming classes</p>
    <?php endif; ?>

    

  </div>
  
</div>