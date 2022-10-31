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
          <input type="hidden" name="ime" value="[[$ime]]"/>
          <input type="hidden" name="prezime" value="[[$prezime]]"/>
          <input type="hidden" name="lbo" value="[[$lbo]]"/>
          <table>
              </tr>
                  [[if $starost > 18]]
                  <td>Posao:</td>
                  <td><input type="text" name="posao"/></td>
                  [[else]]
                  <td>Skola:</td>
                  <td><input type="text" name="skola"/></td>
                  [[/if]]
              </tr>
              <tr>
                  <td><a href="index.php?ime=[[$ime]]&prezime=[[$prezime]]&lbo=[[$lbo]]&starost=[[$starost]]">Nazad</a></td>
                  <td><input type="submit" value="Snimi" name="snimi"/></td>
              </tr>
          </table>
      </form>
  </body>
</html>
