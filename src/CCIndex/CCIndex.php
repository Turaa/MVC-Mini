<?php
/**
<<<<<<< HEAD
 * Standard controller layout.
 * 
 * @package MiniCore
 */
class CCIndex extends CObject implements IController {

  /**
   * Constructor
   */
=======
* Standard controller layout.
*
* @package MiniCore
*/
class CCIndex extends CObject implements IController {

  /**
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct() { parent::__construct(); }
  

  /**
<<<<<<< HEAD
   * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {			
=======
* Implementing interface IController. All controllers must have an index action.
*/
  public function Index() {                        
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $modules = new CMModules();
    $controllers = $modules->AvailableControllers();
    $this->views->SetTitle('Index')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(), 'primary')
                ->AddInclude(__DIR__ . '/sidebar.tpl.php', array('controllers'=>$controllers), 'sidebar');
  }


<<<<<<< HEAD
} 
=======
}
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
