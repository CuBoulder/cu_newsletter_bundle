<?php
$url = $content['field_newsletter_ad_link'][0]['#element']['url'];
$content['field_newsletter_ad_image'][0]['#image_style'] = 'email_ad_large';
$img = render($content['field_newsletter_ad_image']);
$linked_ad = l($img, $url, array('html' => TRUE));
?>
<div class="newsletter-ad-promo">
  <?php print $linked_ad; ?>
</div>
