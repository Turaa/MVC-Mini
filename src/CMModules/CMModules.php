<?php
/**
<<<<<<< HEAD
 * A model for managing Mini modules.
 * 
 * @package MiniCore
 */
class CMModules extends CObject {


/**
   * Properties
   */
  private $miniCoreModules = array('CMini', 'CDatabase', 'CRequest', 'CViewContainer', 'CSession', 'CObject');
  private $miniCMFModules = array('CForm', 'CCPage', 'CCBlog', 'CMUser', 'CCUser', 'CMContent', 'CCContent', 'CFormUserLogin', 'CFormUserProfile', 'CFormUserCreate', 'CFormContent', 'CHTMLPurifier');	
	

  /**
   * Constructor
   */
=======
* A model for managing Mini modules.
*
* @package MiniCore
*/
class CMModules extends CObject {

  /**
* Properties
*/
  private $miniCoreModules = array('CMini', 'CDatabase', 'CRequest', 'CViewContainer', 'CSession', 'CObject');
  private $miniCMFModules = array('CForm', 'CCPage', 'CCBlog', 'CMUser', 'CCUser', 'CMContent', 'CCContent', 'CFormUserLogin', 'CFormUserProfile', 'CFormUserCreate', 'CFormContent', 'CHTMLPurifier');


  /**
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct() { parent::__construct(); }


  /**
<<<<<<< HEAD
   * A list of all available controllers/methods
   *
   * @returns array list of controllers (key) and an array of methods
   */
  public function AvailableControllers() {	
=======
* A list of all available controllers/methods
*
* @returns array list of controllers (key) and an array of methods
*/
  public function AvailableControllers() {        
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $controllers = array();
    foreach($this->config['controllers'] as $key => $val) {
      if($val['enabled']) {
        $rc = new ReflectionClass($val['class']);
        $controllers[$key] = array();
        $methods = $rc->getMethods(ReflectionMethod::IS_PUBLIC);
        foreach($methods as $method) {
          if($method->name != '__construct' && $method->name != '__destruct' && $method->name != 'Index') {
            $methodName = mb_strtolower($method->name);
            $controllers[$key][] = $methodName;
          }
        }
        sort($controllers[$key], SORT_LOCALE_STRING);
      }
    }
    ksort($controllers, SORT_LOCALE_STRING);
    return $controllers;
  }


  /**
<<<<<<< HEAD
   * Read and analyse all modules.
   *
   * @returns array with a entry for each module with the module name as the key. 
   *                Returns boolean false if $src can not be opened.
   */
=======
* Read and analyse all modules.
*
* @returns array with a entry for each module with the module name as the key.
* Returns boolean false if $src can not be opened.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function ReadAndAnalyse() {
    $src = MINI_INSTALL_PATH.'/src';
    if(!$dir = dir($src)) throw new Exception('Could not open the directory.');
    $modules = array();
    while (($module = $dir->read()) !== false) {
<<<<<<< HEAD
      if(is_dir("$src/$module")) {
        if(class_exists($module)) {
          $rc = new ReflectionClass($module);
          $modules[$module]['name']          = $rc->name;
          $modules[$module]['interface']     = $rc->getInterfaceNames();
          $modules[$module]['isController']  = $rc->implementsInterface('IController');
          $modules[$module]['isModel']       = preg_match('/^CM[A-Z]/', $rc->name);
          $modules[$module]['hasSQL']        = $rc->implementsInterface('IHasSQL');
          $modules[$module]['isManageable']  = $rc->implementsInterface('IModule');
          $modules[$module]['isMiniCore']   = in_array($rc->name, array('CMini', 'CDatabase', 'CRequest', 'CViewContainer', 'CSession', 'CObject'));
          $modules[$module]['isMiniCMF']    = in_array($rc->name, array('CForm', 'CCPage', 'CCBlog', 'CMUser', 'CCUser', 'CMContent', 'CCContent', 'CFormUserLogin', 'CFormUserProfile', 'CFormUserCreate', 'CFormContent', 'CHTMLPurifier'));
        }
=======
      if(is_dir("$src/$module") && class_exists($module)) {
        $modules[$module] = $this->GetDetailsOfModule($module);
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
      }
    }
    $dir->close();
    ksort($modules, SORT_LOCALE_STRING);
    return $modules;
  }
  
<<<<<<< HEAD
   /**
   * Get info and details about a module.
   *
   * @param $module string with the module name.
   * @returns array with information on the module.
   */
=======

  /**
* Get info and details about a module.
*
* @param $module string with the module name.
* @returns array with information on the module.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  private function GetDetailsOfModule($module) {
    $details = array();
    if(class_exists($module)) {
      $rc = new ReflectionClass($module);
<<<<<<< HEAD
      $details['name']          = $rc->name;
      $details['filename']      = $rc->getFileName();
      $details['doccomment']    = $rc->getDocComment();
      $details['interface']     = $rc->getInterfaceNames();
      $details['isController']  = $rc->implementsInterface('IController');
      $details['isModel']       = preg_match('/^CM[A-Z]/', $rc->name);
      $details['hasSQL']        = $rc->implementsInterface('IHasSQL');
      $details['isManageable']  = $rc->implementsInterface('IModule');
      $details['isMiniCore']   = in_array($rc->name, $this->miniCoreModules);
      $details['isMiniCMF']    = in_array($rc->name, $this->miniCMFModules);
      $details['publicMethods']     = $rc->getMethods(ReflectionMethod::IS_PUBLIC);
      $details['protectedMethods']  = $rc->getMethods(ReflectionMethod::IS_PROTECTED);
      $details['privateMethods']    = $rc->getMethods(ReflectionMethod::IS_PRIVATE);
      $details['staticMethods']     = $rc->getMethods(ReflectionMethod::IS_STATIC);
    }
    return $details;
  }

  /**
   * Get info and details about the methods of a module.
   *
   * @param $module string with the module name.
   * @returns array with information on the methods.
   */
=======
      $details['name'] = $rc->name;
      $details['filename'] = $rc->getFileName();
      $details['doccomment'] = $rc->getDocComment();
      $details['interface'] = $rc->getInterfaceNames();
      $details['isController'] = $rc->implementsInterface('IController');
      $details['isModel'] = preg_match('/^CM[A-Z]/', $rc->name);
      $details['hasSQL'] = $rc->implementsInterface('IHasSQL');
      $details['isManageable'] = $rc->implementsInterface('IModule');
      $details['isMiniCore'] = in_array($rc->name, $this->miniCoreModules);
      $details['isMiniCMF'] = in_array($rc->name, $this->miniCMFModules);
      $details['publicMethods'] = $rc->getMethods(ReflectionMethod::IS_PUBLIC);
      $details['protectedMethods'] = $rc->getMethods(ReflectionMethod::IS_PROTECTED);
      $details['privateMethods'] = $rc->getMethods(ReflectionMethod::IS_PRIVATE);
      $details['staticMethods'] = $rc->getMethods(ReflectionMethod::IS_STATIC);
    }
    return $details;
  }
  

