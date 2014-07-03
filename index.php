<?php
/*
 * PIP v0.5.3
 */

//Start the Session
session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');

// Includes
require(APP_DIR .'config/config.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
require(ROOT_DIR .'system/pip.php');

global $config;
define('BASE_URL', $config['base_url']);

define('BOOTSTRAP_VERSION', '3.2.0');
define('JQUERY_VERSION', '1.11.1');

if ($config['debug'])
{
   define('BOOTSTRAP_URL', $config['base_url'].'static/bootstrap-'.BOOTSTRAP_VERSION);
   define('JQUERY_URL', $config['base_url'].'static/jquery-'.JQUERY_VERSION);
}
else
{
   define('BOOTSTRAP_URL', '//netdna.bootstrapcdn.com/bootstrap/'.BOOTSTRAP_VERSION);
   define('JQUERY_URL', 'https://ajax.googleapis.com/ajax/libs/jquery/'.JQUERY_VERSION);
}

pip();

?>
