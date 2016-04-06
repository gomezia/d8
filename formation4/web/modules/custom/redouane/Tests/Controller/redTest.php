<?php

/**
 * @file
 * Contains \Drupal\redouane\Tests\red.
 */

namespace Drupal\redouane\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the redouane module.
 */
class redTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "redouane red's controller functionality",
      'description' => 'Test Unit for module redouane and controller red.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests redouane functionality.
   */
  public function testred() {
    // Check that the basic functions of module redouane.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
