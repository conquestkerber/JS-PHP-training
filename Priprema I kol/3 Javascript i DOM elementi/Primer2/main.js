document.body.onload = function()
{
    var naziviPolja = ["Ime", "Prezime", "Adresa", "Lozinka", "Datum rodjenja", "Telefon"];
    var tipoviPolja = ["text", "text", "text", "password", "date", "number"];
    
    var mainElement = document.getElementById("main");
    
    var formularDiv = document.createElement("div");
    formularDiv.className = "formularDiv";
    mainElement.appendChild(formularDiv);
    
    for(var i=0; i<naziviPolja.length; i++)
    {
        // U okviru kontrole ne dodeljivati id jer ce vise instanci te kontrole ima isti id
        var labela = document.createElement("label");
        labela.className = "labela";
        labela.type = tipoviPolja[i];
        labela.innerHTML = naziviPolja[i];
        formularDiv.appendChild(labela);
        
        
        var polje = document.createElement("input");
        polje.className = "polje";
        polje.type = tipoviPolja[i];
        polje.name = naziviPolja[i];
        formularDiv.appendChild(polje);
        
        formularDiv.appendChild(document.createElement("br"));
    }
    //probajte da ovu petlju prepravite u forEach
    
    var btn = document.createElement("button");
    btn.innerHTML = "Prosledi";
    btn.type = "submit";
    btn.className = "submit";

    btn.addEventListener("click", validacija);
    formularDiv.appendChild(btn);
}


