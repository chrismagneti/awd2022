<div class="team-member-image-wrap">
  <?php 
    $teamImage = $args['teamImage']; 
    $teamImageUrl = $teamImage && $teamImage['url'] ? $teamImage['url'] : get_stylesheet_directory_uri() . '/library/images/default-team-image.png';
    $teamImageAlt = $teamImage['alt'] ? $teamImage['alt'] : 'default placeholder image';
  ?>
  <?php /* this inner container is here so we can make sure the absolute positioned img is anchored to it, after it has been pushed inwards by the parent's padding */ ?>
  <div class="team-member-image-wrap-inner">
    <img class="team-member-image" src="<?php echo $teamImageUrl; ?>" alt="<?php echo $teamImageAlt; ?>" />
  </div>
</div>