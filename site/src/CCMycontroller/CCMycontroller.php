<?php
/**
<<<<<<< HEAD
 * Sample controller for a site builder.
 */
class CCMycontroller extends CObject implements IController {

  /**
   * Constructor
   */
=======
* Sample controller for a site builder.
*/
class CCMycontroller extends CObject implements IController {

  /**
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct() { parent::__construct(); }
  

  /**
<<<<<<< HEAD
   * The page about me
   */
=======
* The page about me
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    $content = new CMContent(5);
    $this->views->SetTitle('About me'.htmlEnt($content['title']))
                ->AddInclude(__DIR__ . '/page.tpl.php', array(
                  'content' => $content,
                ));
  }


  /**
<<<<<<< HEAD
   * The blog.
   */
=======
* The blog.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Blog() {
    $content = new CMContent();
    $this->views->SetTitle('My blog')
                ->AddInclude(__DIR__ . '/blog.tpl.php', array(
                  'contents' => $content->ListAll(array('type'=>'post', 'order-by'=>'title', 'order-order'=>'DESC')),
                ));
  }


  /**
<<<<<<< HEAD
   * The guestbook.
   */
=======
* The guestbook.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Guestbook() {
    $guestbook = new CMGuestbook();
    $form = new CFormMyGuestbook($guestbook);
    $status = $form->Check();
    if($status === false) {
      $this->AddMessage('notice', 'The form could not be processed.');
      $this->RedirectToControllerMethod();
    } else if($status === true) {
      $this->RedirectToControllerMethod();
    }
    
    $this->views->SetTitle('My Guestbook')
         ->AddInclude(__DIR__ . '/guestbook.tpl.php', array(
<<<<<<< HEAD
            'entries'=>$guestbook->ReadAll(), 
=======
            'entries'=>$guestbook->ReadAll(),
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
            'form'=>$form,
         ));
  }
  

<<<<<<< HEAD
} 


/**
 * Form for the guestbook
 */
class CFormMyGuestbook extends CForm {

  /**
   * Properties
   */
  private $object;

  /**
   * Constructor
   */
=======
}


/**
* Form for the guestbook
*/
class CFormMyGuestbook extends CForm {

  /**
* Properties
*/
  private $object;

  /**
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($object) {
    parent::__construct();
    $this->objecyt = $object;
    $this->AddElement(new CFormElementTextarea('data', array('label'=>'Add entry:')))
         ->AddElement(new CFormElementSubmit('add', array('callback'=>array($this, 'DoAdd'), 'callback-args'=>array($object))));
  }
  

  /**
<<<<<<< HEAD
   * Callback to add the form content to database.
   */
=======
* Callback to add the form content to database.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function DoAdd($form, $object) {
    return $object->Add(strip_tags($form['data']['value']));
  }
 
 
}
<<<<<<< HEAD
=======

>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
