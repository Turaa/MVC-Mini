<?php
/**
<<<<<<< HEAD
 * A model for a guestbok, to show off some basic controller & model-stuff.
 * 
 * @package MiniCore
 */
=======
* A model for a guestbok, to show off some basic controller & model-stuff.
*
* @package MiniCore
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
class CMGuestbook extends CObject implements IHasSQL, IModule {


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
   * Implementing interface IHasSQL. Encapsulate all SQL used by this class.
   *
   * @param string $key the string that is the key of the wanted SQL-entry in the array.
   */
  public static function SQL($key=null) {
    $queries = array(
      'create table guestbook'  => "CREATE TABLE IF NOT EXISTS Guestbook (id INTEGER PRIMARY KEY, entry TEXT, created DATETIME default (datetime('now')));",
      'insert into guestbook'   => 'INSERT INTO Guestbook (entry) VALUES (?);',
      'select * from guestbook' => 'SELECT * FROM Guestbook ORDER BY id DESC;',
      'delete from guestbook'   => 'DELETE FROM Guestbook;',
=======
* Implementing interface IHasSQL. Encapsulate all SQL used by this class.
*
* @param string $key the string that is the key of the wanted SQL-entry in the array.
*/
  public static function SQL($key=null) {
    $queries = array(
      'create table guestbook' => "CREATE TABLE IF NOT EXISTS Guestbook (id INTEGER PRIMARY KEY, entry TEXT, created DATETIME default (datetime('now')));",
      'insert into guestbook' => 'INSERT INTO Guestbook (entry) VALUES (?);',
      'select * from guestbook' => 'SELECT * FROM Guestbook ORDER BY id DESC;',
      'delete from guestbook' => 'DELETE FROM Guestbook;',
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
     );
    if(!isset($queries[$key])) {
      throw new Exception("No such SQL query, key '$key' was not found.");
    }
    return $queries[$key];
  }


<<<<<<< HEAD
   /**
   * Implementing interface IModule. Manage install/update/deinstall and equal actions.
   */
  public function Manage($action=null) {
    switch($action) {
      case 'install': 
=======
  /**
* Implementing interface IModule. Manage install/update/deinstall and equal actions.
*/
  public function Manage($action=null) {
    switch($action) {
      case 'install':
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
        try {
          $this->db->ExecuteQuery(self::SQL('create table guestbook'));
          return array('success', 'Successfully created the database tables (or left them untouched if they already existed).');
        } catch(Exception$e) {
          die("$e<br/>Failed to open database: " . $this->config['database'][0]['dsn']);
        }
      break;
      
      default:
        throw new Exception('Unsupported action for this module.');
      break;
    }
  }
  

  /**
<<<<<<< HEAD
   * Add a new entry to the guestbook and save to database.
   */
=======
* Add a new entry to the guestbook and save to database.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Add($entry) {
    $this->db->ExecuteQuery(self::SQL('insert into guestbook'), array($entry));
    $this->session->AddMessage('success', 'Successfully inserted new message.');
    if($this->db->rowCount() != 1) {
      die('Failed to insert new guestbook item into database.');
    }
  }
  

  /**
<<<<<<< HEAD
   * Delete all entries from the guestbook and database.
   */
=======
* Delete all entries from the guestbook and database.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function DeleteAll() {
    $this->db->ExecuteQuery(self::SQL('delete from guestbook'));
    $this->session->AddMessage('info', 'Removed all messages from the database table.');
  }
  
  
  /**
<<<<<<< HEAD
   * Read all entries from the guestbook & database.
   */
=======
* Read all entries from the guestbook & database.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function ReadAll() {
    try {
      return $this->db->ExecuteSelectQueryAndFetchAll(self::SQL('select * from guestbook'));
    } catch(Exception $e) {
<<<<<<< HEAD
      return array();    
=======
      return array();
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    }
  }

  
<<<<<<< HEAD
} 
=======
} 
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
