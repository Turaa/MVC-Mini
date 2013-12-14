<?php
/**
<<<<<<< HEAD
 * A utility class to easy creating and handling of forms
 * 
 * @package MiniCore
 */
class CFormElement implements ArrayAccess{

  /**
   * Properties
   */
=======
* A utility class to easy creating and handling of forms
*
* @package MiniCore
*/
class CFormElement implements ArrayAccess{

  /**
* Properties
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public $attributes;
  public $characterEncoding;
  

  /**
<<<<<<< HEAD
   * Constructor
   *
   * @param string name of the element.
   * @param array attributes to set to the element. Default is an empty array.
   */
  public function __construct($name, $attributes=array()) {
    $this->attributes = $attributes;    
=======
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/
  public function __construct($name, $attributes=array()) {
    $this->attributes = $attributes;
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $this['name'] = $name;
    if(is_callable('CMini::Instance()')) {
      $this->characterEncoding = CMini::Instance()->config['character_encoding'];
    } else {
      $this->characterEncoding = 'UTF-8';
    }
  }
  
  
  /**
<<<<<<< HEAD
   * Implementing ArrayAccess for this->attributes
   */
=======
* Implementing ArrayAccess for this->attributes
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function offsetSet($offset, $value) { if (is_null($offset)) { $this->attributes[] = $value; } else { $this->attributes[$offset] = $value; }}
  public function offsetExists($offset) { return isset($this->attributes[$offset]); }
  public function offsetUnset($offset) { unset($this->attributes[$offset]); }
  public function offsetGet($offset) { return isset($this->attributes[$offset]) ? $this->attributes[$offset] : null; }


  /**
<<<<<<< HEAD
   * Get HTML code for a element. 
   *
   * @returns HTML code for the element.
   */
=======
* Get HTML code for a element.
*
* @returns HTML code for the element.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function GetHTML() {
    $id = isset($this['id']) ? $this['id'] : 'form-element-' . $this['name'];
    $class = isset($this['class']) ? " {$this['class']}" : null;
    $validates = (isset($this['validation-pass']) && $this['validation-pass'] === false) ? ' validation-failed' : null;
    $class = (isset($class) || isset($validates)) ? " class='{$class}{$validates}'" : null;
    $name = " name='{$this['name']}'";
    $label = isset($this['label']) ? ($this['label'] . (isset($this['required']) && $this['required'] ? "<span class='form-element-required'>*</span>" : null)) : null;
<<<<<<< HEAD
    $autofocus = isset($this['autofocus']) && $this['autofocus'] ? " autofocus='autofocus'" : null;    
    $readonly = isset($this['readonly']) && $this['readonly'] ? " readonly='readonly'" : null;    
    $type 	= isset($this['type']) ? " type='{$this['type']}'" : null;
    $onlyValue 	= isset($this['value']) ? htmlentities($this['value'], ENT_COMPAT, $this->characterEncoding) : null;
    $value 	= isset($this['value']) ? " value='{$onlyValue}'" : null;
=======
    $autofocus = isset($this['autofocus']) && $this['autofocus'] ? " autofocus='autofocus'" : null;
    $readonly = isset($this['readonly']) && $this['readonly'] ? " readonly='readonly'" : null;
    $type         = isset($this['type']) ? " type='{$this['type']}'" : null;
    $onlyValue         = isset($this['value']) ? htmlentities($this['value'], ENT_COMPAT, $this->characterEncoding) : null;
    $value         = isset($this['value']) ? " value='{$onlyValue}'" : null;
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5

    $messages = null;
    if(isset($this['validation-messages'])) {
      $message = null;
      foreach($this['validation-messages'] as $val) {
        $message .= "<li>{$val}</li>\n";
      }
      $messages = "<ul class='validation-message'>\n{$message}</ul>\n";
    }
    
    if($type && $this['type'] == 'submit') {
      return "<span><input id='$id'{$type}{$class}{$name}{$value}{$autofocus}{$readonly} /></span>\n";
    } else if($type && $this['type'] == 'textarea') {
<<<<<<< HEAD
      return "<p><label for='$id'>$label</label><br><textarea id='$id'{$type}{$class}{$name}{$autofocus}{$readonly}>{$onlyValue}</textarea></p>\n"; 
    } else if($type && $this['type'] == 'hidden') {
      return "<input id='$id'{$type}{$class}{$name}{$value} />\n"; 
    } else {
      return "<p><label for='$id'>$label</label><br><input id='$id'{$type}{$class}{$name}{$value}{$autofocus}{$readonly} />{$messages}</p>\n";			  
=======
      return "<p><label for='$id'>$label</label><br><textarea id='$id'{$type}{$class}{$name}{$autofocus}{$readonly}>{$onlyValue}</textarea></p>\n";
    } else if($type && $this['type'] == 'hidden') {
      return "<input id='$id'{$type}{$class}{$name}{$value} />\n";
    } else {
      return "<p><label for='$id'>$label</label><br><input id='$id'{$type}{$class}{$name}{$value}{$autofocus}{$readonly} />{$messages}</p>\n";                        
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    }
  }


  /**
<<<<<<< HEAD
   * Validate the form element value according a ruleset.
   *
   * @param $rules array of validation rules.
   * returns boolean true if all rules pass, else false.
   */
=======
* Validate the form element value according a ruleset.
*
* @param $rules array of validation rules.
* returns boolean true if all rules pass, else false.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Validate($rules) {
    $tests = array(
      'fail' => array('message' => 'Will always fail.', 'test' => 'return false;'),
      'pass' => array('message' => 'Will always pass.', 'test' => 'return true;'),
      'not_empty' => array('message' => 'Can not be empty.', 'test' => 'return $value != "";'),
    );
    $pass = true;
    $messages = array();
    $value = $this['value'];
    foreach($rules as $key => $val) {
      $rule = is_numeric($key) ? $val : $key;
      if(!isset($tests[$rule])) throw new Exception('Validation of form element failed, no such validation rule exists.');
      if(eval($tests[$rule]['test']) === false) {
        $messages[] = $tests[$rule]['message'];
        $pass = false;
      }
    }
    if(!empty($messages)) $this['validation-messages'] = $messages;
    return $pass;
  }


  /**
<<<<<<< HEAD
   * Use the element name as label if label is not set.
   */
=======
* Use the element name as label if label is not set.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function UseNameAsDefaultLabel() {
    if(!isset($this['label'])) {
      $this['label'] = ucfirst(strtolower(str_replace(array('-','_'), ' ', $this['name']))).':';
    }
  }


  /**
<<<<<<< HEAD
   * Use the element name as value if value is not set.
   */
=======
* Use the element name as value if value is not set.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function UseNameAsDefaultValue() {
    if(!isset($this['value'])) {
      $this['value'] = ucfirst(strtolower(str_replace(array('-','_'), ' ', $this['name'])));
    }
  }


}


class CFormElementText extends CFormElement {
  /**
<<<<<<< HEAD
   * Constructor
   *
   * @param string name of the element.
   * @param array attributes to set to the element. Default is an empty array.
   */
=======
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($name, $attributes=array()) {
    parent::__construct($name, $attributes);
    $this['type'] = 'text';
    $this->UseNameAsDefaultLabel();
  }
}


class CFormElementTextarea extends CFormElement {
  /**
<<<<<<< HEAD
   * Constructor
   *
   * @param string name of the element.
   * @param array attributes to set to the element. Default is an empty array.
   */
=======
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($name, $attributes=array()) {
    parent::__construct($name, $attributes);
    $this['type'] = 'textarea';
    $this->UseNameAsDefaultLabel();
  }
}


class CFormElementHidden extends CFormElement {
  /**
<<<<<<< HEAD
   * Constructor
   *
   * @param string name of the element.
   * @param array attributes to set to the element. Default is an empty array.
   */
=======
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($name, $attributes=array()) {
    parent::__construct($name, $attributes);
    $this['type'] = 'hidden';
  }
}


class CFormElementPassword extends CFormElement {
  /**
<<<<<<< HEAD
   * Constructor
   *
   * @param string name of the element.
   * @param array attributes to set to the element. Default is an empty array.
   */
=======
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($name, $attributes=array()) {
    parent::__construct($name, $attributes);
    $this['type'] = 'password';
    $this->UseNameAsDefaultLabel();
  }
}


class CFormElementSubmit extends CFormElement {
  /**
<<<<<<< HEAD
   * Constructor
   *
   * @param string name of the element.
   * @param array attributes to set to the element. Default is an empty array.
   */
=======
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($name, $attributes=array()) {
    parent::__construct($name, $attributes);
    $this['type'] = 'submit';
    $this->UseNameAsDefaultValue();
  }
}


class CForm implements ArrayAccess {

