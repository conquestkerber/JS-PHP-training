<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body  bgcolor="#FFFF99">
        <form action="index.php" method ="post">
            <table>
                <tr>
                    <td><b>LBO:</b></td><td>[[$lbo]]</td><td><input type="hidden" name="lbo" value ="[[$lbo]]"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Ime:</b></td><td>[[$ime]]</td><td><input type="hidden" name="ime" value ="[[$ime]]"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Prezime:</b></td><td>[[$prezime]]</td><td><input type="hidden" name="prezime" value ="[[$prezime]]"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Pol:</b></td><td>[[$pol]]</td><td><input type="hidden" name="pol" value ="[[$pol]]"/></td><td></td>
                </tr>
                <tr>
                    <td><b>Datum rodjenja:</b></td><td>[[$dan]].[[$mesec]].[[$godina]]</td><td><input type="hidden" name="dan" value ="[[$dan]]"/><input type="hidden" name="mesec" value ="[[$mesec]]"/><input type="hidden" name="godina" value ="[[$godina]]"/></td>
                </tr>
                <tr>
                    <td><input type ="submit" name ="nazad" value ="Nazad"</td>
                    <td><input type ="submit" name ="prosledi" value ="Prosledi"</td>
                    <td></td>
                </tr>
            </table>
        </form>
    </body>
</html>
