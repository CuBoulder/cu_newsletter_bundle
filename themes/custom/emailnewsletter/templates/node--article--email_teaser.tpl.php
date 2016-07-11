<?php hide($content['field_tags']); ?>
<?php hide($content['article_tags']); ?>

<table class="row article-content">
  <tr>
    <td class="wrapper last">
      <table class="twelve columns">
        <tr>
          <?php if (!empty($content['field_article_thumbnail'])): ?>
          <td class="three sub-columns text-pad">
            <?php print render($content['field_article_thumbnail']); ?>
          </td>
          <td class="nine sub-columns text-pad">
          <?php else: ?>
          <td class="twelve sub-columns text-pad">
          <?php endif; ?>
            <h3 class="teaser-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
            <div class="tags">
              <?php print render($content['field_article_categories']); ?>
            </div>
            <?php print render($content['body']); ?>

          </td>
          <td class="expander"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div class="border border-inset"></div>
