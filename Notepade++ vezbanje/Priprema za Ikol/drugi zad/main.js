document.body.onload = function()
{
	var nazivPolja = ["Ime","Prezime","Adresa","Lozinka","Datum rodjenja","Telefon"];
	var tipPolja = ["text","text","text","password","date","number"];
	var mainElement = document.getElementById("main");
	var formularDiv=document.createElement("div");
	
	formularDiv.className = "formularDiv";
	mainElement.appendChild(formularDiv);
	for(var i=0;i<nazivPolja.length;i++)
	{
		var labela = document.createElement("label");
		labela.className="labela";
		labela.type=tipPolja[i];
		labela.innerHTML=nazivPolja[i];
		formularDiv.appendChild(labela);
		
		var polje = document.createElement("polje");
		polje.className="polje";
		polje.type=tipPolja[i];
		polje.innerHTML=nazivPolja[i];
		formularDiv.appendChild(polje);

		formularDiv.appendChild(document.createElement("br"));
	}
	 
	 var btn = document.createElement("button");
	 btn.innerHTML="Prosledi";
	 btn.type = "submit";
	 btn.className="submit";
	 btn.AddEventListener("click",validacija);
	 formularDiv.appendChild(btn);
	 
}