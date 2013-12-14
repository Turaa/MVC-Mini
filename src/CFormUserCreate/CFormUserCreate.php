<?php
/**
* A form for creating a new user.
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CFormUserCreate extends CForm {

  /**
<<<<<<< HEAD
   * Constructor
   */
=======
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($object) {
    parent::__construct();
    $this->AddElement(new CFormElementText('acronym', array('required'=>true)))
         ->AddElement(new CFormElementPassword('password', array('required'=>true)))
         ->AddElement(new CFormElementPassword('password1', array('required'=>true, 'label'=>'Password again:')))
         ->AddElement(new CFormElementText('name', array('required'=>true)))
         ->AddElement(new CFormElementText('email', array('required'=>true)))
         ->AddElement(new CFormElementSubmit('create', array('callback'=>array($object, 'DoCreate'))));
         
    $this->SetValidation('acronym', array('not_empty'))
         ->SetValidation('password', array('not_empty'))
         ->SetValidation('password1', array('not_empty'))
         ->SetValidation('name', array('not_empty'))
         ->SetValidation('email', array('not_empty'));
  }
  
}
