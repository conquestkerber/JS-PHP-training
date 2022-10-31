function Radnik(ime,prezime){
	var that=this;
	this.ime=ime;
	this.prezime=prezime;
	this.niz=[]
	
	this.dodajIzvestaj = function(plata)
	{
		that.niz.push(plata);
	}
	
	(function(){
		if(that.ime==="" || that.ime===undefined || that.ime===null)
			that.ime="Nepoznat";
	})();
	
	this.maxPlata=function()
	{
		var max=0;
		that.niz.forEach(function(el)
		{
			if(el.iznos>max)
				return el.iznos;
		})
		return max;
	}
	
	this.crtaj=function(host)
	{
		var lab1 = document.createElement("label");
		lab1.innerHTML="that.ime" + " " + "that.prezime";
	    host.appendChild(lab1);
		
		var kontejner = document.createElement("div");
		div.className="kontejner";
		host.appendChild(kontejner);
		
		var max=that.maxPlata;
		
		that.dodajLabele(kontejner,max);
		that.niz.forEach(function(el,index))
		{
			var visina=el.iznos/max;
			console.log(visina);
			el.crtaj(kontejner,visina);
		};
	};
	
	this.dodajLabele=function(host,visina)
	{
		var kontejnerZaKontejner = document.createElement("div");
		host.appendChild(kontejnerZaKontejner);
		kontejnerZaKontejner.className="kzk";
		
		var stubKontejnera = document.createElement("div");
		stubKontejnera.className="sk";
		kontejnerZaKontejner.appendChild(stubKontejnera);
		
		var lab1 = document.createElement("label");
		lab1.innerHTML=visina;
		stubKontejnera.appendChild(lab1);		
		
		var lab2 = document.createElement("label");
		lab2.className="labelica";
		lab2.innerHTML=0;
		kontejnerZaKontejner.appendChild(lab2);
	};
}

function Izvestaj(godina,iznos,mesec)
{
	var that=this;
	this.godina=godina;
	this.iznos=iznos;
	this.mesec=mesec;
	
	that.crtaj=function(host)
	{
		var kontejnerZaKontejner = document.createElement("div");
		host.appendChild(kontejnerZaKontejner);
		kontejnerZaKontejner.className="kzk";
		
		var stubKontejnera = document.createElement("div");
		stubKontejnera.className="sb2";
	    host.appendChild(stubKontejnera);
		
		console.log(stubKontejnera.style.height);
		var nekiDiv=document.createElement("div");
		nekiDiv.style.height=((1-visina)*100)+"%";
		console.log(stubKontejnera);
		nekiDiv.className="stub";
		stubKontejnera.appendChild(nekiDiv);
		
		var lab1=document.createElement("label");
		lab.innerHTML = that.mesec;
		kontejnerZaKontejner.appendChild(lab1);
	}
}
   