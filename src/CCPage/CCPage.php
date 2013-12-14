<?php
/**
* A page controller to display a page, for example an about-page, displays content labelled as "page".
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CCPage extends CObject implements IController {


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
   * Display an empty page.
   */
=======
* Display an empty page.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    $content = new CMContent();
    $this->views->SetTitle('Page')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'content' => null,
                ));
  }


  /**
<<<<<<< HEAD
   * Display a page.
   *
   * @param $id integer the id of the page.
   */
=======
* Display a page.
*
* @param $id integer the id of the page.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function View($id=null) {
    $content = new CMContent($id);
    $this->views->SetTitle('Page: '.htmlEnt($content['title']))
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'content' => $content,
                ));
  }


<<<<<<< HEAD
}
=======
} 
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
