<?php

/**
 * @file
 * Contains Drupal\profile2\ProfileTypeListController.
 */

namespace Drupal\profile2;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListController;

/**
 * List controller for profile types.
 */
class ProfileTypeListController extends EntityListController {

  /**
   * Overrides EntityListController::getOperations().
   */
  public function getOperations(EntityInterface $entity) {
    $operations = parent::getOperations($entity);
    if (module_exists('field_ui')) {
      $uri = $entity->uri();
      $operations['manage-fields'] = array(
        'title' => t('Manage fields'),
        'href' => $uri['path'] . '/fields',
        'options' => $uri['options'],
        'weight' => 11,
      );
      $operations['manage-display'] = array(
        'title' => t('Manage display'),
        'href' => $uri['path'] . '/display',
        'options' => $uri['options'],
        'weight' => 12,
      );
    }
    return $operations;
  }

}