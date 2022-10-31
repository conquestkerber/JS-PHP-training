<?php
    include_once 'Trka.php';
    include_once 'Vozac.php';
    include_once 'MySmarty.php';
    include_once 'lib.php';
    session_start();
    $mysmarty = new MySmarty();
    $lib = new Lib();
    $povratniniztrka=$lib->vrati_sve_iz_tabele_trka();
    $povratninizvozac=$lib->vrati_sve_iz_tabele_vozac();
    $trka = $povratniniztrka['1'];
    foreach ($povratninizvozac as $vozac)
        $trka->dodajVozaca($vozac);
    if(isset($_GET["vozaczaizmenu"]))
    {
        $ind =$_GET["vozaczaizmenu"];
        $trka->niz[$ind]->brojkrugova++;
        $lib->izmeni_vozaca($trka->niz[$ind]);
    }
    $mysmarty->assign('trka',$trka);
    //$mySmarty->assign('naziv',$povratniniztrka['naziv']);
    $mysmarty->display('index.tpl');
?>
 
