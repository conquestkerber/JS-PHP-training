<?php
// Ovde se koristi funkcija definisana u lib.php pa se koristi linija ispod 
// da bi ta funkcija bila dostupna u ovom fajlu. 
include 'lib.php';

// Na stranici unos2.php imena input polja su indeksirana - naslov_text[], reditelj_text[]
// i godina_text[]. Zbog toga se na ovoj stranici prosledjene vrednosti ocekuju u nizovima
// $_POST["naslov_text"][], $_POST["reditelj_text"][] i $_POST["godina_text"][].
// Pomocu foreach petlje se krecemo kroz niz $_POST["naslov_text"][], a $i je pomocni
// brojac za pristup nizovima $_POST["reditelj_text"][] i $_POST["godina_text"][].
// Koriscenje brojaca $i je moguce jer sva 3 niza u nasem slucaju imaju isti broj elemenata.
$i = 0;
foreach ($_POST["naslov_text"] as $naslov) {
    $reditelj = $_POST["reditelj_text"][$i];
    $godina = $_POST["godina_text"][$i];
    dodaj_film($naslov, $reditelj, $godina);
    $i++;
}
?>
