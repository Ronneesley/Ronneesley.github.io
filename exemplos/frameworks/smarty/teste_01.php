<?php

require 'vendor/autoload.php';
$smarty = new Smarty();
//$smarty->testInstall();

$smarty->assign('name', 'Ronneesley');
$smarty->display('index.tpl');

?>
