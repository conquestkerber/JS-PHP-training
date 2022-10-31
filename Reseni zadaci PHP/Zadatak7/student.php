<?php

// Klasa sa osnovnim podacima o studentu.
// Koristi se samo za komunikaciju izmedju klijenta i servera pa
// nema nijednu metodu (osim konstruktora). 
class Student {

    var $indeks;
    var $ime;
    var $prezime;
    var $godina;

    public function Student($indeks, $ime, $prezime, $godina)
    {
        $this->indeks = $indeks;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->godina = $godina;
    }
}

?>