<?php

/**
 * @file
 * Contains \Drupal\profile\ProfileViewsData.
 */

namespace Drupal\profile;

use Drupal\views\EntityViewsData;
/**
 * Provides the views data for the node entity type.
 */
class ProfileViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['profile']['label'] = array(
      'title' => t('Label'),
      'help' => t('The label of the profile item.'),
      'field' => array(
        'id' => 'profile_label',
      ),
    );

    $data['profile']['view_profile'] = array(
      'field' => array(
        'title' => t('Link to profile'),
        'help' => t('Provide a simple link to the profile.'),
        'id' => 'profile_link',
      ),
    );

    $data['profile']['edit_profile'] = array(
      'field' => array(
        'title' => t('Link to edit profile'),
        'help' => t('Provide a simple link to edit the profile.'),
        'id' => 'profile_link_edit',
      ),
    );

    $data['profile']['delete_profile'] = array(
      'field' => array(
        'title' => t('Link to delete profile'),
        'help' => t('Provide a simple link to delete the profile.'),
        'id' => 'profile_link_delete',
      ),
    );

    $data['profile']['profile_bulk_form'] = array(
      'title' => t('Profile operations bulk form'),
      'help' => t('Add a form element that lets you run operations on multiple profiles.'),
      'field' => array(
        'id' => 'profile_bulk_form',
      ),
    );

    return $data;
  }

}
