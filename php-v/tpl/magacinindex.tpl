<!DOCTYPE html>
<html>
    
    <head>
        <title>Magacin</title>
        <meta charset="UTF8">
    </head>
    <body>
        
        <h1>Magacin: [[$magacin->oznaka]], lokacija: [[$magacin->lokacija]]</h1>>
        
        <table>
            <thead>
                <tr>
                    <th>Oznaka</th> 
                    <th>Br. komada</th>
                    <th>Dan</th>
                    <th>Mesec</th>
                    <th>Godina</th>
                    <th>Lomljivo</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                [[foreach item=paket key=kljuc from=$magacin->listaPaketa]]
                <tr>
                    <td> [[$paket->oznaka]]</td>
                    <td> [[$paket->broj_proizvoda]]</td>
                    <td> [[$paket->dan]]</td>
                    <td> [[$paket->mesec]]</td>
                    <td> [[$paket->godina]]</td>
                    <td> [[$paket->lomljivo]]</td>
                    <td> <a href="magacinindex.php?paket_za_izmenu=[[$kljuc]]">izmeni</a></td>
                </tr>
                [[/foreach]]
            </tbody>
        </table>
        
        [[if $izmeni]]
        <form method="get" action="magacinindex.php">
            <p>Oznaka
                <input type="text" name="oznaka">
            </p>
            <p>Br. komada
                <input type="text" name="br_komada">
            </p>
            <p>Rok trajanja sadrzaja paketa</p>
            
            <p>Dan: 
                <select name="dan">
                 
                    <option value="1" >1 </option>
                    <option value="2" >2 </option>
                    <option value="3" >3 </option>
                </select>
            </p>
            
            <p>Mesec: 
                <select name="mesec">
                    
                    <option value="1" >1 </option>
                    <option value="2" >2 </option>
                    <option value="3" >3 </option>
                </select>
            </p>
            
            <p>Godina: 
                <select name="godina">
                  
                    <option value="2017" >2017 </option>
                    <option value="2018" >2018 </option>
                    <option value="2019" >2019 </option>
                </select>
            </p>
            
            <p><input type="checkbox" name="lomljivo">Sadrzaj paketa je lomljiv</p>
            <p><input type="submit" name="prosledi" value="OK"></p>
        </form>
        
        [[/if]]
    </body>
    
</html>