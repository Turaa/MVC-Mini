<?php
/**
<<<<<<< HEAD
 * A guestbook controller as an example to show off some basic controller and model-stuff.
 * 
 * @package MiniCore
 */
=======
* A guestbook controller as an example to show off some basic controller and model-stuff.
*
* @package MiniCore
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
class CCGuestbook extends CObject implements IController {

  private $guestbookModel;
  

  /**
<<<<<<< HEAD
   * Constructor
   */
=======
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct() {
    parent::__construct();
    $this->guestbookModel = new CMGuestbook();
  }


  /**
<<<<<<< HEAD
   * Implementing interface IController. All controllers must have an index action.
   * Show a standard frontpage for the guestbook.
   */
  public function Index() {
    $this->views->SetTitle('Mini Guestbook Example');
    $this->views->AddInclude(__DIR__ . '/index.tpl.php', array(
      'entries'=>$this->guestbookModel->ReadAll(), 
=======
* Implementing interface IController. All controllers must have an index action.
* Show a standard frontpage for the guestbook.
*/
  public function Index() {
    $this->views->SetTitle('Mini Guestbook Example');
    $this->views->AddInclude(__DIR__ . '/index.tpl.php', array(
      'entries'=>$this->guestbookModel->ReadAll(),
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
      'form_action'=>$this->request->CreateUrl('', 'handler')
    ));
  }
  

  /**
<<<<<<< HEAD
   * Handle posts from the form and take appropriate action.
   */
=======
* Handle posts from the form and take appropriate action.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Handler() {
    if(isset($_POST['doAdd'])) {
      $this->guestbookModel->Add(strip_tags($_POST['newEntry']));
    }
    elseif(isset($_POST['doClear'])) {
      $this->guestbookModel->DeleteAll();
    }
    elseif(isset($_POST['doCreate'])) {
      $this->guestbookModel->Init();
<<<<<<< HEAD
    }            
=======
    }
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $this->RedirectTo($this->request->CreateUrl($this->request->controller));
  }
  

<<<<<<< HEAD
} 
=======
} 
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
