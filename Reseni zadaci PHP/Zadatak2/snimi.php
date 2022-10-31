<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'lib.php';
include 'MySmarty.php';

$ime = '';
if (isset($_POST["ime"]))
{
    $ime = $_POST["ime"];
}
$prezime = '';
if (isset($_POST["prezime"]))
{
    $prezime = $_POST["prezime"];
}
$lbo = '';
if (isset($_POST["lbo"]))
{
    $lbo = $_POST["lbo"];
}
$posao = '';
if (isset($_POST["posao"]))
{
    $posao = $_POST["posao"];
}
$skola = '';
if (isset($_POST["skola"]))
{
    $skola = $_POST["skola"];
}

if (dodajPacijenta($lbo, $ime, $prezime, $posao, $skola))
{
    print("Dodavanje pacijenta uspesno izvrseno");
}
else
{
    print("Greska prilikom dodavanja pacijenta");
}
?>
