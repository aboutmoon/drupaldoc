<?php

namespace Drupal\custom_filter\Plugin\Filter;

use Drupal\filter\Plugin\FilterBase;
use Drupal\filter\FilterProcessResult;

/**
 * Provides a filter for markdown.
 *
 * @Filter(
 *   id = "custom_filter",
 *   module = "custom_filter",
 *   title = @Translation("Custom Filter"),
 *   description = @Translation("Translate &lt;h1&gt; into &lt;h1=**&gt;"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE
 * )
 */
class CustomFilter extends FilterBase {
  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    return new FilterProcessResult(_filter_h1($text));
  }
}
