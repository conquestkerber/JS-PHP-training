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
      <form action="snimi.php" method="POST">
      <table>
          <tr>
              <td><h4>Sifra</h4></td><td><h4>Naziv</h4></td><td><h4>Status</h4></td>
          </tr>
          [[foreach name="loop1" item=komponenta key=sifra from=$komponente]]
          <tr>
              <td>[[$sifra]]</td>
              <td>[[$komponenta.naziv]]</td>
              <td>[[$komponenta.status]]</td>
          </tr>
          [[/foreach]]
          <tr>
              <td><a href="index.php?nazad=true">Nazad</a></td>
              <td></td>
              <td><input type="submit" value="Prosledi" name="prosledi"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
