<?php
/**
 * @file
 * cu_newsletter.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function cu_newsletter_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_newsletter_ads|node|newsletter|form';
  $field_group->group_name = 'group_newsletter_ads';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'newsletter';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_newsletter';
  $field_group->data = array(
    'label' => 'Ads/Promos',
    'weight' => '18',
    'children' => array(
      0 => 'field_newsletter_ad_promo',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-newsletter-ads field-group-htab',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_newsletter_ads|node|newsletter|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_newsletter_blocks|node|newsletter|form';
  $field_group->group_name = 'group_newsletter_blocks';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'newsletter';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_newsletter';
  $field_group->data = array(
    'label' => 'Blocks',
    'weight' => '17',
    'children' => array(
      0 => 'field_newsletter_text_block',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-newsletter-blocks field-group-htab',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_newsletter_blocks|node|newsletter|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_newsletter_intro|node|newsletter|form';
  $field_group->group_name = 'group_newsletter_intro';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'newsletter';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_newsletter';
  $field_group->data = array(
    'label' => 'Intro',
    'weight' => '14',
    'children' => array(
      0 => 'body',
      1 => 'field_newsletter_intro_image',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-newsletter-intro field-group-htab',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_newsletter_intro|node|newsletter|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_newsletter_sections|node|newsletter|form';
  $field_group->group_name = 'group_newsletter_sections';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'newsletter';
  $field_group->mode = 'form';
  $field_group->parent_name = 'group_newsletter';
  $field_group->data = array(
    'label' => 'Sections',
    'weight' => '16',
    'children' => array(
      0 => 'field_newsletter_section',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => 'group-newsletter-sections field-group-htab',
        'required_fields' => 1,
        'id' => '',
      ),
    ),
  );
  $export['group_newsletter_sections|node|newsletter|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_newsletter|node|newsletter|form';
  $field_group->group_name = 'group_newsletter';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'newsletter';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Elements',
    'weight' => '3',
    'children' => array(
      0 => 'group_newsletter_sections',
      1 => 'group_newsletter_ads',
      2 => 'group_newsletter_blocks',
      3 => 'group_newsletter_intro',
    ),
    'format_type' => 'htabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => 'group-newsletter field-group-htabs',
      ),
    ),
  );
  $export['group_newsletter|node|newsletter|form'] = $field_group;

  return $export;
}
