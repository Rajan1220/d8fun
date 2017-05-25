<?php
/**
 * @file
 * Contains \Drupal\yourmodule\Plugin\Block\YourBlockName.
 */
namespace Drupal\leap_year\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides custom Leap Year block.
 *
 * @Block(
 *   id = "leap_year",
 *   admin_label = @Translation("Leap Year Block"),
 *   category = @Translation("Blocks")
 * )
 */
class CustomLeapYear extends BlockBase {
  
/**
   * {@inheritdoc}
   */
  public function build() {
    return array('#markup' => 'testing block skelton');
  }
}