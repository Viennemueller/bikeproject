<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 0;

$smarty->assign("title", "PHP and Smarty is Alive");
$smarty->assign("version", "Version 1.3");
$smarty->assign("username", "Arnesia D");

$smarty->display('testsmarty.tpl');


?>