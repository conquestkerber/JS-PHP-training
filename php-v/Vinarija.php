<?php

class Vinarija
{
    public $id;
    public $naziv;
    public $lokacija;
    public $listaVina=array();
    
    function __construct($id,$naziv,$lokacija)
    {
        $this->id=$id;
        $this->naziv=$naziv;
        $this->lokacija=$lokacija;
    }
    
    function dodajVino($vino)
    {
        $this->listaVina[]=$vino;
    }
}

?>

