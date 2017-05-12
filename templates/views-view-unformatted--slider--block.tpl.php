<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div id="slider-carousel" class="carousel slide hidden-xs" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <?php foreach ($rows as $id => $row): ?>
    <div class="item <?php if ($id == 0) print "active"; ?>">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slider-carousel" role="button" data-slide="prev">
    <span class="icon-chevron-left icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider-carousel" role="button" data-slide="next">
    <span class="icon-chevron-right icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
