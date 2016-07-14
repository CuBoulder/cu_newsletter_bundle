<?php

function cuemail_theme(&$existing, $type, $theme, $path) {
  $registry = array();
  $template_dir = drupal_get_path('theme', 'cuemail') . '/templates';
  $registry['newsletter_section_blocks'] = array(
    'template' => 'newsletter-section-blocks',
    'path' => $template_dir,
  );
  $registry['newsletter_section_ads'] = array(
    'template' => 'newsletter-section-ads',
    'path' => $template_dir,
  );
  $registry['newsletter_intro'] = array(
    'template' => 'newsletter-intro',
    'path' => $template_dir,
  );
  $registry['newsletter_list'] = array(
    'template' => 'newsletter-list',
    'path' => $template_dir,
  );
  return $registry;
}

/**
 * Implements theme_preprocess_html().
 */
function cuemail_preprocess_html(&$vars) {
  $data = array(
    '#tag' => 'meta',
    '#attributes' => array(
       'http-equiv' => 'Content-Type',
       'content' => 'text/html; charset=utf-8',
    ),
  );
  drupal_add_html_head($data, 'utf');
}

/**
 * Implements theme_preprocess_node().
 */
function cuemail_preprocess_node(&$vars) {

  $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
  $url = url('node/' . $vars['nid'], array('absolute' => TRUE, 'alias' => TRUE, 'https' => FALSE));
  $vars['node_url'] = $url;
  if ($vars['type'] == 'newsletter') {
    if (!empty($vars['content']['field_newsletter_intro_image'])) {
      $vars['content']['field_newsletter_intro_image'][0]['#image_style'] = 'email_medium';
    }
    $list = array();
    foreach ($vars['content']['field_newsletter_section']['#items'] as $key => $item) {
      $key_2 = key($vars['content']['field_newsletter_section'][$key]['entity']['field_collection_item']);
      $articles = $vars['content']['field_newsletter_section'][$key]['entity']['field_collection_item'][$key_2]['field_newsletter_articles']['#items'];
      foreach ($articles as $article) {
        $node = node_load($article['target_id']);
        $list[] = $node->title;
      }
    }
    $vars['content']['list'] = theme('item_list', array(
      'items' => $list,
      'type' => 'ul',
      'attributes' => array(
        'class' => array(
          'bullet-list',
        ),
      ),
    ));
  }
  if ($vars['type'] == 'article') {
    if (!empty($vars['content']['field_article_thumbnail'][0])) {
      $vars['content']['field_article_thumbnail'][0]['#path']['options']['absolute'] = TRUE;
    }
    if ($vars['view_mode'] == 'email_feature') {     $vars['content']['field_article_thumbnail'][0]['#image_style'] = 'email_feature_thumbnail';
    }
    if (isset($vars['field_article_categories'])) {
      foreach ($vars['field_article_categories'] as $tid) {
        if (isset($tid['tid'])) {
          $tids[] = $tid['tid'];
        }
      }
    }
    if (isset ($tids)) {
      $terms = taxonomy_term_load_multiple($tids);
      foreach ($terms as $term) {
        if (isset($term->name)) {
          $tag = $term->name;
          if (!empty($term->field_category_term_page_link)) {
            $new_tags[] = l($tag, $term->field_category_term_page_link[LANGUAGE_NONE][0]['url'], array('absolute' => TRUE, 'alias' => TRUE, 'https' => FALSE));
          }
          else {
            $new_tags[] = $tag;
          }
        }
      }
      $markup = implode(' ', $new_tags);
      unset($vars['content']['field_article_categories']);
      $vars['content']['field_article_categories'][0]['#markup'] = '<p>' . $markup . '</p>';
    }
  }
}

/**
 * Implements theme_image_style().
 */
function cuemail_image_style(&$vars) {
  // Determine the dimensions of the styled image.
  $dimensions = array(
    'width' => $vars['width'],
    'height' => $vars['height'],
  );

  image_style_transform_dimensions($vars['style_name'], $dimensions);

  $vars['width'] = $dimensions['width'];
  $vars['height'] = $dimensions['height'];

  // Determine the url for the styled image.
  $vars['path'] = image_style_url($vars['style_name'], $vars['path']);
  $vars['attributes']['class'] = array('image-' . $vars['style_name']);
  return theme('image', $vars);
}
