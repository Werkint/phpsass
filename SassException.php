<?php
/* SVN FILE: $Id$ */
/**
 * Sass exception.
 * @author      Chris Yates <chris.l.yates@gmail.com>
 * @copyright   Copyright (c) 2010 PBM Web Development
 * @license      http://phamlp.googlecode.com/files/license.txt
 * @package      PHamlP
 * @subpackage  Sass
 */

/**
 * Sass exception class.
 * @package      PHamlP
 * @subpackage  Sass
 */
class SassException extends Exception {
  /**
   * Sass Exception.
   * @param string Exception message
   * @param array parameters to be applied to the message using <code>strtr</code>.
   * @param object object with source code and meta data
   */
  public function __construct($message, $object) {
      if(is_object($object)) {
          if(is_string($object->filename)) {
              $message .= ": {$object->filename}::{$object->line}\n";
          }
          $message .= 'Source: '.$object->source;
      }
      parent::__construct($message);
  }
}
