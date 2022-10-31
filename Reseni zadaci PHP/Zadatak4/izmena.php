<?php

include 'lib.php';
include 'MySmarty.php';

$radnik["ime"] = "";
$radnik["prezime"] = "";
$radnik["jmbg"] = "";

if (isset($_POST["radio"]))
{
    $jmbg = $_POST["radio"];
    $radnik["jmbg"] = $jmbg;
    $radnik["ime"] = $_POST[$jmbg."_ime"];
    $radnik["prezime"] = $_POST[$jmbg."_prezime"];
}
$smarty = new MySmarty();
$smarty->assign("radnik", $radnik);
$smarty->display('izmena.tpl');
?>
