<?php

/**
 * @file
 * Slack Reeive integration module admin functions.
 */

/**
 * Slack Receive module admin form.
 */
function slack_receive_configure_form($form, &$form_state) {
  $form['slack_receive_token'] = array(
    '#type' => 'textfield',
    '#title' => t('Slack Receive Token'),
    '#description' => t('Enter your API token from the Slack Outgoing WebHooks integration.'),
    '#default_value' => variable_get('slack_receive_token',''),
    '#required' => TRUE,
  );
  return system_settings_form($form);
}
