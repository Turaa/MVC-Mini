<?php
/**
* Site configuration, this file is changed by user per site.
*
*/

<<<<<<< HEAD
/*
=======
/**
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* Set level of error reporting
*/
error_reporting(-1);
ini_set('display_errors', 1);

<<<<<<< HEAD
/**
 * Set database(s).
 */
$mi->config['database'][0]['dsn'] = 'sqlite:' . MINI_SITE_PATH . '/data/.ht.sqlite';

/**
 * Set what to show as debug or developer information in the get_debug() theme helper.
 */
=======

/**
* Set what to show as debug or developer information in the get_debug() theme helper.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
$mi->config['debug']['mini'] = false;
$mi->config['debug']['session'] = false;
$mi->config['debug']['timer'] = true;
$mi->config['debug']['db-num-queries'] = true;
$mi->config['debug']['db-queries'] = true;


/**
<<<<<<< HEAD
* What type of urls should be used?
* 
* default      = 0      => index.php/controller/method/arg1/arg2/arg3
* clean        = 1      => controller/method/arg1/arg2/arg3
* querystring  = 2      => index.php?q=controller/method/arg1/arg2/arg3
=======
* Set database(s).
*/
$mi->config['database'][0]['dsn'] = 'sqlite:' . MINI_SITE_PATH . '/data/.ht.sqlite';


/**
* What type of urls should be used?
*
* default = 0 => index.php/controller/method/arg1/arg2/arg3
* clean = 1 => controller/method/arg1/arg2/arg3
* querystring = 2 => index.php?q=controller/method/arg1/arg2/arg3
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
*/
$mi->config['url_type'] = 1;


/**
* Set a base_url to use another than the default calculated
*/
$mi->config['base_url'] = null;

<<<<<<< HEAD
/**
 * How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
 */
=======

/**
* How to hash password of new users, choose from: plain, md5salt, md5, sha1salt, sha1.
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
$mi->config['hashing_algorithm'] = 'sha1salt';


/**
* Allow or disallow creation of new user accounts.
*/
$mi->config['create_new_users'] = true;

<<<<<<< HEAD
/*
* Define session name
*/
$mi->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$mi->config['session_key']  = 'mini';

/*
* Define server timezone
*/
$mi->config['timezone'] = 'Europe/Stockholm';

/*
=======

/**
* Define session name
*/
$mi->config['session_name'] = preg_replace('/[:\.\/-_]/', '', __DIR__);
$mi->config['session_key'] = 'mini';


/**
* Define default server timezone when displaying date and times to the user. All internals are still UTC.
*/
$mi->config['timezone'] = 'Europe/Stockholm';


/**
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* Define internal character encoding
*/
$mi->config['character_encoding'] = 'UTF-8';

<<<<<<< HEAD
/*
=======

/**
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* Define language
*/
$mi->config['language'] = 'en';

<<<<<<< HEAD
/**
* Define the controllers, their classname and enable/disable them.
*
* The array-key is matched against the url, for example: 
* the url 'developer/dump' would instantiate the controller with the key "developer", that is 
=======

/**
* Define the controllers, their classname and enable/disable them.
*
* The array-key is matched against the url, for example:
* the url 'developer/dump' would instantiate the controller with the key "developer", that is
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
* CCDeveloper and call the method "dump" in that class. This process is managed in:
* $mi->FrontControllerRoute();
* which is called in the frontcontroller phase from index.php.
*/
$mi->config['controllers'] = array(
<<<<<<< HEAD
  'index'     => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'theme'     => array('enabled' => true,'class' => 'CCTheme'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'content'   => array('enabled' => true,'class' => 'CCContent'),
  'blog'      => array('enabled' => true,'class' => 'CCBlog'),
  'page'      => array('enabled' => true,'class' => 'CCPage'),
  'user'      => array('enabled' => true,'class' => 'CCUser'),
  'acp'       => array('enabled' => true,'class' => 'CCAdminControlPanel'),
  'module'   => array('enabled' => true,'class' => 'CCModules'),
  'my'        => array('enabled' => true,'class' => 'CCMycontroller'),
);

/**
 * Define a routing table for urls.
 *
 * Route custom urls to a defined controller/method/arguments
 */
=======
  'index' => array('enabled' => true,'class' => 'CCIndex'),
  'developer' => array('enabled' => true,'class' => 'CCDeveloper'),
  'theme' => array('enabled' => true,'class' => 'CCTheme'),
  'guestbook' => array('enabled' => true,'class' => 'CCGuestbook'),
  'content' => array('enabled' => true,'class' => 'CCContent'),
  'blog' => array('enabled' => true,'class' => 'CCBlog'),
  'page' => array('enabled' => true,'class' => 'CCPage'),
  'user' => array('enabled' => true,'class' => 'CCUser'),
  'acp' => array('enabled' => true,'class' => 'CCAdminControlPanel'),
  'module' => array('enabled' => true,'class' => 'CCModules'),
  'my' => array('enabled' => true,'class' => 'CCMycontroller'),
);


