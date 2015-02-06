<?php
  $image = $fields['field_multiple_images']->content;
  $news_media = $fields['field_news_or_media']->content;
  $title = $fields['title']->content;
  $link = $fields['view_node']->content;
  $date = $fields['field_single_date_day']->content;
  $body = $fields['body']->content;
?>

<div class="<?php echo strtolower($news_media);?>">
  <?php if ($image): ?><div class="image"><?php echo $image; ?></div><?php endif; ?>
  <div class="title"><?php echo $title; ?></div>
  <div class="date"><?php echo $date; ?> // </div><div class="body"><?php echo $body; ?></div>
  <div class="link"><?php echo $link; ?></div>
  <div class="clearfix"></div>
</div>