<?php
include_once 'Vozac.php';
include_once 'Trka.php';
class Lib{
function vrati_sve_iz_tabele_vozac() {
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "lab4zad3");
    if ($con->connect_errno) {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from vozac");
        if ($res) {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
				
                $niz[$row['id']]=new Vozac($row['ime'],$row['prezime'],$row['tim'],$row[
                    'broj_predjenih_krugova']);
                
				// TODO: DODATI KOD ZA SMESTANJE PODATAKA U ASOCIJATIVNI NIZ!!!!

            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $niz;
        }
        else
        {
            print ("Query failed");
        }
    }
}
function vrati_sve_iz_tabele_trka() {
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "lab4zad3");
    if ($con->connect_errno) {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from trka");
        if ($res) {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
				
                $niz[$row['id']]=new Trka($row['naziv'],$row['ukupan_broj_krugova']);
                
				// TODO: DODATI KOD ZA SMESTANJE PODATAKA U ASOCIJATIVNI NIZ!!!!

            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $niz;
        }
        else
        {
            print ("Query failed");
        }
    }
}
function izmeni_vozaca(Vozac $vozac) {
        // konektovanje na bazu podataka se izvr??ava pozivom konstruktora klase mysqli
        // parametri su server baze podataka, username, password, ime baze
        $konekcija = new mysqli("localhost", "root", "", "lab4zad3");
        // koristimo charset utf8 za prikaz karaktera van osnovne ASCII tabele
        $konekcija->set_charset('utf8');
        if ($konekcija->connect_errno) {
            // u slu??aju gre??ke pri povezivanju od??tampati odgovaraju??u poruku
            print ("Gre??ka pri povezivanju sa bazom podataka ($konekcija->connect_errno): $konekcija->connect_error");
        } else {
            $query_text = "UPDATE vozac SET broj_predjenih_krugova='$vozac->brojkrugova'"
                    . "WHERE ime='$vozac->ime' and prezime='$vozac->prezime'";
            $rezultat = $konekcija->query($query_text);

            // ovde $rezultat moze biti samo true ili false posto se nista ne vraca iz baze
            if ($rezultat) {
                // zatvaranje konekcije
                $konekcija->close();
            }
            else {
                if ($konekcija->errno) {
                    // u slu??aju gre??ke pri izvr??enju upita od??tampati odgovarajucu poruku
                    print ("Gre??ka pri izvrsenju upita ($konekcija->errno): $konekcija->error");
                } else {
                    // u slucaju gre??ke pri izvr??enju upita od??tampati odgovarajucu poruku
                    print ("Nepoznata gre??ka pri izvrsenju upita");
                }
            }
        }
    }
}
?>
