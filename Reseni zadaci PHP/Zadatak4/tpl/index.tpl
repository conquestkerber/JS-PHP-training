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
      <form action="izmena.php" method="POST">
      <table>
          <tr>
              <td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>JMBG</h4></td><td><h4>Za izmenu</h4></td>
          </tr>
          [[foreach name="loop1" item=radnik key=jmbg from=$radnici]]
          <tr>
              <td>[[$radnik.ime]]<input type="hidden" name="[[$jmbg]]_ime" value="[[$radnik.ime]]"/></td>
              <td>[[$radnik.prezime]]<input type="hidden" name="[[$jmbg]]_prezime" value="[[$radnik.prezime]]"/></td>
              <td>[[$jmbg]]</td>
              <td><input type="radio" name="radio" value="[[$jmbg]]"
                  [[if $jmbg==$selected_jmbg]]checked[[/if]]/></td>
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
