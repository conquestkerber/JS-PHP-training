<?php
include 'lib.php';
include 'MySmarty.php';

$smarty = new MySmarty();
$smarty->assign('lbo', $_POST['lbo']);
$smarty->assign('ime', $_POST['ime']);
$smarty->assign('prezime', $_POST['prezime']);
$smarty->assign('pol', $_POST['pol']);
$smarty->assign('dan', $_POST['dan']);
$smarty->assign('mesec', $_POST['mesec']);
$smarty->assign('godina', $_POST['godina']);

$smarty->display('pregled.tpl');
?>

