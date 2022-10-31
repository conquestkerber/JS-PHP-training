<?php

class Drzava
{
    public $id;
    public $naziv;
    public $oznaka;
    public $nizGradova=array();
    
    function __construct($id,$n,$o) {
        
        $this->id=$id;
        $this->naziv=$n;
        $this->oznaka=$o;
    }
    
    function dodajGrad($grad)
    {
        $this->nizGradova[]=$grad;
       
    }
    
    function izracunajRastojanje($cekirani)
    {
        if(count($cekirani)!=2)
        {
            $r="Broj cekiranih gradova nije odgovarajuci";
            return $r;
        }
        else
        {
            $prvi=$cekirani[0];
            $drugi=$cekirani[1];
            
            $p1=$this->nizGradova[$prvi]->naziv;
            $p2=$this->nizGradova[$drugi]->naziv;
            
            $r=sqrt(pow ($this->nizGradova[$prvi]->x-$this->nizGradova[$drugi]->x,2)+pow ($this->nizGradova[$prvi]->y-$this->nizGradova[$drugi]->y,2));
            $r="Rastojanje izmedju gradova: $p1 i $p2 je: $r";
            return $r;
        }
            
    }
}

