<?php
/**
 * @file
 * cu_newsletter.ds.inc
 */

/**
 * Implements hook_ds_view_modes_info().
 */
function cu_newsletter_ds_view_modes_info() {
  $export = array();

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'email_feature';
  $ds_view_mode->label = 'Email Feature';
  $ds_view_mode->entities = array(
    'node' => 'node',
  );
  $export['email_feature'] = $ds_view_mode;

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'email_teaser';
  $ds_view_mode->label = 'Email Teaser';
  $ds_view_mode->entities = array(
    'node' => 'node',
  );
  $export['email_teaser'] = $ds_view_mode;

  return $export;
}