  /**
* Get info and details about the methods of a module.
*
* @param $module string with the module name.
* @returns array with information on the methods.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  private function GetDetailsOfModuleMethods($module) {
    $methods = array();
    if(class_exists($module)) {
      $rc = new ReflectionClass($module);
      $classMethods = $rc->getMethods();
      foreach($classMethods as $val) {
        $methodName = $val->name;
        $rm = $rc->GetMethod($methodName);
<<<<<<< HEAD
        $methods[$methodName]['name']          = $rm->getName();
        $methods[$methodName]['doccomment']    = $rm->getDocComment();
        $methods[$methodName]['startline']     = $rm->getStartLine();
        $methods[$methodName]['endline']       = $rm->getEndLine();
        $methods[$methodName]['isPublic']      = $rm->isPublic();
        $methods[$methodName]['isProtected']   = $rm->isProtected();
        $methods[$methodName]['isPrivate']     = $rm->isPrivate();
        $methods[$methodName]['isStatic']      = $rm->isStatic();
=======
        $methods[$methodName]['name'] = $rm->getName();
        $methods[$methodName]['doccomment'] = $rm->getDocComment();
        $methods[$methodName]['startline'] = $rm->getStartLine();
        $methods[$methodName]['endline'] = $rm->getEndLine();
        $methods[$methodName]['isPublic'] = $rm->isPublic();
        $methods[$methodName]['isProtected'] = $rm->isProtected();
        $methods[$methodName]['isPrivate'] = $rm->isPrivate();
        $methods[$methodName]['isStatic'] = $rm->isStatic();
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
      }
    }
    ksort($methods, SORT_LOCALE_STRING);
    return $methods;
  }
<<<<<<< HEAD

   /**
   * Get info and details about a module.
   *
   * @param $module string with the module name.
   * @returns array with information on the module.
   */
=======
  

  /**
* Get info and details about a module.
*
* @param $module string with the module name.
* @returns array with information on the module.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function ReadAndAnalyseModule($module) {
    $details = $this->GetDetailsOfModule($module);
    $details['methods'] = $this->GetDetailsOfModuleMethods($module);
    return $details;
  }
  
<<<<<<< HEAD
  
   /**
   * Install all modules.
   *
   * @returns array with a entry for each module and the result from installing it.
   */
=======

  /**
* Install all modules.
*
* @returns array with a entry for each module and the result from installing it.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Install() {
    $allModules = $this->ReadAndAnalyse();
    uksort($allModules, function($a, $b) {
        return ($a == 'CMUser' ? -1 : ($b == 'CMUser' ? 1 : 0));
      }
    );
    $installed = array();
    foreach($allModules as $module) {
      if($module['isManageable']) {
        $classname = $module['name'];
        $rc = new ReflectionClass($classname);
        $obj = $rc->newInstance();
        $method = $rc->getMethod('Manage');
<<<<<<< HEAD
        $installed[$classname]['name']    = $classname;
        $installed[$classname]['result']  = $method->invoke($obj, 'install');
=======
        $installed[$classname]['name'] = $classname;
        $installed[$classname]['result'] = $method->invoke($obj, 'install');
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
      }
    }
    //ksort($installed, SORT_LOCALE_STRING);
    return $installed;
  }


}
