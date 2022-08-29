<div class="custom-template-module gradient-green-to-navy template-part-hero<?php echo $args['additionalClasses']; ?>"<?php if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>
    <?php if($args['backgroundImage']){ ?>
      <div class="hero-img-container">
        <div class="aspect-container" style="background-image: url(<?php echo $args['backgroundImage']; ?>); background-size: cover; background-position: center;">
          <div class="center wide">
            
            <div class="normal-hero-wrap">
              <?php the_sub_field('main_content'); ?>
            </div>

          </div>
        </div>
      </div>
      <div>
      <?php if( get_sub_field('additional_content') ) { ?>
        <div class="center outer">
          <div class="rounded-card rounded-tl-br">
            <?php the_sub_field('additional_content'); ?>
          </div>
        </div>
      <?php } ?>
      </div>
    <?php } ?>
</div>