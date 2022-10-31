<?php

include 'lib.php';
include 'MySmarty.php';

$ime = $_POST["ime"];
$prezime = $_POST["prezime"];
$lbo = $_POST["lbo"];
$starost = $_POST["starost"];


$smarty = new MySmarty();
$smarty->assign("ime", $ime);
$smarty->assign("prezime", $prezime);
$smarty->assign("lbo", $lbo);
$smarty->assign("starost", $starost);

$smarty->display('pregled.tpl');
?>
