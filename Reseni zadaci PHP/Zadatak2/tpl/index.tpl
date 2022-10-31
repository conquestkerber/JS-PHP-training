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
      <form action="pregled.php" method="POST">
      <table>
          <tr>
              <td>LBO:</td>
              <td><input type="text" name="lbo" value="[[$lbo]]"/></td>
          </tr>
          <tr>
              <td>Ime:</td>
              <td><input type="text" name="ime" value="[[$ime]]"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" name="prezime" value="[[$prezime]]"/></td>
          </tr>
          <tr>
              <td>Starost:</td>
              <td>
                <select name="starost"/>
                    [[foreach name="loop1" item=god key=sifra from=$izbor_godina]]
                        <option value="[[$god]]" [[if $god eq $starost]]selected[[/if]]>[[$god]]</option>
                    [[/foreach]]
                </select>
              </td>
          </tr>
          <tr>
              <td><input type="submit" value="Dalje" name="dalje"/></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
