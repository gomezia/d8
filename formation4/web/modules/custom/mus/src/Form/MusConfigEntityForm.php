<?php

/**
 * @file
 * Contains \Drupal\mus\Form\MusConfigEntityForm.
 */

namespace Drupal\mus\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class MusConfigEntityForm.
 *
 * @package Drupal\mus\Form
 */
class MusConfigEntityForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $mus_config_entity = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $mus_config_entity->label(),
      '#description' => $this->t("Label for the Mus config entity."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $mus_config_entity->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\mus\Entity\MusConfigEntity::load',
      ),
      '#disabled' => !$mus_config_entity->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $mus_config_entity = $this->entity;
    $status = $mus_config_entity->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Mus config entity.', [
          '%label' => $mus_config_entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Mus config entity.', [
          '%label' => $mus_config_entity->label(),
        ]));
    }
    $form_state->setRedirectUrl($mus_config_entity->urlInfo('collection'));
  }

}
