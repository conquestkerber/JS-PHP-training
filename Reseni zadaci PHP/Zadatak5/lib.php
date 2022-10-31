<?php

function vrati_sve_studente()
{
    // funkcija za konektovanje na bazu podataka
    // parametri su server_baze, username, password, ime_baze
    $con = new mysqli("localhost", "root", "", "zadatak5");
    if ($con->connect_errno)
    {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from student");
        if ($res)
        {
            $niz = array();
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
	    // u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc())
            {
                $indeks = $row['indeks'];
                $niz[$indeks]['ime'] = $row['ime'];
                $niz[$indeks]['prezime'] = $row['prezime'];
                $niz[$indeks]['godina'] = $row['godina'];
                $niz[$indeks]['status'] = $row['status'];
                $niz[$indeks]['za_izmenu'] = false;
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

function izmeni_studenta($indeks, $ime, $prezime, $godina, $status)
{
    $con = new mysqli("localhost", "root", "", "zadatak5");
    if ($con->connect_errno)
    {
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else
    {
        $res = $con->query("update student set ime = '$ime', prezime = '$prezime', godina = '$godina', status = '$status' where indeks = '$indeks '");
        if (!$res)
        {
            print ("Query failed");
        }
        return $res;
    }
}

?>
