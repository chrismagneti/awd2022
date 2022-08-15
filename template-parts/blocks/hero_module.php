<div class="custom-template-module gradient-green-to-navy template-part-hero<?php echo $args['additionalClasses']; ?>"<?php if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>
    <?php if($args['backgroundImage']){ ?>
      <div class="hero-img-container">
        <div class="aspect-container">
          <div class="center wide">
            
            <div class="normal-hero-wrap">
              <?php the_sub_field('main_content'); ?>
            </div>

          </div>
          <img class="bg-image" src="<?php echo $args['backgroundImage']; ?>" alt="">
        </div>
      </div>
      <div>
      <?php if( get_sub_field('additional_content') ) { ?>
        <div class="center outer">
          <div class="rounded-card rounded-tl-br">
            <?php the_sub_field('additional_content'); ?>
            <?php if( get_sub_field('button_url') ) { ?>
              <div class="button-wrap">
                <a href="<?php the_sub_field('button_url'); ?>" class="btn"<?php if(get_sub_field('button_opens_in_new_tab')) { echo ' target="_blank" rel="noopener noreferrer"'; } ?>><?php the_sub_field('button_text'); ?></a>
                <?php if( get_sub_field('button_2_url') ) { ?>
                  <a href="<?php the_sub_field('button_2_url'); ?>" class="btn btn-alt"<?php if(get_sub_field('button_2_opens_in_new_tab')) { echo ' target="_blank" rel="noopener noreferrer"'; } ?>><?php the_sub_field('button_2_text'); ?></a>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
      </div>
    <?php } ?>
</div>