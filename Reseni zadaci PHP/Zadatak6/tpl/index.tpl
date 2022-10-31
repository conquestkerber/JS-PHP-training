<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body  bgcolor="#FFFF99">
        <table>
            <tr><td><h4>LBO</h4></td><td><h4>Ime</h4></td><td><h4>Prezime</h4></td><td><h4>Pol</h4></td><td><h4>Datum rodjenja</h4></td></tr>
            [[foreach name="letLoop" item=osiguranik key=lboLoop from=$osiguranici]]
            <tr>
                    <td>[[$lboLoop]]</td><td>[[$osiguranik.ime]]</td><td>[[$osiguranik.prezime]]</td><td>[[$osiguranik.pol]]</td><td>[[$osiguranik.datum_rodjenja]]</td>
            </tr>
            [[/foreach]]

        </table>

        <br/>
        <hr>
        <br/>

        <form action="pregled.php" method ="post">
            <table>
                <tr>
                    <td>LBO:</td><td><input type="text" name="lbo" value ="[[$lbo]]"/></td>
                </tr>
                <tr>
                    <td>Ime:</td><td><input type="text" name="ime" value ="[[$ime]]"/></td>
                </tr>
                <tr>
                    <td>Prezime:</td><td><input type="text" name="prezime" value ="[[$prezime]]"/></td>
                </tr>
                <tr>
                    <td>Pol:</td>
                    <td>
                        M<input type="radio" value="M" name="pol" [[if $pol==M]]checked[[/if]]/>
                        Z<input type="radio" value="Z" name="pol" [[if $pol==Z]]checked[[/if]]/>
                    </td>
                </tr>
                <tr>
                    <td>Dan rodjenja:</td>
                    <td>
                        <select name="dan">
                            [[for $dan1=1 to 31]]
                            <option value="[[$dan1]]" [[if $dan==$dan1]]selected[[/if]]>[[$dan1]]</option>
                            [[/for]]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mesec rodjenja:</td>
                    <td>
                        <select name="mesec">
                            [[for $mesec1=1 to 12]]
                            <option value="[[$mesec1]]" [[if $mesec==$mesec1]]selected[[/if]]>[[$mesec1]]</option>
                            [[/for]]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Godina rodjenja:</td>
                    <td>
                        <select name="godina">
                            [[for $godina1=1900 to 2100]]
                            <option value="[[$godina1]]" [[if $godina==$godina1]]selected[[/if]]>[[$godina1]]</option>
                            [[/for]]
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type ="submit" name ="dodaj" value ="Dodaj"</td><td></td>
                </tr>
            </table>
        </form>
    </body>
</html>
