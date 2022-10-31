<?php

include 'lib.php';
include 'MySmarty.php';

session_start();

// prolazi se kroz sve komponente iz sesije i menja im se status
// onako kako je to korisnik zadao koriscenjem radio kontrole
foreach ($_SESSION["komponente"] as $sifra => $komponenta)
{
    if (isset($_POST[$sifra]))
    {
        $_SESSION["komponente"][$sifra]["status"] = $_POST[$sifra];
    }
}


$smarty = new MySmarty();
$smarty->assign("komponente", $_SESSION["komponente"]);
$smarty->display('pregled.tpl');
?>
