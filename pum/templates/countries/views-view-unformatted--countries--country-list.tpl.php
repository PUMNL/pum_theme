<?php if (!empty($title)): ?>
  <div class="continent <?php print preg_replace("/[\s_]/", "-", strtolower($title)); ?>"><?php print $title; ?></div>
<?php endif; ?>
<div class="list-per-continent <?php print (strtolower($title)); ?>">
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>