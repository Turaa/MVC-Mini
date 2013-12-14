<?php
/**
<<<<<<< HEAD
* Holding a instance of CMini to enable use of $this in subclasses.
=======
* Holding a instance of CMini to enable use of $this in subclasses and provide some helpers.
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
*
* @package MiniCore
*/
class CObject {

<<<<<<< HEAD
   protected $mi;
   protected $config;
   protected $request;
   protected $data;
   protected $db;
   protected $views;
   protected $session;
   protected $user;

   /**
   * Constructor, can be instantiated by sending in the $mi reference.
   */
  protected function __construct($mi=null) {
    if(!$mi) {
      $mi = CMini::Instance();
    } 
    $this->mi       = &$mi;
    $this->config   = &$mi->config;
    $this->request  = &$mi->request;
    $this->data     = &$mi->data;
    $this->db       = &$mi->db;
    $this->views    = &$mi->views;
    $this->session  = &$mi->session;
    $this->user     = &$mi->user;
  }
  
 /**
	 * Wrapper for same method in CMini. See there for documentation.
	 */
	protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
=======
        /**
         * Members
         */
        protected $mi;
        protected $config;
        protected $request;
        protected $data;
        protected $db;
        protected $views;
        protected $session;
        protected $user;


        /**
         * Constructor, can be instantiated by sending in the $mi reference.
         */
        protected function __construct($mi=null) {
         if(!$mi) {
         $mi = CMini::Instance();
         }
         $this->mi = &$mi;
    $this->config = &$mi->config;
    $this->request = &$mi->request;
    $this->data = &$mi->data;
    $this->db = &$mi->db;
    $this->views = &$mi->views;
    $this->session = &$mi->session;
    $this->user = &$mi->user;
        }


        /**
         * Wrapper for same method in CMini. See there for documentation.
         */
        protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $this->mi->RedirectTo($urlOrController, $method, $arguments);
  }


<<<<<<< HEAD
	/**
	 * Wrapper for same method in CMini. See there for documentation.
	 */
	protected function RedirectToController($method=null, $arguments=null) {
=======
        /**
         * Wrapper for same method in CMini. See there for documentation.
         */
        protected function RedirectToController($method=null, $arguments=null) {
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $this->mi->RedirectToController($method, $arguments);
  }


<<<<<<< HEAD
	/**
	 * Wrapper for same method in CMini. See there for documentation.
	 */
	protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
=======
        /**
         * Wrapper for same method in CMini. See there for documentation.
         */
        protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $this->mi->RedirectToControllerMethod($controller, $method, $arguments);
  }


<<<<<<< HEAD
	/**
	 * Wrapper for same method in CMini. See there for documentation.
	 */
=======
        /**
         * Wrapper for same method in CMini. See there for documentation.
         */
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->mi->AddMessage($type, $message, $alternative);
  }


<<<<<<< HEAD
	/**
	 * Wrapper for same method in CMini. See there for documentation.
	 */
	protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
=======
        /**
         * Wrapper for same method in CMini. See there for documentation.
         */
        protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    return $this->mi->CreateUrl($urlOrController, $method, $arguments);
  }


<<<<<<< HEAD

}
=======
}
  
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
