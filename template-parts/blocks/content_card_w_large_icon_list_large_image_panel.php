<?php
$moduleClasses = ' ';
$imageFirst = false;
// debugArgs($args);
if(
  get_sub_field('module_layout') && 
  get_sub_field('module_layout') == 'image-first') {
    $moduleClasses .= ' image-first';
    $imageFirst = true;
}

?>
<div class="custom-template-module template-part-content-card-w-large-icon-list-large-image-panel padding-control<?php echo $args['additionalClasses']; ?> <?php echo $moduleClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="center outer">
      
    <div class="rounded-card <?php if($args['cardRounding']){ echo 'rounded-' . $args['cardRounding']; } ?>">

      <?php if(get_sub_field('intro_content')): ?>
        <div class="intro-content-wrapper">
          <?php the_sub_field('intro_content'); ?>
        </div>
      <?php endif; ?>

      <?php if(get_sub_field('icon_list')): ?>
        <?php 
					get_template_part( 
						'template-parts/components/large-icon-list', 
						null, // name
						[
							// variables going into the template part
							'list' => $args['list'],
						]
					); 
				?>
      <?php endif; ?>
    
    </div>

  </div>

  <?php if($args['backgroundImage']): ?>
    <div class="image-panel aspect-video" style="background-image: url(<?php echo $args['backgroundImage']['sizes']['2048x2048']; ?>); background-size: cover;background-repeat: no-repeat; background-position: center;"></div>
  <?php endif; ?>
  
</div>