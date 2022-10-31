<?php

class Vino
{
    public $id;
    public $naziv;
    public $vrsta;
    public $penusavo;
    public $procenat_alkohola;
    public $godina_berbe;
    public $vinarija_id;
    
    function __construct($id,$naziv,$vrsta,$penusavo,$procenat_alkohola,$godina_berbe,$vinarija_id)
    {
        $this->id=$id;
        $this->naziv=$naziv;
        $this->vrsta=$vrsta;
        $this->penusavo=$penusavo;
        $this->procenat_alkohola=$procenat_alkohola;
        $this->godina_berbe=$godina_berbe;
        $this->vinarija_id=$vinarija_id;
    }
    
}

?>

