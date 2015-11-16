<?php
  $url=$fields['field_country_factsheet']->content;
  $title=$fields['title']->content;
?>
<a href="<?php echo $url;?>" target="_blank" class="type-block type-factsheet red">
  <h2>Factsheet</h2>
  <?php echo $title; ?>
  <span>Download</span>
</a>