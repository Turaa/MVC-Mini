<?php
/**
<<<<<<< HEAD
 * Admin Control Panel to manage admin stuff.
 * 
 * @package MiniCore
 */
=======
* Admin Control Panel to manage admin stuff.
*
* @package MiniCore
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
class CCAdminControlPanel extends CObject implements IController {


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
   * Show profile information of the user.
   */
=======
* Show profile information of the user.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    $this->views->SetTitle('ACP: Admin Control Panel');
    $this->views->AddInclude(__DIR__ . '/index.tpl.php');
  }
 

<<<<<<< HEAD
} 
=======
} 
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
