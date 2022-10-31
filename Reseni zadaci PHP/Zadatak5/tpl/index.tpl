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
  <body bgcolor="#FFFF99">
      <form action="izmena.php" method="POST">
      <table>
          <tr>
              <td><h4>Indeks</h4></td><td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>Godina</h4></td><td><h4>Status</h4></td><td><h4>Za izmenu</h4></td>
          </tr>
          [[foreach name="loop1" item=student key=indeks from=$studenti]]
          <tr>
              <td>[[$indeks]]</td>
              <td>[[$student.ime]]</td>
              <td>[[$student.prezime]]</td>
              <td>[[$student.godina]]</td>
              <td>[[$student.status]]</td>
              <td><input type="checkbox" name="check[]" value="[[$indeks]]"
                  [[if $student.za_izmenu]]checked[[/if]]/></td>
          </tr>
          [[/foreach]]
          <tr>
              <td><input type="submit" value="Izmeni" name="izmeni"/></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
      </table>
      </form>
  </body>
</html>
