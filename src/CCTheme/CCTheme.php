<?php
/**
* A test controller for themes.
<<<<<<< HEAD
* 
=======
*
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* @package MiniCore
*/
class CCTheme extends CObject implements IController {


<<<<<<< HEAD
   /**
   * Constructor
   */
  public function __construct() { parent::__construct(); 
=======
  /**
* Constructor
*/
  public function __construct() { parent::__construct();
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $this->views->AddStyle('body:hover{background:#fff url('.$this->request->base_url.'themes/grid/grid_12_60_20.png) repeat-y center top;}');
  }


  /**
<<<<<<< HEAD
   * Display what can be done with this controller.
   */
=======
* Display what can be done with this controller.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Index() {
    // Get a list of all kontroller methods
    $rc = new ReflectionClass(__CLASS__);
    $methods = $rc->getMethods(ReflectionMethod::IS_PUBLIC);
    $items = array();
    foreach($methods as $method) {
      if($method->name != '__construct' && $method->name != '__destruct' && $method->name != 'Index') {
        $items[] = $this->request->controller . '/' . mb_strtolower($method->name);
      }
   }

    $this->views->SetTitle('Theme')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'theme_name' => $this->config['theme']['name'],
                  'methods' => $items,
                ));
  }
<<<<<<< HEAD
  
    /**
   * Put content in some regions.
   */
=======


  /**
* Put content in some regions.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function SomeRegions() {
    $this->views->SetTitle('Theme display content for some regions')
                ->AddString('This is the primary region', array(), 'primary');
                
    if(func_num_args()) {
      foreach(func_get_args() as $val) {
        $this->views->AddString("This is region: $val", array(), $val)
                    ->AddStyle('#'.$val.'{background-color:hsla(0,0%,90%,0.5);}');
      }
    }
  }
<<<<<<< HEAD
  
   /**
   * Put content in all regions.
   */
=======


  /**
* Put content in all regions.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function AllRegions() {
    $this->views->SetTitle('Theme display content for all regions');
    foreach($this->config['theme']['regions'] as $val) {
      $this->views->AddString("This is region: $val", array(), $val)
                  ->AddStyle('#'.$val.'{background-color:hsla(0,0%,90%,0.5);}');
    }
  }
<<<<<<< HEAD
  
  /**
   * Display text as h1h6 and paragraphs with some inline formatting.
   */
=======


  /**
* Display text as h1h6 and paragraphs with some inline formatting.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function H1H6() {
    $this->views->SetTitle('Theme testing headers and paragraphs')
                ->AddInclude(__DIR__ . '/h1h6.tpl.php', array(), 'primary');
  }


}
