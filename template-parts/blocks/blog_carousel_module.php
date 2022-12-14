<?php // debugArgs($args); ?>
<div class="custom-template-module template-part-blog_carousel_module padding-control<?php echo $args['additionalClasses']; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="image-panel aspect-container <?php if($args['backgroundImage'] && isset($args['backgroundImage']['sizes'])){ ?> has-bg<?php } ?>" style="background-image: url(<?php if($args['backgroundImage'] && isset($args['backgroundImage']['sizes'])){ echo $args['backgroundImage']['sizes']['2048x2048']; } ?>); background-size: cover;background-repeat: no-repeat; background-position: center;">
    <div class="center outer">
      <h2 class="h-3xl white"><?php echo get_sub_field('title'); ?></h2>
      <a href="<?php echo get_sub_field('button_url'); ?>" class="nav-text link-with-icon">
        <span class="link-text"><?php echo get_sub_field('button_text'); ?></span>
        <svg class="link-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg>
      </a>
    </div>
  </div>

  <div class="center outer">
    
    <?php if(isset($args['selectedPosts']) && $args['selectedPosts']): ?>
      <div class="blog-carousel">
        <?php foreach($args['selectedPosts'] as $thePost): ?>
          <?php 
            get_template_part( 
              'template-parts/components/blog-post', 
              null, // name
              [
                'thePost' => $thePost
              ]
            ); 
          ?>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <p class="white body-xl">There's nothing to see here</p>
    <?php endif; ?>

    

  </div>
  
</div>