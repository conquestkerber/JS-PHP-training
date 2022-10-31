<?php

include_once "Magacin.php";
include_once "Paket.php";

class Magacinlib
{
    function vrati_magacin()
    {
        $con=new mysqli("localhost","root","","oktobar");
        if ($con->connect_errno) 
        {
            print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else 
        {
            $res=$con->query("select * from magacin");
            if($res)
            {
             
                
                while($row=$res->fetch_assoc())
                {
                    $magacin=new Magacin($row['id'], $row['oznaka'], $row['lokacija']);
                }
                $res->close();
            }
            
            $res=$con->query("select * from paket");
            if($res)
            {
                while($row=$res->fetch_assoc())
                {
                    $paket=new Paket($row['oznaka'], $row['broj_proizvoda'], $row['dan'], $row['mesec'], $row['godina'], $row['lomljivo'], $row['magacin_id']);
                    $magacin->dodajPaket($paket);
                            
                }
                $res->close();
            }
            
            return $magacin;
        }
    }
    
    function izmeni_paket(Paket $paket)
    {
        $con=new mysqli("localhost","root","","oktobar");
        if($con->connect_errno)
        {
            print ("Connection error (" . $con->connect_errno . "): $con->connect_error");
        }
        else
        {
            $query_string="UPDATE paket SET broj_proizvoda='$paket->broj_proizvoda',dan='$paket->dan',mesec='$paket->mesec',godina='$paket->godina',lomljivo='$paket->lomljivo' WHERE oznaka='$paket->oznaka'";
        
            $result=$con->query($query_string);
        }
    }
}

?>

