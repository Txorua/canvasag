<?php if ($teaser): ?>
<div class="entry clearfix">
  <div class="entry-image hidden-xs">
    <?php print render($content['field_imagen']); ?>
  </div>
  <div class="entry-c">
    <div class="entry-title">
      <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </div>
    <ul class="entry-meta clearfix">
      <li><i class="icon-calendar3"></i> <?php print date('d M Y',$node->created); ?></li>
      <?php print render($content['field_tags']); ?>
    </ul>
    <div class="entry-image visible-xs">
      <?php print render($content['field_imagen']); ?>
    </div>
    <div class="entry-content">
      <?php print render($content['body']); ?>
      <?php hide($content['links']); ?>
      <?php print $variables['more-link']; ?>
    </div>
  </div>

</div>
<?php endif; ?>
<?php if ($view_mode == 'full'): ?>
  <?php print render($content); ?>
<?php endif; ?>
