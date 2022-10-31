<?php

function vratiSveRadnike()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak4");
    if ($con->connect_errno)
    {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from radnik");
        if ($res)
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc())
            {
                $niz[$row["jmbg"]]["ime"] = $row["ime"];
                $niz[$row["jmbg"]]["prezime"] = $row["prezime"];
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

function izmeniRadnika($jmbg, $ime, $prezime)
{
    $con = new mysqli("localhost", "root", "", "zadatak4");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $res = $con->query("update radnik set ime = '"  . $ime . "', prezime = '" . $prezime . "' where jmbg = '" . $jmbg . "'");
        if (!$res)
        {
            print ("Query failed");
        }
        return $res;
    }
}

?>
