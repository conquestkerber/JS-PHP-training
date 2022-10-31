<?php

include_once 'Vinarija.php';
include_once 'Vino.php';
include_once 'vinarijalib.php';
include_once 'MySmarty.php';
session_start();

$mysmarty=new MySmarty();
$lib=new vinarijalib();

$vinarija=$lib->ucitaj_vinariju();

if(isset($_POST['prosledi']))
{
    $p=$_POST['vrsta'];
    echo $p;
}

$mysmarty->assign('vinarija',$vinarija);
$mysmarty->display('vinarijaindex.tpl');

?>

