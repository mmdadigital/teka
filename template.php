<?php

/**
 * Add theme_hooks here.
 */

/**
 * Implements hook_preprocess_html().
 */
function teka_preprocess_html(&$vars) {

}

/**
 * Implements hook_preprocess_page().
 */
function teka_preprocess_page(&$vars, $hook) {

}

/**
 * Implements hook_preprocess_node().
 */
function teka_preprocess_node(&$vars) {

}

/**
 * Implements hook_breadcrumb().
 */
function teka_breadcrumb($variables) {

}

/**
 * Implements hook_css_alter().
 */
function meutema_css_alter(&$css) {
  // This fix bug on Browser Sync
  $count = 0;
  if (!variable_get('preprocess_css')) {
    foreach ($css as $key => $value) {
      // Skip core files.
      $is_core = (strpos($value['data'], 'misc/') === 0 || strpos($value['data'], 'modules/') === 0);
      if (!$is_core) {
        // This option forces embeding with a link element.
        $css[$key]['preprocess'] = FALSE;
        $count++;
      }
    }
  }
}
