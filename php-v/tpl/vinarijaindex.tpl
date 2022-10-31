<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf8">
        <title>Vinarija</title>
    </head>
    
    <body>
        
        <h1>Vinarija: [[$vinarija->naziv]], [[$vinarija->lokacija]]</h1>
        
        <form action="vinarijaindex.php" method="post">
        <table>
            
            <thead>
                <tr>
                    <th>Naziv </th>
                    <th>Vrsta </th>
                    <th>Penusavo </th>
                    <th>Procenat alkohola </th>
                    <th>Godina </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                [[foreach item=vino key=kljuc from=$vinarija->listaVina]]
                <tr>
                    <td>[[$vino->naziv]] </td>
                    <td>[[$vino->vrsta]] </td>
                    <td>[[$vino->penusavo]] </td>
                    <td>[[$vino->procenat_alkohola]]  </td>
                    <td>[[$vino->godina_berbe]] </td>
                    
                    <td> <input type="submit" name="submit_izmeni" value="[[$kljuc]]" > </td>
                </tr>
                [[/foreach]]
            </tbody>
            
        </table>
        </form >
        
        
        
        <form method="post" action="vinarijaindex.php">
            
            <p>
                Naziv: <input type="text" name="naziv">
            </p>
            <p>
                Vrsta: <input type="radio" name="vrsta" value="belo"> belo
                        <input type="radio" name="vrsta" value="rose"> rose
                        <input type="radio" name="vrsta" value="crveno"> crveno
                        <input type="radio" name="vrsta" value="crno"> crno
            </p>
            <p>
                <input type="checkbox" name="penusavo"> Penusavo
            </p>
            
            <p>
                Procenat alkohola <select name="procenat_alkohola">
                    <option value="10">10</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                </select>
            </p>
            
            <p>
                Berba <select name="godina">
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
            </p>
            
            
            <p>
                <input type="submit" name="prosledi" value="Prosledi">
            </p>
            
        </form>
        
    </body>
    
</html>