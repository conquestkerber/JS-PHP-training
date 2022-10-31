<?php

class Trka{
    public $naziv;
    public $niz=array();
    public $ukupnokrugova;
    public $najboljivozac;
    
    function __construct($n,$u) {
        
        $this->naziv=$n;
        $this->ukupnokrugova=$u;
    }
    function dodajVozaca ($v)
    {
        $this->niz[]=$v;
    }
    function povecajVozaca($i)
    {
        if($this->niz[$i]->brojkrugova<$this->ukupnokrugova)
            $this->niz[$i]->brojkrugova++;
    }
   
}

