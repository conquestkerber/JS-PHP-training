<!--Ova stranica ne prikazuje nikakav dinamicki sadrzaj pa moze da se korisiti cisti HTML -->
<!--bez obzira na to sto je ekstenzija fajla .php -->
<html>
  <head>
    <title>Osnovni podaci o osiguraniku</title>
  </head>
  <body bgcolor="yellow">
      <form action="next.php" method="POST">
      <table>
          <tr>
              <td>Ime:</td>
              <td><input type="text" name="ime_text"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" name="prezime_text"/></td>
          </tr>
          <tr>
              <td>LBO:</td>
              <td><input type="text" name="lbo_text"/></td>
          </tr>
          <tr>
              <td>Nosilac licno:</td>
              <td><input type="checkbox" name="licno_check"/></td>
          </tr>
          <tr>
              <td><input type="submit" value="Dalje" name="dalje_submit"/></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
