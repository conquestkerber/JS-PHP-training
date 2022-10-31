<?php

include 'lib.php';
include 'MySmarty.php';

session_start();

$osiguranici = $_SESSION["osiguranici"];

foreach ($osiguranici as $lbo => $osiguranik)
{
    if (isset($_POST[$lbo]))
    {
        $osiguranici[$lbo]["brisi"] = true;
    }
    else
    {
        $osiguranici[$lbo]["brisi"] = false;
    }
}

$_SESSION["osiguranici"] = $osiguranici;


$smarty = new MySmarty();
$smarty->assign("osiguranici", $osiguranici);
$smarty->display('pregled.tpl');
?>
