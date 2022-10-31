<?php

class Magacin
{
    public $id;
    public $oznaka;
    public $lokacija;
    public $listaPaketa=array();
    
    
    function __construct($id,$oznaka,$lokacija)
    {
        $this->id=$id;
        $this->oznaka=$oznaka;
        $this->lokacija=$lokacija;
    }
    
    function dodajPaket($paket)
    {
        $this->listaPaketa[]=$paket;
    }
}

?>

