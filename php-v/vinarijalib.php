<?php

include_once 'Vinarija.php';
include_once 'Vino.php';

class vinarijalib
{
    function ucitaj_vinariju()
    {
        $con=new mysqli("localhost","root","","januar");
        
        if($con->connect_errno)
        {
            print ("Connection error: (".$con->connect_errno."): $con->connect_error");
        }
        else
        {
            $result=$con->query("select * from vinarija");
            
            if($result)
            {
                while($row=$result->fetch_assoc())
                        $vinarija=new Vinarija ($row['id'], $row['naziv'], $row['lokacija']);
                $result->close();
            }
            else
            {
                print ("Query failed");
            }
            
            $result=$con->query("select * from vino");
            
            if($result)
            {
                while($row=$result->fetch_assoc())
                {
                        $vino=new Vino ($row['id'], $row['naziv'], $row['vrsta'],$row['penusavo'],$row['procenat_alkohola'],$row['godina_berbe'],$row['vinarija_id']);
                
                        $vinarija->dodajVino($vino);
                }
                $result->close();
            }
            else
            {
                print ("Query failed");
            }
            
            return $vinarija;
        }
    }
    
    function izmeni_vino(Vino $vino)
    {
        $con=new mysqli("localhost","root","","januar");
        
        if($con->connect_errno)
        {
            print ("Connect error (".$con->connect_errno."): $con->connect_error");
        }
        else
        {
            $query_string="UPDATE vino SET naziv='$vino->naziv', vrsta='$vino->vrsta', penusavo='$vino->penusavo', procenat_alkohola='$vino->procenat_alkohola', godina_berbe='$vino->godina_berbe' WHERE id='$vino->id'";
        
            $result=$con->query($query_string);
            
            if($result)
            {
                $con->close();
            }
            else
            {
                print ("Greska pri izvrsenju upita");
            }
        }
    }
}

?>

