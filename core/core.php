<?php
#this is the core archive for the complete app
session_start();

#App constants
define('APP_TITTLE','FVG - Golf Venezolano');
define('APP_URL','http://localhost/Apps/fvg-golf-blog/');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','crud');

#Functions required for all the app
require('core/models/class.Conexion.php');
require('core/bin/functions/Users.php');

$_users = Users();
?>
