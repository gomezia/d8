<?php

/**
 * @file
 * Contains \Drupal\redouane\Controller\red.
 */

namespace Drupal\redouane\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class red.
 *
 * @package Drupal\redouane\Controller
 */
class red extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: hello with parameter(s): !name', [
        '!name' => '$name',
      ]),
    ];
  }

}
