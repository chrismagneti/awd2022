<div class="custom-template-module template-part-5050-content-card padding-control<?php echo $args['additionalClasses']; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="center outer">
      
    <div class="rounded-card rounded-tr-bl">

      <div class="template-split-5050-card-wrapper">

        <div class="a-columner column1">
          <?php the_sub_field('main_content_left'); ?>
        </div>

        <div class="a-columner column2">
          <?php the_sub_field('main_content_right'); ?>
        </div>

      </div>
    
    </div>

  </div>

  <?php if($args['backgroundImage']): ?>
    <div class="image-panel aspect-video" style="background-image: url(<?php echo $args['backgroundImage']['sizes']['2048x2048']; ?>); background-size: cover;background-repeat: no-repeat; background-position: center;"></div>
  <?php endif; ?>
  
</div>