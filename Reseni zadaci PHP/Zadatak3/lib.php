<?php

function vratiSveKomponente()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak3");
    if ($con->connect_errno)
    {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from komponenta");
        if ($res)
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc())
            {
                $niz[$row["sifra"]]["naziv"] = $row["naziv"];
                $niz[$row["sifra"]]["status"] = $row["status"];
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

function promeniStatus($sifra, $status)
{
    $con = new mysqli("localhost", "root", "", "zadatak3");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $res = $con->query("update komponenta set status = '$status' where sifra = '$sifra'");
        if (!$res)
        {
            print ("Query failed");
        }
        return $res;
    }
}

?>
