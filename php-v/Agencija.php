<?php

class Agencija
{
    public $id;
    public $naziv;
    public $adresa;
    public $listaLetovanja=array();
    
    function __construct($id,$naziv,$adresa)
    {
        $this->id=$id;
        $this->naziv=$naziv;
        $this->adresa=$adresa;
    }
    
    function dodajLetovanje($letovanje)
    {
        $this->listaLetovanja[]=$letovanje;
    }
}

?>

