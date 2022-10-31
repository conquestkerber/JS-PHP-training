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
      <form action="index.php" method="POST">
      <table>
          [[foreach name="loop1" item=student key=indeks from=$studenti]]
          [[if $student.za_izmenu]]
          <tr>
              <td>Indeks:</td>
              <td>[[$indeks]]</td>
          </tr>
          <tr>
              <td>Ime:</td>
              <td><input type="text" value="[[$student.ime]]" name="[[$indeks]]_ime"/></td>
          </tr>
          <tr>
              <td>Prezime:</td>
              <td><input type="text" value="[[$student.prezime]]" name="[[$indeks]]_prezime"/></td>
          </tr>
          <tr>
              <td>Godina:</td>
              <td>
                  <select name="[[$indeks]]_godina">
                  [[for $godina=1 to 4]]
                      <option value="[[$godina]]" [[if $student.godina==$godina]]selected[[/if]]>[[$godina]]</option>
                  [[/for]]
                  </select>
              </td>
          </tr>
          <tr>
              <td>Status:</td>
              <td>
                  FIB<input type="radio" value="FIB" name="[[$indeks]]_status" [[if $student.status==FIB]]checked[[/if]]/>
                  SAF<input type="radio" value="SAF" name="[[$indeks]]_status" [[if $student.status==SAF]]checked[[/if]]/>
              </td>
          </tr>
          <tr>
              <td></td>
              <td></td>
          </tr>
          [[/if]]
          [[/foreach]]

          <tr>
              <td><input type="submit" value="Odustani" name="odustani"/></td>
              <td><input type="submit" value="Prosledi" name="prosledi"/></td>
          </tr>
      </table>
      </form>
  </body>
</html>
