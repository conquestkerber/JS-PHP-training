<?php

function dodaj_film ($naslov, $reditelj, $godina)
{
    // otvaranje konekcije na bazu podataka sa sledecim parametrima
    // "localhost"    - naziv servera baze podataka
    // "root"         - username za konekciju na bazu
    // ""             - password za konekciju na bazu
    // "it_zadatak_2" - naziv baze kojoj se pristupa
    $con = new mysqli("localhost", "root", "", "it_zadatak_2");
    if ($con->connect_errno) {
        // u slucaju greske stampa se odgovarajuca poruka korisniku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        // konekcija je uspesno otvorena pa se izvrsava upit
        $query_text = "INSERT INTO film (naslov, reditelj, godina) VALUES ("
                . "'$naslov', '$reditelj', $godina)";
        $res = $con->query($query_text);
        // za upit tipa INSERT $res moze biti samo true ili false posto se nista ne vraca iz baze
        if (!$res) {
            print ("Upis u bazu nije uspeo");
        }
        else {
            print ("Uspesan upis u bazu");
        }
    }
}
?>
