<?php 

/*
    TestKit admin login settings.
    You MUST change at least the admin password! TestKit will not allow
    you to log in if the password has not been changed from the default.
*/
$config['admin_username'] = 'testkit';
$config['admin_password'] = 'testkit';

/*
    Base URL.
    This should include a trailing slash (e.g. http://localhost/testkit/)
*/
$config['base_url'] = 'http://localhost/testkit/';

/*
    MySQL database username.
    You can use the root login if you like, but it is preferable to create
    a specific user just for the TestKit database.

    If you change this setting you should also update createDatabase.sql!
*/
$config['db_username'] = 'testkit';

/*
    MySQL database password.
    You don't have to change the database password if your database is running
    on localhost, but it is recommended. If not running on localhost you probably
    should change it!

    If you change this setting you should also update createDatabase.sql!
*/
$config['db_password'] = 'password';

/*
    MySQL database host machine.
*/
$config['db_host'] = 'localhost';

require(realpath(dirname(__FILE__))."/config_private.php");

$userConfig = realpath(dirname(__FILE__))."/config_user.php";
if (file_exists($userConfig))
{
    require($userConfig);
}

?>