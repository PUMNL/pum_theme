<?php
  $url=$fields['field_link_link_block']->content;
  $text=$fields['field_text_block']->content;
  $bgcolor=$fields['field_bg_color_block']->content;
  $smalltext=$fields['field_small_link_text_block']->content;
  $smalltext_full = '';
  if ($smalltext != '') {
    $smalltext_full = '<span>'.$smalltext.'</span>';
  }

  if(!isset($bgcolor)) {
    $bgcolor='default';
  }

?>
<a href="<?php echo $url;?>" target="_blank" class="type-block type-link <?php echo $bgcolor; ?>">
  <div>
    <?php echo $text?>
    <?php echo $smalltext_full; ?>
  </div>
</a>
