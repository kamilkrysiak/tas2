<?php 


require_once './libs/Smarty.class.php';
require_once realpath(__DIR__ . "/vendor/autoload.php");

$smarty = new Smarty;
$getData = $_GET;

if (!isset($getData['page'])) { 
    $page = 'auth-form';
    $smarty->assign('title', "Logowanie");
    $smarty->assign('page', $page);
}  



$smarty->display('layout.tpl');