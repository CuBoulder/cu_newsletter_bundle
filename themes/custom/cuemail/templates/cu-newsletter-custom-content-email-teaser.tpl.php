<?php
  if (!empty($content['image'])) {
    $content['image'][0]['#image_style'] = 'email_teaser_thumbnail';
  }
?>
<table class="row article-content">
  <tr>
    <td class="wrapper last">
      <table class="twelve columns">
        <tr>
          <?php if (!empty($content['image'])): ?>
          <td class="three sub-columns text-pad">
            <?php print render($content['image']); ?>
          </td>
          <td class="nine sub-columns text-pad">
          <?php else: ?>
          <td class="twelve sub-columns text-pad">
          <?php endif; ?>
            <h3 class="teaser-title"><?php print render($content['title']); ?></h3>
            <?php print render($content['body']); ?>

          </td>
          <td class="expander"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div class="border border-inset"></div>
