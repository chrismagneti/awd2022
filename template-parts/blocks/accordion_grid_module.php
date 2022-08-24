<?php
$moduleClasses = ' ';
$imageFirst = false;
// debugArgs($args);
$moduleClasses .= $args['moduleLayout'];
?>
<div class="custom-template-module template-part-accordion-grid padding-control<?php echo $args['additionalClasses']; ?> <?php echo $moduleClasses; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="center outer">
      
    <div class="accordion-grid">
      <?php foreach($args['accordions'] as $accordion): ?>
        <?php echo $accordion['content']; ?>
      <?php endforeach; ?>
    </div>

  </div>
  
</div>