<?php
/**
<<<<<<< HEAD
 * A form to login the user profile.
 * 
 * @package MiniCore
 */
class CFormUserLogin extends CForm {

  /**
   * Constructor
   */
=======
* A form to login the user profile.
*
* @package MiniCore
*/
class CFormUserLogin extends CForm {

  /**
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($object) {
    parent::__construct();
    $this->AddElement(new CFormElementText('acronym'))
         ->AddElement(new CFormElementPassword('password'))
         ->AddElement(new CFormElementSubmit('login', array('callback'=>array($object, 'DoLogin'))));

    $this->SetValidation('acronym', array('not_empty'))
         ->SetValidation('password', array('not_empty'));
  }
  
<<<<<<< HEAD
}
=======
}
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
