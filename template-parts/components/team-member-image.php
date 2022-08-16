<div class="team-member-image-wrap">
  <?php 
    $teamImage = $args['teamImage']; 
    $teamImageUrl = $teamImage && $teamImage['url'] ? $teamImage['url'] : get_stylesheet_directory_uri() . '/library/images/default-team-image.png';
    $teamImageAlt = $teamImage['alt'] ? $teamImage['alt'] : 'default placeholder image';
  ?>
  <img class="team-member-image" src="<?php echo $teamImageUrl; ?>" alt="<?php echo $teamImageAlt; ?>" />
</div>