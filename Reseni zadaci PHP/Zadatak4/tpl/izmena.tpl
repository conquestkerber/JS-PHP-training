<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body bgcolor="yellow">
      <form action="index.php" method="POST">
      <input type="hidden" value="[[$radnik.jmbg]]" name="jmbg"/>
      <table>
          <tr>
              <td>Ime:</td>
              <td><input type="text" value="[[$radnik.ime]]" name="ime"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" value="[[$radnik.prezime]]" name="prezime"/></td>
          </tr>

          <tr>
              <td><input type="submit" value="Odustani" name="odustani"/></td>
              <td><input type="submit" value="Prosledi" name="prosledi"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
