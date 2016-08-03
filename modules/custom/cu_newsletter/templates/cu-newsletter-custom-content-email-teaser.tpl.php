<?php
  ddl($content);
  $content['image'][0]['#image_style'] = 'email_teaser_thumbnail';
?>


<div class="article-view-mode-email-teaser node-view-mode-email-teaser clearfix">
  <?php if(!empty($content['image'])): ?>
    <?php print render($content['image']); ?>
  <?php endif; ?>
  <div class="article-view-mode-email-teaser-content node-view-mode-email-teaser-content">
    <h3><?php print render($content['title']); ?></h3>
    <div class="article-summary"><?php print render($content['body']); ?></div>
  </div>
</div>
