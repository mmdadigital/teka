<?php

/**
 * @file
 * Implements custom Teka Theme Settings.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function teka_form_system_theme_settings_alter(&$form, $form_state) {
  // Google Fonts URL.
  $glink = '<a href="https://www.google.com/fonts" target="_blank">';
  $glink .= 'Google Fonts</a>';
  $ex = 'Ex.: http://fonts.googleapis.com/css?family=Open+Sans:400|Roboto:400';
  $desc = t(
    "If you are using @link to webfonts, put google URL here. @ex",
    array('@link' => $glink, '@ex' => $ex),
  );
  $form['misc']['teka_gfonts_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Fonts URL'),
    '#default_value' => theme_get_setting('teka_gfonts_id'),
    '#size' => 60,
    '#maxlength' => 256,
    '#description' => $desc,
  );

  // Typekit ID Field.
  $typekit_link = '<a href="https://typekit.com" target="_blank">Typekit</a>';
  $desc = t(
    "If you are using @link to webfonts, put your ID here",
    array('@link' => $typekit_link),
  );
  $form['misc']['teka_typekit_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Typekit ID'),
    '#default_value' => theme_get_setting('teka_typekit_id'),
    '#size' => 7,
    '#maxlength' => 7,
    '#description' => $desc,
  );
}
