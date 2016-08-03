<?php
  if (!empty($content['image'])) {
    $content['image'][0]['#image_style'] = 'email_feature_thumbnail_large';
  }
?>
<div class="article-view-mode-email-feature node-view-mode-email-feature clearfix <?php print $content['column_class']; ?>">
  <?php if(!empty($content['image'])): ?>
    <?php print render($content['image']); ?>
  <?php endif; ?>
  <div class="article-view-mode-email-feature-content node-view-mode-email-feature-content">
    <h3><?php print render($content['title']); ?></h3>
    <div class="article-summary"><?php print render($content['body']); ?></div>
  </div>
</div>
