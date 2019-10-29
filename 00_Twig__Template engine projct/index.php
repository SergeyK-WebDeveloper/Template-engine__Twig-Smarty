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

//$new = ",Строка | для проверки | фильтра | format,";
//$var = array('%a%'=>10,'%b%'=>20,'%c%'=>30);
$new = array('c'=>400,'d'=>5,'e'=>600,'t'=>50,'x'=>10);

//$var = array(10,20,30);
//$var = 200536.156;
$result = get_statti();
$cat = get_cat();

$templ = $twig->loadTemplate('main.html');
echo $templ->render(array('cat'=>$cat,'statti'=>$result,'site_name'=>$site_name,'new'=>$new,'var'=>$var));
?>
