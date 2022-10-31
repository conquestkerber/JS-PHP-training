<?php

include 'lib.php';
include 'MySmarty.php';

session_start();
$studenti = $_SESSION["studenti"];

$checks = array();
if (isset($_POST["check"]))
{
    $checks = $_POST["check"];
}

foreach ($studenti as $indeks => $student)
{
    $selected = false;
    foreach ($checks as $check)
    {
        if ($check == $indeks)
        {
            $selected = true;
        }
    }
    $studenti[$indeks]["za_izmenu"] = $selected;
}
$_SESSION["studenti"] = $studenti;

$smarty = new MySmarty();
$smarty->assign("studenti", $studenti);
$smarty->display('izmena.tpl');
?>
