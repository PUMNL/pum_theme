<?php
    $year = $fields['field_year']->content;
    $number = $fields['field_number']->content;
    $height = ($number)*1.45;
    $padding = ($number)*0.5;
    if ($padding < 19) {
        $padding = 0;
    }
?>
<div class="project-per-year">
    <div class="number"><h2 style="padding-bottom: <?php echo $padding; ?>px"><?php echo $number; ?></div>
    <div class="bar" style="height: <?php echo $height; ?>px;"></div>
    <div class="year"><?php echo $year; ?></div>
</div>