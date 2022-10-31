<?php

include 'lib.php';
include 'MySmarty.php';

$selected_jmbg = "";

if (isset($_POST["prosledi"]))
{
    // na stranici izmena kliknuto dugme "Prosledi"
    izmeniRadnika($_POST["jmbg"], $_POST["ime"], $_POST["prezime"]);
}
else
{
    // povratak sa stranice izmena ili prvo otvaranje
    if (isset($_POST["jmbg"]))
    {
        $selected_jmbg = $_POST["jmbg"];
    }
}

$radnici = vratiSveRadnike();

$smarty = new MySmarty();
$smarty->assign("radnici", $radnici);
$smarty->assign("selected_jmbg", $selected_jmbg);
$smarty->display('index.tpl');
?>
