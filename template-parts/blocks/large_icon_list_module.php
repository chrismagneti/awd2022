<?php // debugArgs($args); ?>
<div class="custom-template-module template-part-large_icon_list_module padding-control<?php echo $args['additionalClasses']; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="center outer">
    
    <div class="inner-wrap">
      <?php if(isset($args['list']) && $args['list']): ?>
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
      <?php else: ?>
        <p class="white body-xl">There's nothing to see here</p>
      <?php endif; ?>

      <div class="content-wrapper">
        <?php echo get_sub_field('main_content'); ?>
      </div>
    </div>

  </div>
  
</div>