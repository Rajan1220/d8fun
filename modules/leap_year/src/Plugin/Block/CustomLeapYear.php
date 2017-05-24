<?php
/**
 * @file
 * Contains \Drupal\yourmodule\Plugin\Block\YourBlockName.
 */
namespace Drupal\leap_year\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides my custom block.
 *
 * @Block(
 *   id = "my_custom_block",
 *   admin_label = @Translation("My Custom Block"),
 *   category = @Translation("Blocks")
 * )
 */
class CustomLeapYear extends BlockBase {
  
/**
   * {@inheritdoc}
   */
  public function build() {
    return array('#markup' => 'first block');
  }
}