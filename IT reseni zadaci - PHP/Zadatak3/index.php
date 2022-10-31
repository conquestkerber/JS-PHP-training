<?php
include 'lib.php';

// Ukoliko je ova stranica otvorena klikom na dugme "Prosledi" treba snimiti u bazu
// izmene prosledjene iz input polja POST metodom.
if (isset($_POST["prosledi_submit"])) {
    izmeni_studenta($_POST["indeks_hidden"], $_POST["ime_text"], $_POST["prezime_text"]);
}

// U svakom slucaju se prikazuje naredni staticki deo HTML koda - pocetak tabele.
print ('<html>
  <head>
    <title>Pregled podataka o studentima</title>
  </head>
  <body bgcolor="#FFFF99">
    <form action="index.php" method="POST">
    <table>
      <tr>
        <td><b>Broj indeksa</b></td>
        <td><b>Ime</b></td>
        <td><b>Prezime</b></td>
        <td></td>
      </tr>');

// U promenljivu $studenti se smestaju svi studenti iz baze podataka. 
$studenti = vrati_sve_studente();

// Foreach petljom se obilazi niz svih studenata. Kljuc je promenljiva $indeks,
// a vrednost je promenljiva $student koja je u stvari niz od dva elementa -
// $student["ime"] i $student["prezime"]
foreach ($studenti as $indeks => $student) {
    // Ako smo na ovu stranicu dosli klikom na link pored studenta ciji je broj indeksa
    // jednak broju indeksa tekuceg studenta u petlji, onda se podaci o tom studentu
    // prikazuju u input poljima za editovanje. 
    if (isset($_GET["student_za_izmenu"]) && $_GET["student_za_izmenu"] == $indeks) {
        print ('<tr>
            <td>' . $indeks . '<input type="hidden" name="indeks_hidden" value="' . $indeks . '"/></td>
            <td><input type="text" name="ime_text" value="' . $student['ime'] . '"/></td>
            <td><input type="text" name="prezime_text" value="' . $student['prezime'] . '"/></td>
            <td></td>
          </tr>');
    }
    // U suprotnom se podaci o studentu samo prikazuju i prikazuje se hiperlink
    // za editovanje izabranog studenta. 
    else {
        print ('<tr>
            <td>' . $indeks . '</td>
            <td>' . $student['ime'] . '</td>
            <td>' . $student['prezime'] . '</td>
            <td><a href="index.php?student_za_izmenu=' . $indeks . '">Promeni</a></td>
          </tr>');
    }
}

// Ako je bilo koji student izabran za izmenu prikazuje se i submit dugme "Prosledi"
// za snimanje izmena. 
if (isset($_GET["student_za_izmenu"])) {
    print ('<tr>
            <td><input type="submit" name="prosledi_submit" value="Prosledi"></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>');
}

// Nadalje se stampa preostali staticki deo stranice
print ('      </table>
    </form>
  </body>
</html>');
?>
