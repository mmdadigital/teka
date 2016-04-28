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
  $desc = t("If you are using <a href='@link' target='_blank'>Google Fonts</a>
    to webfonts, put your Google Fonts <strong>Family</strong> here.<br />
    <strong>Examples:</strong><br />
    - One family: <strong>Open+Sans:400,600,700,300:latin</strong><br />
    - More families: <strong>Lato:400,700,300:latin|Open+Sans:400,700,300,600:latin</strong>",
    array('@link' => 'https://www.google.com/fonts'));
  $form['misc']['teka_gFonts'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Fonts URL'),
    '#default_value' => theme_get_setting('teka_gFonts'),
    '#size' => 60,
    '#maxlength' => 256,
    '#description' => $desc,
  );

  // Typekit ID Field.
  $typekit_link = '';
  $desc = t("If you are using <a href='@link' target='_blank'>Typekit</a>
    to webfonts, put your ID here", array('@link' => 'https://typekit.com'));
  $form['misc']['teka_typekit_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Typekit ID'),
    '#default_value' => theme_get_setting('teka_typekit_id'),
    '#size' => 7,
    '#maxlength' => 7,
    '#description' => $desc,
  );
}
