<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="slide"2>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>

