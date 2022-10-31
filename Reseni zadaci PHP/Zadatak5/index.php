<?php

include 'lib.php';
include 'MySmarty.php';

session_start();

if (isset($_REQUEST["odustani"]))
{
    $studenti = $_SESSION["studenti"];
}
else if (isset($_REQUEST["prosledi"]))
{
    $studenti = $_SESSION["studenti"];
    foreach ($studenti as $indeks => $student)
    {
        if ($student["za_izmenu"])
        {
            izmeni_studenta($indeks, $_POST[$indeks."_ime"], $_POST[$indeks."_prezime"], $_POST[$indeks."_godina"], $_POST[$indeks."_status"]);
        }
    }
    $studenti = vrati_sve_studente();
    $_SESSION["studenti"]=$studenti;
}
else
{
    $studenti = vrati_sve_studente();
    $_SESSION["studenti"]=$studenti;
}

$smarty = new MySmarty();
$smarty->assign("studenti", $studenti);
$smarty->display('index.tpl');
?>
