//hint1 : šta bi se desilo da smo stubiću stavili top marginu?
// Da li smo tako mogli da spustimo stubić?
//hint 2: problem može da se reši i stilovima, probajte (display i position)

//Zadatak nije završen, nedostaje responsiv dizajn!!!!
function Radnik(ime, prezime) {
	var that=this;
	this.ime=ime;
	this.prezime=prezime;
	this.niz=[];
	
	this.dodajIzvestaj = function(plata) {
		that.niz.push(plata);
	};
	
	(function () {
		if(that.ime===null || that.ime ==="" || that.ime===undefined)
			that.ime="Nepoznat";
	})();
	
	this.maxPlata = function()
	{
		var max=0;
		that.niz.forEach(function(el)
		{
			if(el.iznos>max)
				max=el.iznos;
		});
		return max;
	}

	
	this.crtaj=function(host)
	{
		var lab1 = document.createElement("label");
		lab1.innerHTML = that.ime +" " + that.prezime;		
		host.appendChild(lab1);
		
		
		var container = document.createElement("div");
		container.className = "kontejner";
		host.appendChild(container);
		
		var max = that.maxPlata();
		
		that.dodajLabele(container,max);
		that.niz.forEach(function(el,index)
		{
			var visina = el.iznos/max;
			console.log(visina);
			el.crtaj(container, visina);
		});
	};
	
	this.dodajLabele=function(host,visina)
	{
		var kontejnerZaKontejner = document.createElement("div");
		host.appendChild(kontejnerZaKontejner);
		kontejnerZaKontejner.className = "kzk";
		
		var stubKontejner = document.createElement("div");
		stubKontejner.className="stub-kontejner2";
		kontejnerZaKontejner.appendChild(stubKontejner);
		
		var lab1 = document.createElement("label");
		lab1.innerHTML = visina;
		stubKontejner.appendChild(lab1);
		
		var lab2 = document.createElement("label");
		lab2.className = "labelica";
		lab2.innerHTML=0;
		kontejnerZaKontejner.appendChild(lab2);
	};
}
function Izvestaj(godina,iznos,mesec)
{
	var that=this;
	
	this.godina = godina;
	this.iznos = iznos;
	this.mesec=mesec;
	
	this.crtaj=function(host,visina)
	{
		var kontejnerZaKontejner = document.createElement("div");
		host.appendChild(kontejnerZaKontejner);
		kontejnerZaKontejner.className = "kzk";
		var stubKontejner = document.createElement("div");
		stubKontejner.className="stub-kontejner";
		kontejnerZaKontejner.appendChild(stubKontejner);
		console.log(stubKontejner.style.height);
		var nekiDiv = document.createElement("div");
		nekiDiv.style.height = ((1-visina)*100)+"%";
		console.log(stubKontejner);
		nekiDiv.className="stub";
		stubKontejner.appendChild(nekiDiv);
		
		var lab1 = document.createElement("label");
		lab1.innerHTML = that.mesec;
		kontejnerZaKontejner.appendChild(lab1);
	};
}