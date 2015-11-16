<?php if (!empty($title)): ?>
  <div class="sector <?php print strtolower($title); ?>"><?php print $title; ?></div>
<?php endif; ?>
<div class="list-per-sector <?php print (strtolower($title)); ?>">
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>