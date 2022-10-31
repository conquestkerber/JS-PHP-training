<?php

include 'lib.php';
include 'MySmarty.php';

$lbo = '';
$ime = '';
$prezime = '';
$pol = '';
$dan = '';
$mesec = '';
$godina = '';

if (isset($_POST["prosledi"]))
{
    dodaj_osiguranika($_POST['lbo'], $_POST['ime'], $_POST['prezime'], $_POST['pol'], $_POST['dan'] . '.' . $_POST['mesec'] . '.' . $_POST['godina'] . '.');
}
elseif (isset($_POST["nazad"]))
{
    $lbo = $_POST['lbo'];
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $pol = $_POST['pol'];
    $dan = $_POST['dan'];
    $mesec = $_POST['mesec'];
    $godina = $_POST['godina'];
}

$osiguranici = vrati_sve_osiguranike();

$smarty = new MySmarty();
$smarty->assign('lbo', $lbo);
$smarty->assign('ime', $ime);
$smarty->assign('prezime', $prezime);
$smarty->assign('pol', $pol);
$smarty->assign('dan', $dan);
$smarty->assign('mesec', $mesec);
$smarty->assign('godina', $godina);

$smarty->assign("osiguranici", $osiguranici);

$smarty->display('index.tpl');
?>

