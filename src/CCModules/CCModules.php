<?php
/**
* To manage and analyse all modules of Mini.
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CCModules extends CObject implements IController {

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
   * Show a index-page and display what can be done through this controller.
   */
=======
* Show a index-page and display what can be done through this controller.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    $modules = new CMModules();
    $controllers = $modules->AvailableControllers();
    $allModules = $modules->ReadAndAnalyse();
    $this->views->SetTitle('Manage Modules')
                ->AddInclude(__DIR__ . '/index.tpl.php', array('controllers'=>$controllers), 'primary')
                ->AddInclude(__DIR__ . '/sidebar.tpl.php', array('modules'=>$allModules), 'sidebar');
  }

<<<<<<< HEAD
  /**
   * Show a index-page and display what can be done through this controller.
   */
=======

  /**
* Show a index-page and display what can be done through this controller.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Install() {
    $modules = new CMModules();
    $results = $modules->Install();
    $allModules = $modules->ReadAndAnalyse();
    $this->views->SetTitle('Install Modules')
                ->AddInclude(__DIR__ . '/install.tpl.php', array('modules'=>$results), 'primary')
                ->AddInclude(__DIR__ . '/sidebar.tpl.php', array('modules'=>$allModules), 'sidebar');
  }

<<<<<<< HEAD
  /**
   * Show a module and its parts.
   */
=======

  /**
* Show a module and its parts.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function View($module) {
    if(!preg_match('/^C[a-zA-Z]+$/', $module)) {throw new Exception('Invalid characters in module name.');}
    $modules = new CMModules();
    $controllers = $modules->AvailableControllers();
    $allModules = $modules->ReadAndAnalyse();
    $aModule = $modules->ReadAndAnalyseModule($module);
    $this->views->SetTitle('Manage Modules')
                ->AddInclude(__DIR__ . '/view.tpl.php', array('module'=>$aModule), 'primary')
                ->AddInclude(__DIR__ . '/sidebar.tpl.php', array('modules'=>$allModules), 'sidebar');
  }


<<<<<<< HEAD
  
}
=======
}
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
