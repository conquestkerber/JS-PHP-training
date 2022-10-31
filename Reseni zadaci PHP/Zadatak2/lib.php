<?php

function vratiSvePacijente()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak2");
    if ($con->connect_errno)
    {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from pacijent");
        if ($res)
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc())
            {
                $niz[$row["lbo"]]["ime"] = $row["ime"];
                $niz[$row["lbo"]]["prezime"] = $row["prezime"];
                $niz[$row["lbo"]]["posao"] = $row["posao"];
                $niz[$row["lbo"]]["skola"] = $row["skola"];
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

function dodajPacijenta($lbo, $ime, $prezime, $posao, $skola)
{
    $con = new mysqli("localhost", "root", "", "zadatak2");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $res = $con->query("INSERT INTO pacijent (lbo, ime, prezime, posao, skola) VALUES ('$lbo', '$ime', '$prezime', '$posao', '$skola')");
        if (!$res)
        {
            print ("Query failed");
        }
        return $res;
    }
}

?>
