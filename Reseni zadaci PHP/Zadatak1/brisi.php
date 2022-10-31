<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'lib.php';
include 'MySmarty.php';

session_start();

$osiguranici = $_SESSION["osiguranici"];
$uspesnoBrisanje = true;

foreach ($osiguranici as $lbo => $osiguranik)
{
    if ($osiguranik["brisi"])
    {
        $uspesnoBrisanje &= obrisiOsiguranika($lbo);
    }
}
if ($uspesnoBrisanje)
{
    print("Brisanje osiguranika uspesno izvrseno");
}
else
{
    print("Greska prilikom brisanja osiguranika");
}
?>
