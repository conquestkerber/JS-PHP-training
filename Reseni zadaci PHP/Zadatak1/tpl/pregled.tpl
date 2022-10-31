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
      <form action="brisi.php" method="POST">
      <table>
          <tr>
              <td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>LBO</h4></td>
          </tr>
          [[foreach name="loop1" item=osiguranik key=lbo from=$osiguranici]]
          [[if $osiguranik.brisi]]
          <tr>
              <td>[[$osiguranik.ime]]</td>
              <td>[[$osiguranik.prezime]]</td>
              <td>[[$lbo]]</td>
          </tr>
          [[/if ]]
          [[/foreach]]
          <tr>
              <td><a href="index.php?nazad=true">Nazad</a></td>
              <td></td>
              <td><input type="submit" value="Brisanje" name="brisanje"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
