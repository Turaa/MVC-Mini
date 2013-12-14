<?php
/**
* A user controller to manage content.
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CCContent extends CObject implements IController {


  /**
<<<<<<< HEAD
   * Constructor
   */
=======
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct() { parent::__construct(); }


  /**
<<<<<<< HEAD
   * Show a listing of all content.
   */
=======
* Show a listing of all content.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    $content = new CMContent();
    $this->views->SetTitle('Content Controller')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'contents' => $content->ListAll(),
                ));
  }
  

  /**
<<<<<<< HEAD
   * Edit a selected content, or prepare to create new content if argument is missing.
   *
   * @param id integer the id of the content.
   */
=======
* Edit a selected content, or prepare to create new content if argument is missing.
*
* @param id integer the id of the content.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Edit($id=null) {
    $content = new CMContent($id);
    $form = new CFormContent($content);
    $status = $form->Check();
    if($status === false) {
      $this->AddMessage('notice', 'The form could not be processed.');
      $this->RedirectToController('edit', $id);
    } else if($status === true) {
      $this->RedirectToController('edit', $content['id']);
    }
    
    $title = isset($id) ? 'Edit' : 'Create';
<<<<<<< HEAD
    $this->views->SetTitle("$title content: $id")
                ->AddInclude(__DIR__ . '/edit.tpl.php', array(
                  'user'=>$this->user, 
                  'content'=>$content, 
=======
    $this->views->SetTitle("$title content: ".htmlEnt($content['title']))
                ->AddInclude(__DIR__ . '/edit.tpl.php', array(
                  'user'=>$this->user,
                  'content'=>$content,
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
                  'form'=>$form,
                ));
  }
  

  /**
<<<<<<< HEAD
   * Create new content.
   */
=======
* Create new content.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Create() {
    $this->Edit();
  }


  /**
<<<<<<< HEAD
   * Init the content database.
   */
=======
* Init the content database.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Init() {
    $content = new CMContent();
    $content->Init();
    $this->RedirectToController();
  }
  

<<<<<<< HEAD
}
=======
} 
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
