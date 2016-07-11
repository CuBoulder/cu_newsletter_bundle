<?php
/**
 * @file
 * cu_newsletter_list.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function cu_newsletter_list_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance:
  // 'bean-newsletter_list-field_newsletter_list_type_name'.
  $field_instances['bean-newsletter_list-field_newsletter_list_type_name'] = array(
    'bundle' => 'newsletter_list',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'bean',
    'fences_wrapper' => 'no_wrapper',
    'field_name' => 'field_newsletter_list_type_name',
    'label' => 'Newsletter Type/name',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'options',
      'settings' => array(),
      'type' => 'options_select',
      'weight' => 31,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Newsletter Type/name');

  return $field_instances;
}
