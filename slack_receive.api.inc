<?php

/**
 * @file
 * Describe hooks provided by the Slack Receive module.
 */

/**
 * Allow Drupal to respond to commands sent via Slack.
 *
 * @param array $data
 *   An array of POST data sent from Slack which is parsed for execution.
 *   Responses can be returned to Slack by adding single strings to
 *   data['response'] and returning the array.
 */
function hook_slack_receive_api(array $data) {
}
