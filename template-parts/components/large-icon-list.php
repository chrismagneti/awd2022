<div class="large-icon-list">
  <?php foreach($args['list'] as $item): ?>
    <div class="large-icon-list-row">
      <div class="large-icon-list-row-header">
        <div class="icon-wrapper" style="background-image: url(<?php echo $item['icon']['sizes']['large']; ?>); background-size: contain; background-position: center; background-repeat: no-repeat;"></div>
        <h3 class="icon-list-heading h-2xl"><?php echo $item['heading']; ?></h3>
      </div>
      <div class="content">
        <?php echo $item['body']; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>