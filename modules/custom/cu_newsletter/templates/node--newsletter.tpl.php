<div class="newsletter-wrapper row clearfix">

  <div class="newsletter-main <?php print $column_classes['main']; ?>">
    <?php if ($email_version_link): ?>
      <p>
        <?php print $email_version_link; ?>
      </p>
    <?php endif; ?>
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
          <?php
            print render($content['field_newsletter_ad_promo'][0]);
          ?>
        <?php endif; ?>
        <?php if (!empty($content['field_newsletter_text_block'])): ?>
          <div class="newsletter-text-blocks clearfix row">
            <?php
              //ddl($content['field_newsletter_text_block']);
              $blocks = array_intersect_key($content['field_newsletter_text_block'], element_children($content['field_newsletter_text_block']));
              foreach ($blocks as $block) {
                print theme('cu_newsletter_block', array('content' => $block));
              }
             ?>

            <?php //print render($content['field_newsletter_text_block']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($content['field_newsletter_ad_promo'][1])): ?>
          <?php
            print render($content['field_newsletter_ad_promo'][1]);
          ?>
        <?php endif; ?>
      </div>

      <?php  ?>
    </div>
  <?php endif; ?>
</div>
