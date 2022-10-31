<?php
// Strana koja se izvrsava kroz AJAX posle klika na dugme Prosledi.

include 'lib.php';

$uspesno = false;

// Preuzimanje podataka prosledjenih sa klijenta.
if (isset($_REQUEST["indeks"]) && isset($_REQUEST["ime"])
        && isset($_REQUEST["prezime"]) && isset($_REQUEST["godina"]))
{
    $student = new Student($_REQUEST["indeks"], $_REQUEST["ime"],
        $_REQUEST["prezime"], $_REQUEST["godina"]);
    if (dodaj_studenta($student))
    {
        // Ako je dodavanje studenta uspelo ponovo se ucitava niz svih studenata iz baze
        // da bi se osvezio prikaz na klijentu. Ovo je moglo da se odradi i kroz poseban
        // AJAX poziv.
        $studenti = vrati_sve_studente();
        $uspesno = true;
        // Objekti se vracaju u JSON formatu da bi JQuery obrada bila jednostavna na klijentu.
        echo json_encode($studenti);
    }
}
if (!$uspesno)
{
    // Ako je doslo do greske prilikom rada sa bazom podataka klijentu se prosledjuje
    // samo string "greska". 
    echo json_encode("greska");
}

?>
