<?php
/**
 * @file
 * dennis_mosaic.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dennis_mosaic_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function dennis_mosaic_node_info() {
  $items = array(
    'mosaic' => array(
      'name' => t('Mosaic'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}