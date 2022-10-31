<?php
    include_once 'Drzava.php';
    include_once 'Grad.php';
    include_once 'MySmarty.php';
    include_once 'drzavalib.php';
    session_start();
    $mysmarty = new MySmarty();
    $lib=new drzavalib();
   
    if(!isset($_POST["dodaj_submit"]) && !isset($_POST["prikazi_rastojanje_submit"]))
    {
    $drzava=$lib->vrati_drzavu();
     echo "Ucitava iz baze";
    $_SESSION["drzava"]=$drzava;
    echo "prvo ucitavanje";
    }
    else {
        $drzava=$_SESSION["drzava"];
    }
    if(isset($_POST["dodaj_submit"]))
    {
        $id= count($drzava->nizGradova)+1;
        $grad2=new Grad($id,$_POST["oznaka_option"], $_POST["naziv_text"], $_POST["broj_stanovnika_text"], $_POST["x_text"], $_POST["y_text"], 1);
        //$drzava->dodajGrad($grad2);
        $lib->dodaj_grad($grad2);
        $drzava=$lib->vrati_drzavu();
        echo "Ucitava iz baze";
        $_SESSION["drzava"]=$drzava;

    }    
    if(isset($_POST["prikazi_rastojanje_submit"]))
    {

        if(isset($_POST['check_grad'])){
            $c=$_POST['check_grad'];
        
            $rastojanje=$drzava->izracunajRastojanje($c);
        }
        else{
            $rastojanje="Niste cekirali ni jedan grad";
        }
    }
    else
    {
        $rastojanje=NULL;
    }

        $mysmarty->assign('drzava',$drzava);
        $mysmarty->assign('rastojanje',$rastojanje);
        $mysmarty->display('drzavaindex.tpl');
    ?>
