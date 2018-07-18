<?php

define("SITE_PATH", "http://localhost/frontendCMS/");
define("APP_PATH", str_replace("\\", "/", dirname(__FILE__)) . "/");
define("APP_ASSETS", "http://localhost/frontendCMS/app/assets/");

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'frontendcms';

require_once(APP_PATH."core/coreController.php");
$FrontendCMS = new Core($server, $user, $pass, $db);
