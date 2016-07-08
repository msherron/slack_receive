<?php

/**
 * @file
 * Contains Drupal\slack_receive\Form\SettingsForm.
 * Configures administrative settings for slack receive.
 */

namespace Drupal\slack_receive\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormState;

/**
 * Class SettingsForm.
 *
 * @package Drupal\slack_receieve\Form
 *
 * @ingroup slack
 */
class SettingsForm extends ConfigFormBase {

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'slack_receive_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['slack_receive.settings'];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('slack_receive.settings');

    $form['slack_receive_token'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Slack Receive Token'),
      '#description' => $this->t('Enter your API token from the Slack Outgoing WebHooks integration.'),
      '#default_value' => $config->get('slack_receive_token'),
      '#required' => TRUE,
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('slack_receive.settings');
    $config
        ->set('slack_receive_token', $form_state->getValue('slack_receive_token'))
        ->save();
    parent::submitForm($form, $form_state);
  }

}
