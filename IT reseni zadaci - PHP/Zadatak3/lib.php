<?php

function vrati_sve_studente() {
    // otvaranje konekcije na bazu podataka sa sledecim parametrima
    // "localhost"    - naziv servera baze podataka
    // "root"         - username za konekciju na bazu
    // ""             - password za konekciju na bazu
    // "it_zadatak_3" - naziv baze kojoj se pristupa
    $con = new mysqli("localhost", "root", "", "it_zadatak_3");
    if ($con->connect_errno) {
        // u slucaju greske stampa se odgovarajuca poruka korisniku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    } else {
        // konekcija je uspesno otvorena pa se izvrsava upit
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from student");
        if ($res) {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
            // u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
                $indeks = $row['indeks'];
                $niz[$indeks]['ime'] = $row['ime'];
                $niz[$indeks]['prezime'] = $row['prezime'];
            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $niz;
        } else {
            print ("Query failed");
        }
    }
}

function izmeni_studenta($indeks, $ime, $prezime) {
    // otvaranje konekcije na bazu podataka sa sledecim parametrima
    // "localhost"    - naziv servera baze podataka
    // "root"         - username za konekciju na bazu
    // ""             - password za konekciju na bazu
    // "it_zadatak_3" - naziv baze kojoj se pristupa
    $con = new mysqli("localhost", "root", "", "it_zadatak_3");
    if ($con->connect_errno) {
        // u slucaju greske stampa se odgovarajuca poruka korisniku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    } else {
        // konekcija je uspesno otvorena pa se izvrsava upit
        $res = $con->query("update student set ime = '$ime', prezime = '$prezime' where indeks = '$indeks'");
        // za upit tipa UPDATE $res moze biti samo true ili false posto se nista ne vraca iz baze
        if (!$res) {
            print ("Upis u bazu nije uspeo");
        }
        else {
            print ("Uspesan upis u bazu");
        }
    }
}

?>
