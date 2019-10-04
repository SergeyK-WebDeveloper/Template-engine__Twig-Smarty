<?php
///////////////config//////////////////
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','twig');

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

require_once "MyTemplate.php";
//$loader = new Twig_Loader_Filesystem();

//array('theme','images');
//$loader->addPath('images');
//$loader->addPath('theme');

//print_r($loader->getPaths());

//$loader  = new Twig_Loader_String();
$loader1  = new Twig_Loader_Array(array(
								
								'base.html'=>"{%block content%}{%endblock%}"
								
								));
$loader2  = new Twig_Loader_Array(array(
								
								'index.html'=>"{% extends 'base.html'%}{%block content%}Test template base.html - {{var}}{%endblock%}",
								'base.html'=>"Test"
								
								));
								
$loader  = new Twig_Loader_Chain(array($loader1,$loader2));

$twig = new Twig_Environment($loader,array(
										//'cache'=>'cache',
										//'auto_reload'=>TRUE
										//'charset'=>"UTF-8"
										//'base_template_class'=>'MyTemlate'
										//'strict_variables'=>true
										/*'autoescape'=>function ($t) {
											if($t == 'main_menu.html') {
												return 'html';
											}
											else {
												return 'js';
											}
										}*/
										
										));
										
//echo $twig->render('Test template - {{var}}',array('var'=>"Hello world"));		
echo $twig->render('index.html',array('var'=>'Hello array'));

exit();							
?>