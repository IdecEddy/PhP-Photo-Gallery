<?php 

//Init file where all the magic happens change the SITE_ROOT, LIB_PATH and PUBLIC dir to your needs.

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'var'.DS.'www'.DS.'html');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
defined('PUB') ? null : define('PUB', SITE_ROOT.DS.'public');


require_once(LIB_PATH.DS."db_connection.php");
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."sessions.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS.'photograph.php');

?>
