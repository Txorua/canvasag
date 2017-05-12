<?php $node = node_load($nid) ?>
<?php if ($teaser): ?>
<div class="entry clearfix">
  <div class="entry-image hidden-xxs hidden-xs hidden-sm">
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
    <div class="entry-image visible-xxs visible-xs visible-sm">
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
  <?php if (isset($body[0]['summary']) && !empty($body[0]['summary'])): ?>
    <?php $body = field_get_items('node', $node, 'body'); ?>
    <?php $teaser = field_view_value('node', $node, 'body', $body[0],'teaser'); ?>
    <?php print render($teaser); ?>
  <?php endif; ?>
  <?php print render($content); ?>
<?php endif; ?>
