<script type="text/javascript">
jQuery(document).ready(function() {
	var list = ".view-countries .list-per-continent";
	var listafrica = ".view-countries .list-per-continent.africa";
	var continent = ".continent";
	var continentafrica = ".continent.africa";

	jQuery(".l-banner").addClass("list-view country-view");
	jQuery(list).hide();
	jQuery(listafrica).show();
	jQuery(continentafrica).addClass("active");

	jQuery(continent).click(function() {
		  jQuery(list).hide();
		  jQuery(this).next(list).toggle();
		  jQuery(list).removeClass('active');
		  jQuery(this).addClass('active');
	});
});
</script>

<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="continent-label cc-label">Continent</div>
    <div class="country-label cc-label">Country</div>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>