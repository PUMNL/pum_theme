<?php
  $url=$fields['field_publication']->content;
  $cover=$fields['field_publication_cover']->content;
  $issuu=$fields['field_issue_link']->content;
?>
<a href="<?php echo $url; ?>" target="_blank">
    <?php echo $cover; ?>
</a>
<a href="<?php echo $url;?>" target="_blank" class="type-block type-download">
  <div>
    <span>Download</span>
  </div>
</a>

<?php if ($issuu != ""): ?>
    <a href="<?php echo $issuu;?>" target="_blank" class="type-block type-download">
      <div>
        <span>Bekijk op Issuee</span>
      </div>
    </a>
<?php endif; ?>
