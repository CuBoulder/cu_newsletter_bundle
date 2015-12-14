<p class="date"><?php print $ap_date_cu_medium_date; ?></p>

<?php
  if (!empty($content['field_newsletter_intro_image'])) {
    $content['field_newsletter_intro_image'][0]['#image_style'] = 'email_feature_thumbnail_large';
    print render($content['field_newsletter_intro_image']);
  }
?>

<?php if (!empty($content['body'])): ?>
  <div class="newsletter-intro">
    <?php print render($content['body']); ?>
  </div>
<?php endif; ?>
<?php print render($content['field_newsletter_section']); ?>
<div class="newsletter-ad-promo-wrapper">
  <?php print render($content['field_newsletter_ad_promo'][0]); ?>
  <?php print render($content['field_newsletter_ad_promo'][1]); ?>
</div>
  <?php
    $blocks = $content['field_newsletter_text_block'];
    $columns = 2;
    $chunks = array_chunk($blocks['#items'], $columns, true);

    foreach ($chunks as $chunk) {
      print '<div class="newsletter-text-block-wrapper clearfix">';
        foreach ($chunk as $key => $block) {
          print render($content['field_newsletter_text_block'][$key]);
        }
        for ($i = count($chunk); $i < $columns; $i++) {
          print '<div class="newsletter-text-block"></div>';
        }
      print '</div>';
    }
   ?>
  <?php  ?>
