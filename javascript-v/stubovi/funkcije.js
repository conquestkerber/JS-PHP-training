Izvestaj=function(godina,mesec,iznos)
{
	var that=this;
	this.godina=godina;
	this.mesec=mesec;
	this.iznos=iznos;
	
	this.crtaj=function(main,visina)
	{
		if(main===null)
			throw Error ("Parent element nije prosledjen");
		
		var kontejner=document.createElement("div");
		kontejner.className="kontejnerIzvestaja";
		main.appendChild(kontejner);
		
		var kontejnerStuba=document.createElement("div");
		kontejnerStuba.className="kontejnerStubaIzvestaja"
		kontejner.appendChild(kontejnerStuba);
		kontejnerStuba.onclick=function()
		{
			var l=document.querySelector(".labela");
			l.innerHTML="godina: "+that.godina+", mesec: "+that.mesec+", iznos: "+that.iznos;
		}
		
		var stub=document.createElement("div");
		stub.className="stub";
		stub.style.height=((1-visina)*100)+"%";
		kontejnerStuba.appendChild(stub);
		
		var tekst=document.createElement("label");
		tekst.innerHTML=that.mesec;
		kontejner.appendChild(tekst);
		
		
	}
}

Radnik=function(ime)
{
	var that=this;
	this.ime=ime;
	this.nizIzvestaja=[];
	
	this.dodajIzvestaj=function(i)
	{
		that.nizIzvestaja.push(i);
	}
	
	this.najvecaPlata=function()
	{
		var max=0;
		that.nizIzvestaja.forEach(function(el,index){
			if(el.iznos>max)
				max=el.iznos;
		})
		return max;
	}
	
	this.prikazi=function(main)
	{
		if(main===null)
			throw Error ("Parent element nije propsledjen");
		
		var okvir=document.createElement("div");
		okvir.className="okvir";
		main.appendChild(okvir);
		
		var informacije=document.createElement("div");
		informacije.className="informacije";
		main.appendChild(informacije);
		
		var l=document.createElement("label");
		l.className="labela";
		informacije.appendChild(l);
		
		////
		var y=document.createElement("div");
		y.className="y";
		okvir.appendChild(y);
		
		var d=document.createElement("div");
		d.style.height="12%";
		y.appendChild(d);
		
		var l=document.createElement("label");
		l.innerHTML=that.najvecaPlata();
		y.appendChild(l);
		
		var d=document.createElement("div");
		d.style.height="70%";
		y.appendChild(d);
		
		var l=document.createElement("label");
		l.innerHTML=0;
		y.appendChild(l);
		/////
		
		var kontejnerRadnika=document.createElement("div");
		kontejnerRadnika.className="kontejnerRadnika";
		okvir.appendChild(kontejnerRadnika);
		
		var d=document.createElement("div");
		d.className="nazivRadnika";
		d.innerHTML=that.ime+" "+that.nizIzvestaja[0].godina;
		kontejnerRadnika.appendChild(d);
		
		that.nizIzvestaja.forEach(function(el,index){
			var vrednost=el.iznos/that.najvecaPlata();
			el.crtaj(kontejnerRadnika,vrednost);
			console.log(vrednost);
		})
		
	}
}