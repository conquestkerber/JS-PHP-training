<!DOCTYPE html>

<html>
    
    <head>
        <title>Agencija</title>
        <meta charset="utf8"/>
    </head>
    <body>
        <p><h2>Agencija: [[$agencija->naziv]], [[$agencija->adresa]]</h2></p>
    
    
        <table>
            <thead>
                <tr>
                    <th>Destinacija</th>
                    <th>Zemlja</th>
                    <th>Vrsta usluge</th>
                    <th>Cena</th>
                    <th>Prevoz ukljucen</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                [[foreach item=letovanje key=kljuc from=$agencija->listaLetovanja]]
                <form method="post" action="agencijaindex.php">
                <tr>
                    <td>[[$letovanje->destinacija]]</td>
                    <td>[[$letovanje->zemlja]]</td>
                    <td>[[$letovanje->vrsta_usluge]]</td>
                    <td>[[$letovanje->cena]]</td>
                    <td>[[$letovanje->prevoz_ukljucen]]</td>
                <input type="hidden" name="id_letovanja" value="[[$letovanje->id]]">
                    <td><input type="submit" name="submit_izmeni" value="Izmeni"></td>
                </tr>
                </form>
                [[/foreach]]
            </tbody>
        </table>
    
    [[if $index]]
    <form method="post" action="agencijaindex.php">
    <p>Destinacinja<input type="text" name="destinacija_text"></p>
    <p>Zemlja<input type="text" name="zemlja_text"></p>
    <p>Vrsta usluge <input type="radio" name="vrsta_usluge_radio" value="nocenje">nocenje 
        <input type="radio" name="vrsta_usluge_radio" value="polupansion">polupansion 
        <input type="radio" name="vrsta_usluge_radio" value="pansion">pansion 
    </p>
    <p>Cena<select name="cena_select">
            
            [[html_options values=$id output=$id]]
           </select>
    </p>
    <p><input type="checkbox" name="prevoz_ukljucen_ckeck"> prevoz ukljucen</p>
    <p><input type="submit" name="prosledi_submit" value="Prosledi"></p>
    
    
    </form>
    [[/if]]
        
    
    </body>
    
    
</html>