<?php
///////////////config//////////////////
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','twig_test');

define("COUNT_PER_PAGE",5);

$site_name = 'Тестовый сайт';
$button = "Button";
///////////////config//////////////////

//
$db = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$db) {
	exit('No connection with database');
}

if(!mysql_select_db(DB_NAME,$db)) {
	exit('Wrong database');
}
mysql_query("SET NAMES UTF8");

require_once "include/Twig/Autoloader.php";
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('theme');

$twig = new Twig_Environment($loader);
?>