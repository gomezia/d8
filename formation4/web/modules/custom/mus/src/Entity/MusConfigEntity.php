<?php

/**
 * @file
 * Contains \Drupal\mus\Entity\MusConfigEntity.
 */

namespace Drupal\mus\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\mus\MusConfigEntityInterface;

/**
 * Defines the Mus config entity entity.
 *
 * @ConfigEntityType(
 *   id = "mus_config_entity",
 *   label = @Translation("Mus config entity"),
 *   handlers = {
 *     "list_builder" = "Drupal\mus\MusConfigEntityListBuilder",
 *     "form" = {
 *       "add" = "Drupal\mus\Form\MusConfigEntityForm",
 *       "edit" = "Drupal\mus\Form\MusConfigEntityForm",
 *       "delete" = "Drupal\mus\Form\MusConfigEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\mus\MusConfigEntityHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "mus_config_entity",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/mus_config_entity/{mus_config_entity}",
 *     "add-form" = "/admin/structure/mus_config_entity/add",
 *     "edit-form" = "/admin/structure/mus_config_entity/{mus_config_entity}/edit",
 *     "delete-form" = "/admin/structure/mus_config_entity/{mus_config_entity}/delete",
 *     "collection" = "/admin/structure/mus_config_entity"
 *   }
 * )
 */
class MusConfigEntity extends ConfigEntityBase implements MusConfigEntityInterface {
  /**
   * The Mus config entity ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Mus config entity label.
   *
   * @var string
   */
  protected $label;

}
