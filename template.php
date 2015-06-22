<?php

/**
 * Add theme_hooks here.
 */

/**
 * Implements hook_preprocess_html().
 */
function teka_preprocess_html(&$vars) {
  // Add class for 404 and 403 pages.
  $status = drupal_get_http_header("status");
  if ($status == '404 Not Found') {
    $vars['classes_array'][] = 'page-error-404';
  }
  elseif ($status == '403 Forbidden') {
    $vars['classes_array'][] = 'page-error-403';
  }

  // Add custom Fonts.
  $google_fonts_url = 'http://fonts.googleapis.com/css?family=';
  $family = 'Source+Sans+Pro:400,200,200italic,300,300italic,';
  $family .= '400italic,600,600italic,700,700italic';
  drupal_add_css($google_fonts_url . $family, array('type' => 'external'));
}

/**
 * Implements hook_preprocess_page().
 */
/* -- Delete this line if you want to use this function
function teka_preprocess_page(&$vars, $hook) {

}

/**
 * Implements hook_preprocess_node().
 */
function teka_preprocess_node(&$vars) {
  // Add a custom template suggestion using Node type and View mode.
  $suggestion = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
  $vars['theme_hook_suggestions'][] = $suggestion;
}

/**
 * Implements hook_breadcrumb().
 */
/* -- Delete this line if you want to use this function
function teka_breadcrumb($variables) {

}

/**
 * Implements hook_css_alter().
 */
function teka_css_alter(&$css) {
  // Fix Browser Sync bug.
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
