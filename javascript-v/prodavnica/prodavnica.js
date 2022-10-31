function Proizvod(sifra, naziv, cena, kolicina)
{
	var that=this;
	this.sifra=sifra;
	this.naziv=naziv;
	this.cena=cena;
	this.kolicina=kolicina;
	
	(function(){
		
		if(that.sifra===null || that.sifra===undefined || that.sifra==="")
			that.sifra="0000";
	})();
}

function Prodavnica(naziv)
{
	var that=this;
	this.naziv=naziv;
	this.proizvodi=[];
	
	this.dodajProizvod=function(p)
	{
		that.proizvodi.push(p);
	}
	
	this.izracunajSumu=function()
	{
		var suma=0;
		that.proizvodi.forEach(function(el,index){
			suma=suma+(el.cena*el.kolicina);
		})
		return suma;
	}
	
	this.crtaj=function(main)
	{
		if(main===null)
			throw Error ("Parent element nije prosledjen");
		
		var lab=document.createElement("label");
		lab.innerHTML=that.naziv;
		main.appendChild(lab);
		
		//pravljenje tabele 1
		
		var tabela1=document.createElement("table");
		main.appendChild(tabela1);
		
		var tabela1Naslov=document.createElement("thead");
		tabela1.appendChild(tabela1Naslov);
		
		var red=document.createElement("tr");
		tabela1Naslov.appendChild(red);
		
		var celija=document.createElement("th");
		celija.innerHTML="Sifra";
		red.appendChild(celija);
		
		celija=document.createElement("th");
		celija.innerHTML="Naziv";
		red.appendChild(celija);
		
		celija=document.createElement("th");
		celija.innerHTML="Cena";
		red.appendChild(celija);
		
		celija=document.createElement("th");
		celija.innerHTML="Kolicina";
		red.appendChild(celija);
		
		var tabela1Telo=document.createElement("tbody");
		tabela1.appendChild(tabela1Telo);
		
		//pravljenje tabele 2
		
		
		var lab=document.createElement("label");
		lab.innerHTML="Skraceni prikaz";
		main.appendChild(lab);
		
		
		var tabela2=document.createElement("table");
		main.appendChild(tabela2);
		
		var tabela2Naslov=document.createElement("thead");
		tabela2.appendChild(tabela2Naslov);
		
		var red=document.createElement("tr");
		tabela2Naslov.appendChild(red);
		
		var celija=document.createElement("th");
		celija.innerHTML="Sifra";
		red.appendChild(celija);
		
		celija=document.createElement("th");
		celija.innerHTML="Cena*Kolicina";
		red.appendChild(celija);
		
		var tabela2Telo=document.createElement("tbody");
		tabela2.appendChild(tabela2Telo);
		
		
		//popunjavanje tabele
		
		
		that.proizvodi.forEach(function(el,index){
			
			//prva tabela
			
			var red=document.createElement("tr");
			tabela1Telo.appendChild(red);
			
			red.ref=el;
			red.dataset.index=index;
			//console.log(red.ref);
			var celija=document.createElement("td");
			celija.innerHTML=el.sifra;
			red.appendChild(celija);
			
			var celija=document.createElement("td");
			celija.innerHTML=el.naziv;
			red.appendChild(celija);
			
			var celija=document.createElement("td");
			celija.innerHTML=el.cena;
			red.appendChild(celija);
			
			var celija=document.createElement("td");
			celija.innerHTML=el.kolicina;
			celija.className="kolicina";
			red.appendChild(celija);
			
			var btnPlus=document.createElement("button");
			btnPlus.innerHTML="+";
			red.appendChild(btnPlus);
			
			btnPlus.onclick=function()
			{
				var r=this.parentElement;
				var proizvod=r.ref;
				
			//console.log(r.ref);
				proizvod.kolicina++;
				r.querySelector(".kolicina").innerHTML=proizvod.kolicina;
				var z=document.querySelector(".zbir[data-index='"+index+"']");
				z.innerHTML=proizvod.kolicina*proizvod.cena;
				
				var pr=document.querySelector(".suma");
				pr.innerHTML=that.izracunajSumu();
				
			}
			
			var btnMinus=document.createElement("button");
			btnMinus.innerHTML="-";
			red.appendChild(btnMinus);
			
			// druga tabela
			
			var red2=document.createElement("tr");
			tabela2Telo.appendChild(red2);
			
			red2.ref=el;
			red2.dataset.index=index;
			
			var celija=document.createElement("td");
			celija.innerHTML=el.sifra;
			red2.appendChild(celija);
			
			var celija=document.createElement("td");
			celija.innerHTML=el.kolicina*el.cena;
			celija.className="zbir";
			celija.dataset.index=index;
			red2.appendChild(celija);
			
			
		})
		
		
		var red=document.createElement("tr");
		tabela2Telo.appendChild(red);
		
		var celija=document.createElement("td");
		celija.innerHTML="Suma";
		red.appendChild(celija);
		
		celija=document.createElement("td");
		celija.innerHTML=that.izracunajSumu();
		celija.className="suma";
		red.appendChild(celija);
	}
}