<?php

include 'lib.php';
include 'MySmarty.php';

session_start();

if (isset($_GET["nazad"]))
{
    $osiguranici = $_SESSION["osiguranici"];
}
else
{
    $osiguranici = vratiSveOsiguranike();
    $_SESSION["osiguranici"]=$osiguranici;
}


$smarty = new MySmarty();
$smarty->assign("osiguranici", $osiguranici);
$smarty->display('index.tpl');
?>
