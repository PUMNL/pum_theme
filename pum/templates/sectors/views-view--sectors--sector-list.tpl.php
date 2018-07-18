<script type="text/javascript">
jQuery(document).ready(function() {
  var list = ".list-per-sector";
  var listcivil = ".list-per-sector.civil";
  var sector = ".sector";
  var sectorcivil = ".sector.civil";

  jQuery(".l-banner").addClass("list-view sectors-list-view sector-view");
  jQuery('.block-views-sectors-banner-icons').hide();
  jQuery('.list-per-sector').hide();
  jQuery('.block-views-sectors-sector-list').show();
  jQuery(sectorcivil).addClass("active");

  jQuery('.switch-buttons .icon').click(function() {
    jQuery('.block-views-sectors-banner-icons').show();
    jQuery('.block-views-sectors-sector-list').hide();
    //jQuery(this).next(list).toggle();
    jQuery('.block-views-sectors-sector-list').removeClass('active');
    jQuery('.block-views-sectors-banner-icons').addClass('active');
    jQuery('.list-per-sector').hide();
  });
  jQuery('.view-id-sectors .sector').click(function() {
    jQuery('.list-per-sector').hide();
    jQuery(this).next(list).toggle();
  });
  jQuery('.switch-buttons .list').click(function() {
    jQuery('.block-views-sectors-banner-icons').hide();
    jQuery('.block-views-sectors-sector-list').show();
    //jQuery(this).next(list).toggle();
    jQuery('.block-views-sectors-banner-icons').removeClass('active');
    jQuery('.block-views-sectors-sector-list').addClass('active');
    jQuery('.list-per-sector').hide();
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