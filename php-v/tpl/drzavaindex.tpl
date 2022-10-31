<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        
        <form action="drzavaindex.php" method="post">
            
            <p>Oznaka: 
                <select name="oznaka_option">
                    <option value="BG" >BG </option>
                    <option value="NI" >NI </option>
                    <option value="LE" >LE </option>
                    <option value="KG" >KG </option>
                </select>
            </p> 
            
            <p>Naziv: <input type="text" name="naziv_text"></p>
            <p>Broj stanovnika: <input type="text" name="broj_stanovnika_text"></p>
            <p>X: <input type="text" name="x_text"></p>
            <p>Y: <input type="text" name="y_text"></p>
            <p> <input type="submit" value="Dodaj grad u listu" name="dodaj_submit"> </p>
            
        </form>
        
        <p><h2>Drzava: [[$drzava->naziv]], broj gradova u listi: [[count($drzava->nizGradova)]] </h2></p>
        <form action="drzavaindex.php" method="post">
            
            <table>
            
            <thead>
                <tr>
                    <td>oznaka</td>
                    <td>naziv</td>
                    <td>broj stanovnika</td>
                    <td>X</td>
                    <td>Y</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
               
                [[foreach  item=grad key=kljuc from=$drzava->nizGradova]]
                <tr>
                    <td>[[$grad->oznaka]]</td>
                    <td>[[$grad->naziv]]</td>
                    <td>[[$grad->broj_stanovnika]]</td>
                    <td>[[$grad->x]]</td>
                    <td>[[$grad->y]]</td>
                    <td>[[$kljuc]]</td>
                    <td><input type="checkbox" name="check_grad[]" value="[[$kljuc]]"></td>
                </tr>
              
                [[/foreach]]
            </tbody>
        </table>
            <p> <input type="submit" value="Prikazi rastojanje" name="prikazi_rastojanje_submit"> </p>
            
        </form>
        
    [[if $rastojanje]]
    <p><h2> [[$rastojanje]] </h2></p>
    [[/if]]
    </body>
    
    
</html>