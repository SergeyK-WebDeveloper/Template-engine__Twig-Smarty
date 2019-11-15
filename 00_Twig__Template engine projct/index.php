<?php

header("Content-Type:text/html;charset=UTF8");
//подключаем файл конфигурации
include 'config.php';
include 'functions.php';

define('CONST','World');

if($_POST['cat_id']) {
	$cat_id = json_decode($_POST['cat_id']);
	//$param->id = 2
	$row = get_statti($cat_id);
	echo json_encode($row);
	exit();
}


$result = get_statti();
$cat = get_cat();

class my {
	public $a = 'hello';
	public $b = 'world';
	
	public function foo($name) {
		return __CLASS__.__METHOD__.'||'.$name;
	}
}

$index = array(0,1,2,3,4,5,6,7);
$new = array('hello','world','!');
//$new = new my();





$templ = $twig->loadTemplate('main.html');
echo $templ->render(array('cat'=>$cat,'statti'=>$result,'site_name'=>$site_name,'new'=>$new,'index'=>$index));
?>
