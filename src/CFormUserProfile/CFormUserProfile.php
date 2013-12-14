<?php
/**
<<<<<<< HEAD
 * A form for editing the user profile.
 * 
 * @package MiniCore
 */
class CFormUserProfile extends CForm {

  /**
   * Constructor
   */
=======
* A form for editing the user profile.
*
* @package MiniCore
*/
class CFormUserProfile extends CForm {

  /**
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($object, $user) {
    parent::__construct();
    $this->AddElement(new CFormElementText('acronym', array('readonly'=>true, 'value'=>$user['acronym'])))
         ->AddElement(new CFormElementPassword('password'))
         ->AddElement(new CFormElementPassword('password1', array('label'=>'Password again:')))
         ->AddElement(new CFormElementSubmit('change_password', array('callback'=>array($object, 'DoChangePassword'))))
         ->AddElement(new CFormElementText('name', array('value'=>$user['name'], 'required'=>true)))
         ->AddElement(new CFormElementText('email', array('value'=>$user['email'], 'required'=>true)))
         ->AddElement(new CFormElementSubmit('save', array('callback'=>array($object, 'DoProfileSave'))));
         
    $this->SetValidation('name', array('not_empty'))
         ->SetValidation('email', array('not_empty'));
  }
  
}
