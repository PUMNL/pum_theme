<?php
  $nid = $fields['field_story_sector_reference_1']->content;
  $title = $fields['field_story_sector_reference']->content;
  $url = drupal_get_path_alias('node/'.$nid, NULL);
?>

<a class="type-block default" href="/<?php echo $url; ?>"><div><strong><?php echo $title; ?></strong></div><span>sector info</span></a>