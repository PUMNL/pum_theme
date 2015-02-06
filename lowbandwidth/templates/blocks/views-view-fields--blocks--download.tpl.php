<?php
  $url=$fields['field_file_block']->content;
  $text=$fields['field_text_block']->content;
  $bgcolor=$fields['field_bg_color_block']->content;
?>
<a href="<?php echo $url;?>" target="_blank" class="type-block type-download <?php echo $bgcolor; ?>">
  <div>
    <?php echo $text?>
    <span>Download</span>
  </div>
</a>