  /**
<<<<<<< HEAD
   * Properties
   */
  public $form;     // array with settings for the form
=======
* Properties
*/
  public $form; // array with settings for the form
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public $elements; // array with all form elements
  

  /**
<<<<<<< HEAD
   * Constructor
   */
=======
* Constructor
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function __construct($form=array(), $elements=array()) {
    $this->form = $form;
    $this->elements = $elements;
  }


  /**
<<<<<<< HEAD
   * Implementing ArrayAccess for this->elements
   */
=======
* Implementing ArrayAccess for this->elements
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function offsetSet($offset, $value) { if (is_null($offset)) { $this->elements[] = $value; } else { $this->elements[$offset] = $value; }}
  public function offsetExists($offset) { return isset($this->elements[$offset]); }
  public function offsetUnset($offset) { unset($this->elements[$offset]); }
  public function offsetGet($offset) { return isset($this->elements[$offset]) ? $this->elements[$offset] : null; }


  /**
<<<<<<< HEAD
   * Add a form element
   *
   * @param $element CFormElement the formelement to add.
   * @returns $this CForm
   */
=======
* Add a form element
*
* @param $element CFormElement the formelement to add.
* @returns $this CForm
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function AddElement($element) {
    $this[$element['name']] = $element;
    return $this;
  }
  

