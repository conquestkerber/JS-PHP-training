<?php

class Paket
{
    public $oznaka;
    public $broj_proizvoda;
    public $dan;
    public $mesec;
    public $godina;
    public $lomljivo;
    public $magacin_id;
    
    function __construct($oznaka,$broj_p,$dan,$mesec,$godina,$lomljivo,$magacin_id)
    {
        $this->oznaka=$oznaka;
        $this->broj_proizvoda=$broj_p;
        $this->dan=$dan;
        $this->mesec=$mesec;
        $this->godina=$godina;
        $this->lomljivo=$lomljivo;
        $this->magacin_id=$magacin_id;
    }
    
            
}

?>

