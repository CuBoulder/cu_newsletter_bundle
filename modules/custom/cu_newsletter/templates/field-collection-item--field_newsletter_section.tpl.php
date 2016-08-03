<?php print render($content['field_newsletter_section_title']); ?>
<div class="newsletter-section-wrapper row block-column-container clearfix">
  <?php print render($content['articles']); ?>
  <?php print render($content['custom_content']); ?>
  <?php dpm($content); ?>
</div>
<?php print render($content['field_newsletter_more_link']); ?>
