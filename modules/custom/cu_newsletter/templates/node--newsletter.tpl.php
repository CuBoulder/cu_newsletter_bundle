<div class="newsletter-wrapper row clearfix">
  <div class="newsletter-main <?php print $column_classes['main']; ?>">
    <?php
      if (!empty($content['field_newsletter_intro_image'])): ?>
      <div class="newsletter-hero">
        <?php
        $content['field_newsletter_intro_image'][0]['#image_style'] = 'email_large';
        print render($content['field_newsletter_intro_image']);
        ?>
      </div>

    <?php endif; ?>
    <?php if (!empty($content['body'])): ?>
      <div class="newsletter-intro">
        <?php print render($content['body']); ?>
      </div>
    <?php endif; ?>
    <?php print render($content['field_newsletter_section']); ?>
  </div>
  <?php if (!empty($column_classes['sidebar'])): ?>
    <div class="newsletter-sidebar <?php print $column_classes['sidebar']; ?>">
      <div class="newsletter-ad-promo-wrapper">
        <?php if (!empty($content['field_newsletter_ad_promo'][0])): ?>
          <?php print render($content['field_newsletter_ad_promo'][0]); ?>
        <?php endif; ?>
        <?php if (!empty($content['field_newsletter_text_block'])): ?>
          <?php print render($content['field_newsletter_text_block']); ?>
        <?php endif; ?>
        <?php if (!empty($content['field_newsletter_ad_promo'][1])): ?>
          <?php print render($content['field_newsletter_ad_promo'][1]); ?>
        <?php endif; ?>
      </div>

      <?php  ?>
    </div>
  <?php endif; ?>
</div>
