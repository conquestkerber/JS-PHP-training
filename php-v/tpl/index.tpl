<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <p>Naziv trke: [[$trka->naziv]] </p>
        <table>
            <thead></thead>
            <tbody>
                [[$indeks=0]]
                [[foreach name="trka" item=vozac key=kljuc from=$trka->niz]]
                <tr>
                    <td>[[$vozac->ime]]</td>
                    <td>[[$vozac->prezime]]</td>
                    <td>[[$vozac->tim]]</td>
                    <td>[[$vozac->brojkrugova]]</td>
                    <td><a href='index.php?vozaczaizmenu=[[$indeks]]'>Dodaj</a></td>
                </tr>
                [[$indeks=$indeks+1]]
                [[/foreach]]
            </tbody>
        </table>
        <p>  </p>
    </body>
</html>