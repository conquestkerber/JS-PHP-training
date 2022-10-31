<?php
// Ovde se koristi funkcija definisana u lib.php pa se koristi linija ispod 
// da bi ta funkcija bila dostupna u ovom fajlu. 
include 'lib.php';

// Moguce je da promenljive $_POST["lbo_nosioca_text"] i $_POST["zaposlenje_text"]
// iz prethodne stranice uopste nisu postavljene pa se zato vrsi provera pozivom
// funkcije isset. 
$lbo_nosioca = '';
if (isset($_POST["lbo_nosioca_text"]))
{
    $lbo_nosioca = $_POST["lbo_nosioca_text"];
}
$zaposlenje = '';
if (isset($_POST["zaposlenje_text"]))
{
    $zaposlenje = $_POST["zaposlenje_text"];
}

// Promenljive $_POST["lbo_hidden"], $_POST["ime_hidden"] i $_POST["prezime_hidden"]
// su sigurno postavljene tako da mogu direktno da se proslede funkciji dodaj_osiguranika. 
dodaj_osiguranika($_POST["lbo_hidden"], $_POST["ime_hidden"], $_POST["prezime_hidden"],
        $lbo_nosioca, $zaposlenje);

?>
