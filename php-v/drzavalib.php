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
            // U slučaju greške pri povezivanju odštampati odgovarajuću poruku.
            print ("Greška pri povezivanju sa bazom podataka ($konekcija->connect_errno): $konekcija->connect_error");
        } else {
            // Priprema se upit za izvršenje i vraća se objekat klase mysqli_stmt.
            // Umesto vrednosti parametara stavlja se znak ?. 
            $naredba = $konekcija->prepare("INSERT INTO grad (id, oznaka, naziv, broj_stanovnika, x, y, drzava_id) VALUES ("
                    . "?, ?, ?, ?, ?, ?, ?)");
            // Povezivanje naredbe i parametara za upit. 
            // "i" označava celobrojni tip podataka. 
            // "s" označava string tip podataka.
            // "d" označava realni tip podataka.
            // PARAMETRI SE NAVODE PO REDOSLEDU U KOM SE OČEKUJU U PRIPREMLJENOM UPITU!
            $naredba->bind_param('issiiii', $grad->id, $grad->oznaka, $grad->naziv, $grad->broj_stanovnika,$grad->x, $grad->y, $grad->drzava_id);
            // Izvršenje upita nad bazom podataka.         
            $rezultat = $naredba->execute();
            // Zatvaranje naredbe i konekcije, nema preuzimanja podataka iz baze. 
            $naredba->close();
            $konekcija->close();
            // Ovde $rezultat moze biti samo true ili false posto se nista ne vraca iz baze
            if (!$rezultat) {
                if ($konekcija->errno) {
                    // U slučaju greške pri izvršenju upita odštampati odgovarajucu poruku
                    print ("Greška pri izvrsenju upita ($konekcija->errno): $konekcija->error");
                } else {
                    // U slučaju greške pri izvršenju upita odštampati odgovarajucu poruku
                    print ("Nepoznata greška pri izvrsenju upita");
                }
            }
        }
    }
}

?>

