<?php
// Ovde unos iz prethodne stranice tj. sadrzaj POST promenljivih definise izgled
// ove stranice pa mora da se koristi PHP kod.

// Preuzimanje vrednosti koje su prosledjene iz stranice index.php i smestanje u
// lokalne promenljive.
$ime = $_POST["ime_text"];
$prezime = $_POST["prezime_text"];
$lbo = $_POST["lbo_text"];
$licno = false;
if (isset($_POST["licno_check"])) {
    $licno = true;
}

// Naredna print naredba stampa neophodni staticki deo HTML koda i hidden polja
// koja sadrze vrednosti preuzete iz prethodne strane $ime, $prezime i $lbo. Kroz
// hidden polja ove vrednosti ce biti prosledjene i narednoj strani save.php.
print ('<html>
  <head>
    <title>Dodatni podaci o osiguraniku</title>
  </head>
  <body bgcolor="yellow">
      <form action="save.php" method="POST">
      <input type="hidden" name="ime_hidden" value="' . $ime . '"/>
      <input type="hidden" name="prezime_hidden" value="' . $prezime . '"/>
      <input type="hidden" name="lbo_hidden" value="' . $lbo . '"/>
      <table>
        <tr>');


// If naredba - ako je u prethodnoj stranici cekiran checkbox izvrsice se if-grana,
// u suprotnom else-grana
if ($licno) {
print ('              <td>Zaposlenje:</td>
              <td><input type="text" name="zaposlenje_text"/></td>');
}
else {
print ('              <td>LBO nosioca:</td>
              <td><input type="text" name="lbo_nosioca_text"/></td>');
}


// Nadalje se stampa preostali staticki deo stranice
print ('          </tr>
          <tr>
              <td></td>
              <td><input type="submit" value="Snimi" name="snimi_submit"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>');
?>
