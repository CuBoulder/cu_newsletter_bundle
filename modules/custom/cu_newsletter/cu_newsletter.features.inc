<?php
/**
 * @file
 * cu_newsletter.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function cu_newsletter_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function cu_newsletter_image_default_styles() {
  $styles = array();

  // Exported image style: email_ad.
  $styles['email_ad'] = array(
    'label' => 'email_ad',
    'effects' => array(
      10 => array(
        'name' => 'focal_point_scale_and_crop',
        'data' => array(
          'width' => 580,
          'height' => 240,
        ),
        'weight' => 2,
      ),
    ),
  );

  // Exported image style: email_feature_thumbnail.
  $styles['email_feature_thumbnail'] = array(
    'label' => 'email_feature_thumbnail',
    'effects' => array(
      10 => array(
        'name' => 'focal_point_scale_and_crop',
        'data' => array(
          'width' => 580,
          'height' => 270,
        ),
        'weight' => 2,
      ),
    ),
  );

  // Exported image style: email_feature_thumbnail_large.
  $styles['email_feature_thumbnail_large'] = array(
    'label' => 'email_feature_thumbnail_large',
    'effects' => array(
      10 => array(
        'name' => 'focal_point_scale_and_crop',
        'data' => array(
          'width' => 960,
          'height' => 480,
        ),
        'weight' => 2,
      ),
    ),
  );

  // Exported image style: email_large.
  $styles['email_large'] = array(
    'label' => 'email_large',
    'effects' => array(
      1 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 1200,
          'height' => '',
          'upscale' => 1,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: email_medium.
  $styles['email_medium'] = array(
    'label' => 'email_medium',
    'effects' => array(
      2 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 580,
          'height' => '',
          'upscale' => 1,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: email_teaser_thumbnail.
  $styles['email_teaser_thumbnail'] = array(
    'label' => 'email_teaser_thumbnail',
    'effects' => array(
      10 => array(
        'name' => 'focal_point_scale_and_crop',
        'data' => array(
          'width' => 160,
          'height' => 160,
        ),
        'weight' => 2,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function cu_newsletter_node_info() {
  $items = array(
    'newsletter' => array(
      'name' => t('Newsletter'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
