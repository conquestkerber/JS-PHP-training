<?php

class Vozac {
    public $ime;
    public $prezime;
    public $tim;
    public $brojkrugova;
    
    function __construct($i,$p,$t,$b) {
        $this->ime = $i;
        $this->prezime=$p;
        $this->tim=$t;
        $this->brojkrugova= $b;
        
    }
}

