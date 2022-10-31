<?php

include_once 'Agencija.php';
include_once 'Letovanje.php';
include_once 'IAgencijaService.php';

class agencijalib implements IAgencijaService
{
    function vrati_agenciju() 
    {
        $con = new mysqli("localhost", "root", "", "jun");
    if ($con->connect_errno) {
        // u slucaju greske odstampati odgovarajucu poruku
        print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
    }
    else {
        // $res je rezultat izvrsenja upita
        $res = $con->query("select * from agencija");
        if ($res) 
        {
            
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
				
                $agencija=new Agencija($row['id'],$row['naziv'],$row['adresa']);
                
				// TODO: DODATI KOD ZA SMESTANJE PODATAKA U ASOCIJATIVNI NIZ!!!!

            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            
        }
        
        $res = $con->query("select * from letovanje");
        if ($res) 
        {
            
            // fetch_assoc() pribavlja jedan po jedan red iz rezulata 
			// u redosledu u kom ga je vratio db server
            while ($row = $res->fetch_assoc()) {
				
                $letovanje=new Letovanje($row['id'], $row['destinacija'], $row['zemlja'], $row['vrsta_usluge'], $row['cena'], $row['prevoz_ukljucen'], $row['agencija_id']);
                $agencija->dodajLetovanje($letovanje);
				// TODO: DODATI KOD ZA SMESTANJE PODATAKA U ASOCIJATIVNI NIZ!!!!

            }
            // zatvaranje objekta koji cuva rezultat
            $res->close();
            return $agencija;
        }
        
        else
        {
            print ("Query failed");
        }
    }
    }
    
    function azuriraj_letovanje(Letovanje $letovanje) 
    {
            $con = new mysqli("localhost", "root", "", "jun");
        if ($con->connect_errno) {
            // u slucaju greske odstampati odgovarajucu poruku
            print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else 
        {
            // $res je rezultat izvrsenja upita
            $query_string="UPDATE letovanje SET  destinacija='$letovanje->destinacija',zemlja='$letovanje->zemlja',vrsta_usluge='$letovanje->vrsta_usluge',cena='$letovanje->cena',prevoz_ukljucen='$letovanje->prevoz_ukljucen',agencija_id='$letovanje->agencija_id' WHERE id='$letovanje->id'";
            $res = $con->query($query_string);
            if ($res) 
            {

                // zatvaranje objekta koji cuva rezultat
                //$res->close();
                
            }
            else
            {
                print ("Query failed");
            }
        }
    }

}

?>

