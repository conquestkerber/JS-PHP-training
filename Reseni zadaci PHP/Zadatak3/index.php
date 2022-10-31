<?php

include 'lib.php';
include 'MySmarty.php';

session_start();

if (isset($_GET["nazad"]))
{
    //ako se do ove strane doslo klikom na link nazad sa strane pregled.php
    $komponente = $_SESSION["komponente"];
}
else
{
    //ako je ova strana direktno otvorena - prvo pokretanje aplikacije
    $komponente = vratiSveKomponente();
    $_SESSION["komponente"]=$komponente;
    // sve komponente pronadjene u bazi se smestaju kao niz u sesiji
}


$smarty = new MySmarty();
$smarty->assign("komponente", $komponente);
$smarty->display('index.tpl');
?>
