<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'lib.php';
include 'MySmarty.php';

session_start();

$komponente = $_SESSION["komponente"];
$uspesnoSnimanje = true;
foreach ($komponente as $sifra => $komponenta)
{
     $uspesnoSnimanje &= promeniStatus($sifra, $komponenta["status"]);
}

if ($uspesnoSnimanje)
{
    print("Promene uspesno snimljene");
}
else
{
    print("Greska prilikom snimanja promena");
}
?>
