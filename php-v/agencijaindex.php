<?php

    include_once 'Agencija.php';
    include_once 'Letovanje.php';
    include_once 'MySmarty.php';
    include_once 'agencijalib.php';
    session_start();
    $lib=new agencijalib();
    $smarty=new MySmarty();
    
    if(!isset($_SESSION['agencija']))
    {
         $agencija=$lib->vrati_agenciju();
         $_SESSION['agencija']=$agencija;
    }
    else
    {
        $agencija=$_SESSION['agencija'];
    }
        
     if(isset($_POST['submit_izmeni']))
    {
        $izmeni=1;
        if(isset($_POST['id_letovanja']))
    {
        $id=$_POST['id_letovanja'];
        $_SESSION['id']=$id;
        
    }
    }
    else
    {
        $izmeni=NULL;
    }
    
    if(isset($_POST['prosledi_submit']))
    {
        if(isset($_POST['prevoz_ukljucen_ckeck']))
        {
            $prevoz=1;
        }
        else
        {
            $prevoz=0;
        }
        $newLetovanje=new Letovanje($_SESSION['id'],$_POST['destinacija_text'],$_POST['zemlja_text'], $_POST['vrsta_usluge_radio'], $_POST['cena_select'],$prevoz,1);
        $lib->azuriraj_letovanje($newLetovanje);
        
        $agencija=$lib->vrati_agenciju();
         $_SESSION['agencija']=$agencija;
    }
    
    
    
   
    
    
    
    
    $v= array();
    for($i=1; $i<1001; $i++)
    {
        $v[]=$i;
    }
    
    
    $smarty->assign('index',$izmeni);
    $smarty->assign('id',$v);
    
    $smarty->assign('agencija',$agencija);
    $smarty->display('agencijaindex.tpl');

?>

