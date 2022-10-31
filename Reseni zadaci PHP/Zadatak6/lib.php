<?php

function vrati_sve_osiguranike()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak6");
    if ($con->connect_errno)
    {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    } 
    else
    {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from osiguranik");
        if ($res)
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
            // u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc())
            {
                $lbo = $row['lbo'];
                $niz[$lbo]['ime'] = $row['ime'];
                $niz[$lbo]['prezime'] = $row['prezime'];
                $niz[$lbo]['pol'] = $row['pol'];
                $niz[$lbo]['datum_rodjenja'] = $row['datum_rodjenja'];
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

function dodaj_osiguranika($lbo, $ime, $prezime, $pol, $datum_rodjenja)
{
    $con = new mysqli("localhost", "root", "", "zadatak6");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $query_text = "INSERT INTO osiguranik (lbo, ime, prezime, pol, datum_rodjenja) VALUES ("
                . "'$lbo', '$ime', '$prezime', '$pol', '$datum_rodjenja')";
        $res = $con->query($query_text);
        if (!$res)
        {
            print ("Query failed");
        }
    }
}


?>
