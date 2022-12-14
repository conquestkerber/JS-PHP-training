<?php

include_once "Drzava.php";
include_once "Grad.php";

class drzavalib
{
    function vrati_drzavu() {
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "septembar");
    if ($con->connect_errno) {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from drzava");
        if ($res) 
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
				
                $niz=new Drzava($row['id'],$row['naziv'],$row['oznaka']);
                
				// TODO: DODATI KOD ZA SMESTANJE PODATAKA U ASOCIJATIVNI NIZ!!!!

            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            $drzava=$niz;
        }
        
        $res = $con->query("select * from grad");
        if ($res) 
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
				
                $n=new Grad($row['id'], $row['oznaka'], $row['naziv'], $row['broj_stanovnika'], $row['x'], $row['y'], $row['drzava_id']);
                $drzava->dodajGrad($n);
				// TODO: DODATI KOD ZA SMESTANJE PODATAKA U ASOCIJATIVNI NIZ!!!!

            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $drzava;
        }
        
        else
        {
            print ("Query failed");
        }
    }
}

    function dodaj_grad(Grad $grad) {
        
    /////////////visak
        $konekcija = new mysqli("localhost", "root", "", "septembar");
        $konekcija->set_charset('utf8');
        if ($konekcija->connect_errno) {
            // U slu??aju gre??ke pri povezivanju od??tampati odgovaraju??u poruku.
            print ("Gre??ka pri povezivanju sa bazom podataka ($konekcija->connect_errno): $konekcija->connect_error");
        } else {
            // Priprema se upit za izvr??enje i vra??a se objekat klase mysqli_stmt.
            // Umesto vrednosti parametara stavlja se znak ?. 
            $naredba = $konekcija->prepare("INSERT INTO grad (id, oznaka, naziv, broj_stanovnika, x, y, drzava_id) VALUES ("
                    . "?, ?, ?, ?, ?, ?, ?)");
            // Povezivanje naredbe i parametara za upit. 
            // "i" ozna??ava celobrojni tip podataka. 
            // "s" ozna??ava string tip podataka.
            // "d" ozna??ava realni tip podataka.
            // PARAMETRI SE NAVODE PO REDOSLEDU U KOM SE O??EKUJU U PRIPREMLJENOM UPITU!
            $naredba->bind_param('issiiii', $grad->id, $grad->oznaka, $grad->naziv, $grad->broj_stanovnika,$grad->x, $grad->y, $grad->drzava_id);
            // Izvr??enje upita nad bazom podataka.         
            $rezultat = $naredba->execute();
            // Zatvaranje naredbe i konekcije, nema preuzimanja podataka iz baze. 
            $naredba->close();
            $konekcija->close();
            // Ovde $rezultat moze biti samo true ili false posto se nista ne vraca iz baze
            if (!$rezultat) {
                if ($konekcija->errno) {
                    // U slu??aju gre??ke pri izvr??enju upita od??tampati odgovarajucu poruku
                    print ("Gre??ka pri izvrsenju upita ($konekcija->errno): $konekcija->error");
                } else {
                    // U slu??aju gre??ke pri izvr??enju upita od??tampati odgovarajucu poruku
                    print ("Nepoznata gre??ka pri izvrsenju upita");
                }
            }
        }
    }
}

?>

