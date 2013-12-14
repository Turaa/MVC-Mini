<?php
/**
* A wrapper for HTMLPurifier by Edward Z. Yang, http://htmlpurifier.org/
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CHTMLPurifier {

  /**
<<<<<<< HEAD
   * Properties
   */
=======
* Properties
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public static $instance = null;


  /**
<<<<<<< HEAD
   * Purify it. Create an instance of HTMLPurifier if it does not exists. 
   *
   * @param $text string the dirty HTML.
   * @returns string as the clean HTML.
   */
   public static function Purify($text) {   
    if(!self::$instance) {
      require_once(__DIR__.'/htmlpurifier-4.4.0-standalone/HTMLPurifier.standalone.php');
=======
* Purify it. Create an instance of HTMLPurifier if it does not exists.
*
* @param $text string the dirty HTML.
* @returns string as the clean HTML.
*/
   public static function Purify($text) {
    if(!self::$instance) {
      require_once(__DIR__.'/htmlpurifier-4.5.0-standalone/HTMLPurifier.standalone.php');
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
      $config = HTMLPurifier_Config::createDefault();
      $config->set('Cache.DefinitionImpl', null);
      self::$instance = new HTMLPurifier($config);
    }
    return self::$instance->purify($text);
  }
  
  
<<<<<<< HEAD
}
=======
}
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
