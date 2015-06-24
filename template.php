<?php

/**
 * @file
 * Implements custom Teka Hooks.
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

  // Add a viewport meta tag.
  $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    ),
  );
  drupal_add_html_head($viewport, 'viewport');

  // Force IE to use most up-to-date render engine.
  $xua = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => 'X-UA-Compatible',
      'content' => 'IE=edge',
    ),
  );
  drupal_add_html_head($xua, 'x-ua-compatible');

  // Add in TypeKit Code.
  if (theme_get_setting('teka_typekit_id')) {
    $id = theme_get_setting('teka_typekit_id');
    $js = <<<EOT
    (function(d) {var config = {kitId: '$id',scriptTimeout: 3000},
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(
    /\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=
    d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;
    h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';
    tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;
    if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{
    Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)})(document);
EOT;

    drupal_add_js($js, array('type' => 'inline', 'force header' => TRUE));
  }

  // Add the Google Fonts.
  if (theme_get_setting('teka_gfonts_id')) {
    $gfonts_url = theme_get_setting('teka_gfonts_id');
    drupal_add_css($gfonts_url, array('type' => 'external'));
  }
}

/**
 * Implements hook_preprocess_page().
 */
/* -- Delete this line if you want to use this function
function teka_preprocess_page(&$vars, $hook) {

}
// */

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
// */

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