/**
* Define a routing table for urls.
*
* Route custom urls to a defined controller/method/arguments
*/
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
$mi->config['routing'] = array(
  'home' => array('enabled' => true, 'url' => 'index/index'),
);

<<<<<<< HEAD
/**
 * Define menus.
 *
 * Create hardcoded menus and map them to a theme region through $mi->config['theme'].
 */
$mi->config['menus'] = array(
  'navbar' => array(
    'home'      => array('label'=>'Home', 'url'=>'home'),
    'modules'   => array('label'=>'Modules', 'url'=>'module'),
    'content'   => array('label'=>'Content', 'url'=>'content'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'guestbook'),
    'blog'      => array('label'=>'Blog', 'url'=>'blog'),
  ),
  'my-navbar' => array(
    'home'      => array('label'=>'About Me', 'url'=>'my'),
    'blog'      => array('label'=>'My Blog', 'url'=>'my/blog'),
=======

/**
* Define menus.
*
* Create hardcoded menus and map them to a theme region through $mi->config['theme'].
*/
$mi->config['menus'] = array(
  'navbar' => array(
    'home' => array('label'=>'Home', 'url'=>'home'),
    'modules' => array('label'=>'Modules', 'url'=>'module'),
    'content' => array('label'=>'Content', 'url'=>'content'),
    'guestbook' => array('label'=>'Guestbook', 'url'=>'guestbook'),
    'blog' => array('label'=>'Blog', 'url'=>'blog'),
  ),
  'my-navbar' => array(
    'home' => array('label'=>'About Me', 'url'=>'my'),
    'blog' => array('label'=>'My Blog', 'url'=>'my/blog'),
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
    'guestbook' => array('label'=>'Guestbook', 'url'=>'my/guestbook'),
  ),
);


/**
<<<<<<< HEAD
 * Settings for the theme.
 */
$mi->config['theme'] = array(
  'path'            => 'site/themes/mytheme',
  //'path'            => 'themes/grid',
  'parent'          => 'themes/grid',
  'stylesheet'      => 'style.css',
  'template_file'   => 'index.tpl.php',
=======
* Settings for the theme. The theme may have a parent theme.
*
* When a parent theme is used the parent's functions.php will be included before the current
* theme's functions.php. The parent stylesheet can be included in the current stylesheet
* by an @import clause. See site/themes/mytheme for an example of a child/parent theme.
* Template files can reside in the parent or current theme, the CMini::ThemeEngineRender()
* looks for the template-file in the current theme first, then it looks in the parent theme.
*
* There are two useful theme helpers defined in themes/functions.php.
* theme_url($url): Prepends the current theme url to $url to make an absolute url.
* theme_parent_url($url): Prepends the parent theme url to $url to make an absolute url.
*
* path: Path to current theme, relativly MINI_INSTALL_PATH, for example themes/grid or site/themes/mytheme.
* parent: Path to parent theme, same structure as 'path'. Can be left out or set to null.
* stylesheet: The stylesheet to include, always part of the current theme, use @import to include the parent stylesheet.
* template_file: Set the default template file, defaults to default.tpl.php.
* regions: Array with all regions that the theme supports.
* menu_to_region: Array mapping menus to regions.
* data: Array with data that is made available to the template file as variables.
*
* The name of the stylesheet is also appended to the data-array, as 'stylesheet' and made
* available to the template files.
*/
$mi->config['theme'] = array(
  'path' => 'site/themes/mytheme',
  //'path' => 'themes/grid',
  'parent' => 'themes/grid',
  'stylesheet' => 'style.css',
  'template_file' => 'index.tpl.php',
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  'regions' => array('navbar', 'flash','featured-first','featured-middle','featured-last',
    'primary','sidebar','triptych-first','triptych-middle','triptych-last',
    'footer-column-one','footer-column-two','footer-column-three','footer-column-four',
    'footer',
  ),
<<<<<<< HEAD
  // Add static entries for use in the template file. 
=======
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
  'menu_to_region' => array('my-navbar'=>'navbar'),
  'data' => array(
    'header' => 'Mini',
    'slogan' => 'A PHP-based MVC-inspired CMF',
    'favicon' => 'logo_80x80.png',
    'logo' => 'logo_80x80.png',
<<<<<<< HEAD
    'logo_width'  => 80,
    'logo_height' => 80,
    'footer' => '<p>Mini &copy; by Tura</p>',
  ),
);
=======
    'logo_width' => 80,
    'logo_height' => 80,
    'footer' => '<pMini &copy; by Tura</p>',
  ),
);
>>>>>>> 23f07a72a8006cf7b8a9c88acb7ba2df898eb6a5
