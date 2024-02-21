<?php

namespace Drupal\pantheon_agcdn_management\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form for AGCDN Settings.
 */
class AgcdnSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'pantheon_agcdn_management.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'agcdn_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('pantheon_agcdn_management.settings');
    $form['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Key'),
      '#description' => $this->t('The API key provided by Pantheon'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('api_key'),
      '#attributes' => ['id' => 'api-key-field'], // Add ID attribute to the textfield
    ];
    $form['api_key_label'] = [
      '#type' => 'html_tag',
      '#tag' => 'label',
      '#attributes' => ['for' => 'api-key-field'], // Use ID attribute of the textfield
      '#value' => $this->t('API Key'), // Label text
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('pantheon_agcdn_management.settings')
      ->set('api_key', $form_state->getValue('api_key'))
      ->save();
  }

}
