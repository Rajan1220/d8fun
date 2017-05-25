<?php
/**
@file
Contains \Drupal\leap_year\Controller\LeapYearController.
*/

namespace Drupal\leap_year\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\Routing\RouteCollection;

class LeapYearController extends ControllerBase {
  public function content() {
  return array(
    '#type' => 'markup',
    '#markup' => t('Check for Leap Year.'),
  );
  }
}