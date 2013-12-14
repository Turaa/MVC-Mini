<?php
/**
* A blog controller to display a blog-like list of all content labelled as "post".
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CCBlog extends CObject implements IController {


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
  }


  /**
<<<<<<< HEAD
   * Display all content of the type "post".
   */
=======
* Display all content of the type "post".
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    $content = new CMContent();
    $this->views->SetTitle('Blog')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'contents' => $content->ListAll(array('type'=>'post', 'order-by'=>'title', 'order-order'=>'DESC')),
                ));
  }


<<<<<<< HEAD
}
=======
} 
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
