<?php

class Grad
{
    public $id;
    public $oznaka;
    public $naziv;
    public $broj_stanovnika;
    public $x;
    public $y;
    public $drzava_id;
    
    function __construct($id,$oznaka,$naziv,$broj_s,$x,$y,$drzava_id)
    {
        $this->id=$id;
        $this->oznaka=$oznaka;
        $this->naziv=$naziv;
        $this->broj_stanovnika=$broj_s;
        $this->x=$x;
        $this->y=$y;
        $this->drzava_id=$drzava_id;
    }
}

