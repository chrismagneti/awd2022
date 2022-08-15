<?php // debugArgs($args); ?>
<div class="custom-template-module template-part-large_icon_list_module padding-control<?php echo $args['additionalClasses']; ?>"<?php if(get_sub_field('section_id')) { echo ' id="'.get_sub_field("section_id").'"'; } if($args['additionalStyles']) { echo ' style="' . $args['additionalStyles'] . '"'; } ?>>

  <div class="center outer">
    
    <div class="inner-wrap">
      <?php if(isset($args['list']) && $args['list']): ?>
        <div class="large-icon-list">
          <?php foreach($args['list'] as $item): ?>
            <div class="large-icon-list-row">
              <div class="icon-wrapper">
                <img src="<?php echo $item['icon']['sizes']['large']; ?>" alt="icon for <?php echo $item['heading']; ?>">
              </div>
              <div class="content">
                <h3 class="icon-list-heading h-2xl"><?php echo $item['heading']; ?></h3>
                <?php echo $item['body']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php else: ?>
        <p class="white body-xl">There's nothing to see here</p>
      <?php endif; ?>

      <div class="content-wrapper">
        <?php echo get_sub_field('main_content'); ?>
      </div>
    </div>

  </div>
  
</div>