<?php
$moduleClasses = ' ';
$imageFirst = false;
// debugArgs($args);
$moduleClasses .= $args['moduleLayout'];
// if(
//   get_sub_field('module_layout') && 
//   get_sub_field('module_layout') == 'image-first') {
//     $moduleClasses .= ' image-first';
//     $imageFirst = true;
// }
// if(
//   !get_sub_field('main_content_right') || 
//   !get_sub_field('main_content_left')){
//   $moduleClasses .= ' single-col';
// }

?>
<div class="custom-template-module template-part-alternating-sections padding-control<?php echo $args['additionalClasses']; ?> <?php echo $moduleClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="center outer">
      
    <div class="alternating-section-inner">
      <?php if($args['image']): ?>
        <div class="image-panel-wrapper">
          <div class="image-panel aspect-video" style="background-image: url(<?php echo $args['image']; ?>); background-size: cover;background-repeat: no-repeat; background-position: center;"></div>
        </div>
      <?php endif; ?>
      <div class="rounded-card <?php if($args['moduleLayout'] == 'image-left'){ ?>rounded-tl-br<?php } else { ?>rounded-tr-bl<?php } ?>"><?php echo $args['content']; ?></div>
    </div>

  </div>
  
</div>