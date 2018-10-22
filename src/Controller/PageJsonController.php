<?php

namespace Drupal\page_json\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * This is page json controller.
 */
class PageJsonController extends ControllerBase {

  /**
   * Additional Submit for site settings form.
   *
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */

  public static function page_json_form_submit(&$form, FormStateInterface $form_state) {

    $site_api_key = \Drupal::config('system.site')->get('api_key');

    if(!empty($site_api_key)) {

      \Drupal::configFactory()
        ->getEditable('system.site')
        ->set('api_key', $site_api_key)
        ->save();

    }
  }
}
