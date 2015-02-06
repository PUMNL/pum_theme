<?php
  $url=$fields['field_sector_sheet']->content;
  $title=$fields['title']->content;
?>
<a href="<?php echo $url;?>" target="_blank" class="type-block type-sectorsheet red">
  <h2>Sectorsheet</h2>
  <?php echo $title; ?>
  <span>Download</span>
</a>