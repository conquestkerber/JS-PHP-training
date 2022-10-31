<?php
// Ovde unos iz prethodne stranice tj. sadrzaj GET promenljivih definise izgled
// ove stranice pa mora da se koristi PHP kod.

// Preuzimanje vrednosti koje su prosledjene iz stranice unos1.html i smestanje u
// lokalne promenljive.
$broj = $_GET["broj_text"];

// Naredna print naredba stampa neophodni staticki deo HTML koda.
print ('<html>
  <head>
    <title>Unos podataka o filmovima</title>
  </head>
  <body bgcolor="yellow">
    <form action="snimanje.php" method="POST">
    <table>');

// For petlja - ponoviti kontrole za unos podataka o jednom filmu onoliko puta
// koliko je zadato vrednoscu promenljive $broj
for ($i = 0; $i < $broj; $i++) {
    print ('<tr>
      <td>Naslov:</td>
      <td><input type="text" name="naslov_text[]"/></td>
      <td>Reditelj:</td>
      <td><input type="text" name="reditelj_text[]"/></td>
      <td>Godina:</td>
      <td><input type="text" name="godina_text[]"/></td>
    </tr>');
}

// Nadalje se stampa preostali staticki deo stranice
print ('    <tr>
      <td><input type="submit" value="Snimi" name="snimi_submit"/></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
      </table>
      </form>
  </body>
</html>');
?>
