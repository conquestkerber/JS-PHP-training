<?php

include 'lib.php';
include 'MySmarty.php';

$lbo = '';
if (isset($_GET["lbo"]))
{
    $lbo = $_GET["lbo"];
}
$ime = '';
if (isset($_GET["ime"]))
{
    $ime = $_GET["ime"];
}
$prezime = '';
if (isset($_GET["prezime"]))
{
    $prezime = $_GET["prezime"];
}
$izbor_godina = array();
for ($i = 0; $i < 100; $i++)
{
  $izbor_godina[$i] = $i;
}
$starost = 0;
if (isset($_GET["starost"]))
{
    $starost = $_GET["starost"];
}


$smarty = new MySmarty();
$smarty->assign("prezime", $prezime);
$smarty->assign("ime", $ime);
$smarty->assign("lbo", $lbo);
$smarty->assign("izbor_godina", $izbor_godina);
$smarty->assign("starost", $starost);
$smarty->display('index.tpl');
?>
