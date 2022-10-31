<?php

class Letovanje
{
    public $id;
    public $destinacija;
    public $zemlja;
    public $vrsta_usluge;
    public $cena;
    public $prevoz_ukljucen;
    public $agencija_id;
    
    function  __construct($id,$destinacija,$zemlja,$vrsta_usluge,$cena,$prevoz_ukljucen,$agencija_id)
    {
        $this->id=$id;
        $this->destinacija=$destinacija;
        $this->zemlja=$zemlja;
        $this->vrsta_usluge=$vrsta_usluge;
        $this->cena=$cena;
        $this->prevoz_ukljucen=$prevoz_ukljucen;
        $this->agencija_id=$agencija_id;
    }
}

?>
