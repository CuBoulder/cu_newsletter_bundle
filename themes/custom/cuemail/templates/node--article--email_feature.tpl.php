<?php hide($content['field_tags']); ?>
<?php hide($content['article_tags']); ?>

<table class="row article-content article-feature <?php print $elements['zebra']; ?> <?php print $elements['#order_class']; ?>">
  <tr>
    <td class="wrapper last">
      <table class="twelve columns">
        <tr>
          <td class="text-pad">
            <?php if(!empty($content['field_article_thumbnail'])): ?>
              <?php print render($content['field_article_thumbnail']); ?>
            <?php endif; ?>
            <div class="content-padding">
              <h3 class="feature-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
              <div class="tags">
                <?php print render($content['field_article_categories']); ?>
              </div>
              <?php print render($content['body']); ?>

            </div>
          </td>
          <td class="expander"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div class="border border-inset article-feature-border <?php print $elements['#order_class']; ?>"></div>
