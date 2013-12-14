<?php
/**
<<<<<<< HEAD
 * A user controller  to manage login and view edit the user profile.
 * 
 * @package MiniCore
 */
=======
* A user controller to manage login and view edit the user profile.
*
* @package MiniCore
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
class CCUser extends CObject implements IController {


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
  public function Index() {
    $this->views->SetTitle('User Controller')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'is_authenticated'=>$this->user['isAuthenticated'], 
=======
* Show profile information of the user.
*/
  public function Index() {
    $this->views->SetTitle('User Controller')
                ->AddInclude(__DIR__ . '/index.tpl.php', array(
                  'is_authenticated'=>$this->user['isAuthenticated'],
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
                  'user'=>$this->user,
                ));
  }
  

  /**
<<<<<<< HEAD
   * View and edit user profile.
   */
  public function Profile() {    
=======
* View and edit user profile.
*/
  public function Profile() {
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $form = new CFormUserProfile($this, $this->user);
    if($form->Check() === false) {
      $this->AddMessage('notice', 'Some fields did not validate and the form could not be processed.');
      $this->RedirectToController('profile');
    }

    $this->views->SetTitle('User Profile')
                ->AddInclude(__DIR__ . '/profile.tpl.php', array(
<<<<<<< HEAD
                  'is_authenticated'=>$this->user['isAuthenticated'], 
=======
                  'is_authenticated'=>$this->user['isAuthenticated'],
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
                  'user'=>$this->user,
                  'profile_form'=>$form->GetHTML(),
                ));
  }
  

  /**
<<<<<<< HEAD
   * Change the password.
   */
=======
* Change the password.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function DoChangePassword($form) {
    if($form['password']['value'] != $form['password1']['value'] || empty($form['password']['value']) || empty($form['password1']['value'])) {
      $this->AddMessage('error', 'Password does not match or is empty.');
    } else {
      $ret = $this->user->ChangePassword($form['password']['value']);
      $this->AddMessage($ret, 'Saved new password.', 'Failed updating password.');
    }
    $this->RedirectToController('profile');
  }
  

  /**
<<<<<<< HEAD
   * Save updates to profile information.
   */
=======
* Save updates to profile information.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function DoProfileSave($form) {
    $this->user['name'] = $form['name']['value'];
    $this->user['email'] = $form['email']['value'];
    $ret = $this->user->Save();
    $this->AddMessage($ret, 'Saved profile.', 'Failed saving profile.');
    $this->RedirectToController('profile');
  }
  

  /**
<<<<<<< HEAD
   * Authenticate and login a user.
   */
=======
* Authenticate and login a user.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Login() {
    $form = new CFormUserLogin($this);
    if($form->Check() === false) {
      $this->AddMessage('notice', 'You must fill in acronym and password.');
      $this->RedirectToController('login');
    }
    $this->views->SetTitle('Login')
                ->AddInclude(__DIR__ . '/login.tpl.php', array(
                  'login_form' => $form,
                  'allow_create_user' => CMini::Instance()->config['create_new_users'],
                  'create_user_url' => $this->CreateUrl(null, 'create'),
                ));
  }
<<<<<<< HEAD

  

  /**
   * Perform a login of the user as callback on a submitted form.
   */
=======
  

  /**
* Perform a login of the user as callback on a submitted form.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function DoLogin($form) {
    if($this->user->Login($form['acronym']['value'], $form['password']['value'])) {
      $this->AddMessage('success', "Welcome {$this->user['name']}.");
      $this->RedirectToController('profile');
    } else {
      $this->AddMessage('notice', "Failed to login, user does not exist or password does not match.");
<<<<<<< HEAD
      $this->RedirectToController('login');      
=======
      $this->RedirectToController('login');
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    }
  }
  

  /**
<<<<<<< HEAD
   * Logout a user.
   */
=======
* Logout a user.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Logout() {
    $this->user->Logout();
    $this->RedirectToController('login');
  }
  
<<<<<<< HEAD
  /**
   * Create a new user.
   */
=======

  /**
* Create a new user.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Create() {
    $form = new CFormUserCreate($this);
    if($form->Check() === false) {
      $this->AddMessage('notice', 'You must fill in all values.');
      $this->RedirectToController('Create');
    }
    $this->views->SetTitle('Create user')
<<<<<<< HEAD
                ->AddInclude(__DIR__ . '/create.tpl.php', array('form' => $form->GetHTML()));     
  }

  
   /**
   * Perform a creation of a user as callback on a submitted form.
   *
   * @param $form CForm the form that was submitted
   */
  public function DoCreate($form) {    
    if($form['password']['value'] != $form['password1']['value'] || empty($form['password']['value']) || empty($form['password1']['value'])) {
      $this->AddMessage('error', 'Password does not match or is empty.');
      $this->RedirectToController('create');
    } else if($this->user->Create($form['acronym']['value'], 
=======
                ->AddInclude(__DIR__ . '/create.tpl.php', array('form' => $form->GetHTML()));
  }
  

  /**
* Perform a creation of a user as callback on a submitted form.
*
* @param $form CForm the form that was submitted
*/
  public function DoCreate($form) {
    if($form['password']['value'] != $form['password1']['value'] || empty($form['password']['value']) || empty($form['password1']['value'])) {
      $this->AddMessage('error', 'Password does not match or is empty.');
      $this->RedirectToController('create');
    } else if($this->user->Create($form['acronym']['value'],
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
                           $form['password']['value'],
                           $form['name']['value'],
                           $form['email']['value']
                           )) {
      $this->AddMessage('success', "Welcome {$this->user['name']}. Your have successfully created a new account.");
      $this->user->Login($form['acronym']['value'], $form['password']['value']);
      $this->RedirectToController('profile');
    } else {
      $this->AddMessage('notice', "Failed to create an account.");
      $this->RedirectToController('create');
    }
  }
<<<<<<< HEAD

  

  /**
   * Init the user database.
   */
=======
  

  /**
* Init the user database.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Init() {
    $this->user->Init();
    $this->RedirectToController();
  }
  

} 
