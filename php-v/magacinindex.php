<?php

include_once 'Magacin.php';
include_once 'Paket.php';
include_once 'MySmarty.php';
include_once 'magacinlib.php';
session_start();
$mysmarty=new MySmarty();
$lib=new Magacinlib();


$magacin=$lib->vrati_magacin();
if(isset($_GET['paket_za_izmenu']))
{
    $izmeni=true;
}
else{
    $izmeni=NULL;
}

if(isset($_POST['prosledi']))
{
    $lomljivo=0;
    if(isset($_POST['lomljivo']))
        $lomljivo=1;
    
    $paket=new Paket($_POST['oznaka'], $_POST['br_komada'], $_POST['dan'], $_POST['mesec'], $_POST['godina'],$lomljivo,1);

    $lib->izmeni_paket($paket);
}

$mysmarty->assign("izmeni",$izmeni);
$mysmarty->assign("magacin",$magacin);
$mysmarty->display('magacinindex.tpl');

?>

