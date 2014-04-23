<?php 

// These settings shouldn't be changed unless you know what you are doing!

$config['debug'] = false;

$config['db_name'] = 'testkit_db'; // Database name

$config['default_controller'] = 'main'; // Default controller to load
$config['error_controller'] = 'error'; // Controller used for errors (e.g. 404, 500 etc)

function isLoggedIn()
{
    if (!isset($_SESSION['login']) || !$_SESSION['login'])
    {
        // Not logged in. Redirect to login screen.
        return array("controller" => "login", "action" => "index");
    }

    return array();
}

$config['pre_route_handler'] = 'isLoggedIn';

require(realpath(dirname(__FILE__))."/../../system/globals.php");

?>