  /**
<<<<<<< HEAD
   * Set validation to a form element
   *
   * @param $element string the name of the formelement to add validation rules to.
   * @param $rules array of validation rules.
   * @returns $this CForm
   */
=======
* Set validation to a form element
*
* @param $element string the name of the formelement to add validation rules to.
* @param $rules array of validation rules.
* @returns $this CForm
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function SetValidation($element, $rules) {
    $this[$element]['validation'] = $rules;
    return $this;
  }
  

  /**
<<<<<<< HEAD
   * Return HTML for the form or the formdefinition.
   *
   * @param $attributes array with attributes affecting the form output.
   * @returns string with HTML for the form.
   */
=======
* Return HTML for the form or the formdefinition.
*
* @param $attributes array with attributes affecting the form output.
* @returns string with HTML for the form.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function GetHTML($attributes=null) {
    if(is_array($attributes)) {
      $this->form = array_merge($this->form, $attributes);
    }
<<<<<<< HEAD
    $id 	  = isset($this->form['id'])      ? " id='{$this->form['id']}'" : null;
    $class 	= isset($this->form['class'])   ? " class='{$this->form['class']}'" : null;
    $name 	= isset($this->form['name'])    ? " name='{$this->form['name']}'" : null;
    $action = isset($this->form['action'])  ? " action='{$this->form['action']}'" : null;
=======
    $id          = isset($this->form['id']) ? " id='{$this->form['id']}'" : null;
    $class         = isset($this->form['class']) ? " class='{$this->form['class']}'" : null;
    $name         = isset($this->form['name']) ? " name='{$this->form['name']}'" : null;
    $action = isset($this->form['action']) ? " action='{$this->form['action']}'" : null;
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    $method = " method='post'";

    if(isset($attributes['start']) && $attributes['start']) {
      return "<form{$id}{$class}{$name}{$action}{$method}>";
    }
    
    $elements = $this->GetHTMLForElements();
    $html = <<< EOD
\n<form{$id}{$class}{$name}{$action}{$method}>
<fieldset>
{$elements}
</fieldset>
</form>
EOD;
    return $html;
  }
 

<<<<<<< HEAD
   /**
   * Return HTML for the elements
   */
=======
  /**
* Return HTML for the elements
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function GetHTMLForElements() {
    $html = null;
    $buttonbar = null;
    foreach($this->elements as $element) {
      // Wrap buttons in buttonbar.
      if(!$buttonbar && $element['type'] == 'submit') {
        $buttonbar = true;
        $html .= '<p>';
      } else if($buttonbar && $element['type'] != 'submit') {
        $buttonbar = false;
        $html .= '</p>\n';
      }
      $html .= $element->GetHTML();
    }
    return $html;
  }
  

  /**
<<<<<<< HEAD
   * Check if a form was submitted and perform validation and call callbacks.
   *
   * The form is stored in the session if validation or callback fails. The page should then be redirected
   * to the original form page, the form will populate from the session and should be rendered again.
   *
   * @returns boolean true if submitted&validates and callbacks are successfull, false if not validate or callback fails, null if not submitted.
   */
=======
* Check if a form was submitted and perform validation and call callbacks.
*
* The form is stored in the session if validation or callback fails. The page should then be redirected
* to the original form page, the form will populate from the session and should be rendered again.
*
* @returns boolean true if submitted&validates and callbacks are successfull, false if not validate or callback fails, null if not submitted.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  public function Check() {
    $validates = null;
    $callbackStatus = null;
    $values = array();
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      unset($_SESSION['form-failed']);
      $validates = true;
      foreach($this->elements as $element) {
        if(isset($_POST[$element['name']])) {
          $values[$element['name']]['value'] = $element['value'] = $_POST[$element['name']];
          if(isset($element['validation'])) {
            $element['validation-pass'] = $element->Validate($element['validation']);
            if($element['validation-pass'] === false) {
              $values[$element['name']] = array('value'=>$element['value'], 'validation-messages'=>$element['validation-messages']);
              $validates = false;
            }
          }
          if(isset($element['callback']) && $validates) {
            if(isset($element['callback-args'])) {
<<<<<<< HEAD
    					if(call_user_func_array($element['callback'], array_merge(array($this), $element['callback-args'])) === false) {
    					  $callbackStatus = false;
    					}
  	  			} else {
              if(call_user_func($element['callback'], $this) === false) {
    					  $callbackStatus = false;
=======
                                            if(call_user_func_array($element['callback'], array_merge(array($this), $element['callback-args'])) === false) {
                                             $callbackStatus = false;
                                            }
                                   } else {
              if(call_user_func($element['callback'], $this) === false) {
                                             $callbackStatus = false;
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
              }
            }
          }
        }
      }
    } else if(isset($_SESSION['form-failed'])) {
      foreach($_SESSION['form-failed'] as $key => $val) {
        $this[$key]['value'] = $val['value'];
        if(isset($val['validation-messages'])) {
          $this[$key]['validation-messages'] = $val['validation-messages'];
          $this[$key]['validation-pass'] = false;
        }
      }
      unset($_SESSION['form-failed']);
    }
    if($validates === false || $callbackStatus === false) {
      $_SESSION['form-failed'] = $values;
    }
    if($callbackStatus === false)
      return false;
<<<<<<< HEAD
    else 
=======
    else
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
      return $validates;
  }
  
  
}
