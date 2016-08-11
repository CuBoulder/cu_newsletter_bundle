<?php
  if (!empty($content['image'])) {
    $content['image'][0]['#image_style'] = 'email_feature_thumbnail_large';
  }
?>
<table class="row article-content">
  <tr>
    <td class="wrapper last">
      <table class="twelve columns">
        <tr>
          <td class="text-pad">
            <?php if(!empty($content['image'])): ?>
              <?php if(!empty($content['link'])): ?>
                <a href="<?php print $content['link']; ?>"><?php print render($content['image']); ?></a>
              <?php else: ?>
                <?php print render($content['image']); ?>
              <?php endif; ?>
            <?php endif; ?>
            <div class="content-padding">
              <h3 class="feature-title"><?php print render($content['title']); ?></h3>
              <?php print render($content['body']); ?>
            </div>
          </td>
          <td class="expander"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div class="border border-inset"></div>
