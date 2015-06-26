<?php
/**
 * @file
 * Exposed Hooks
 */

/**
 * Change the view mode that will be used to render a mosaic node.
 *
 * @param array $nodes_display
 *   Multidimensional array keyed by nid:
 *     ['node'] => node object,
 *     ['view_mode'] => view mode name
 * @param object $entity
 *   The entity to act on.
 */
function hook_dennis_mosaic_display_alter(&$nodes_display, $entity) {
  if (empty($entity->field_mosaic_layout[LANGUAGE_NONE][0]['value'])) {
    $layout = 'one_large_multiple_small';
  }
  else {
    $layout = $entity->field_mosaic_layout[LANGUAGE_NONE][0]['value'];
  }

  if ($layout == 'one_large_multiple_small') {
    $first = array_shift($nodes_display);
    $first['view_mode'] = 'mosaic_large';
    array_unshift($nodes_display, $first);
  }
}
