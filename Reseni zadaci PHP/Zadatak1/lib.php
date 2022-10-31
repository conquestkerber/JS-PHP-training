<?php

function vratiSveOsiguranike()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak1");
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
                $niz[$row["lbo"]]["ime"] = $row["ime"];
                $niz[$row["lbo"]]["prezime"] = $row["prezime"];
                $niz[$row["lbo"]]["brisi"] = false;
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

function obrisiOsiguranika($lbo)
{
    $con = new mysqli("localhost", "root", "", "zadatak1");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $res = $con->query("delete from osiguranik where lbo = " . $lbo);
        if (!$res)
        {
            print ("Query failed");
        }
        return $res;
    }
}

?>
