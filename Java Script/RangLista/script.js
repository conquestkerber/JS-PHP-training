function student(indeks, ime, prezime, poeni)
{
	this.indeks=indeks;
	this.ime=ime;
	this.prezime=prezime;
	this.poeni=poeni;
	
	
}

function Lista(broj)
{	
	this.maxind=0;
	this.maxpros=0;
	this.atribut=broj;
	this.prosek=0;
	this.niz=new Array();
	this.noviProsek=function(element)
	{
		this.nadjiProsek();
		rezultat=document.getElementById("last"+this.atribut);
		rezultat.innerHTML=this.prosek;
		
	}
	this.nadjiMax=function()
	{
		ind=0;
		max=0;
		for(i=0; i<this.niz.length; i++)
		{
			if (max<this.niz[i].poeni) 
			{ max=this.niz[i].poeni;
				maxind=i;}
			
		}
		this.maxpros=max;
	}
	this.nadjiProsek=function()
	{
		this.prosek=0;
		for(j=0; j<this.niz.length; j++)
		{
			this.prosek=this.prosek+this.niz[j].poeni;
		}
		this.prosek=this.prosek/this.niz.length;
	}
	this.dodajStudenta=function(indeks, ime, prezime, poeni)
	{
		this.niz[this.niz.length]=new student(indeks, ime, prezime, poeni);
		this.nadjiProsek();
	}
	this.draw=function()
	{
		glavni=document.getElementById("container");
		
		table=document.createElement("table");
		table.border="2";
		table.align="center";
		tbody=document.createElement("tbody");
		zaglavlje=document.createElement("tr");
		
		indeks=document.createElement("td");
		indeks.innerHTML="indeks";
		
		ime=document.createElement("td");
		ime.innerHTML="ime i prezime";
		
		poena=document.createElement("td");
		poena.innerHTML="poena";
		
		zaglavlje.appendChild(indeks);
		zaglavlje.appendChild(ime);
		zaglavlje.appendChild(poena);
		
		tbody.appendChild(zaglavlje);
		
		this.nadjiMax();
		for(i=0; i<this.niz.length; i++)
		{
			std=document.createElement("tr");
			
			
			ind=document.createElement("td");
			ind.innerHTML=this.niz[i].indeks;
			
			ime=document.createElement("td");
			ime.innerHTML=this.niz[i].ime+this.niz[i].prezime;
			if (i==this.maxind){
			ime.style.backgroundColor="#ffaa44";
			}
			
			poen=document.createElement("td");
			tekst=document.createElement("input");
			tekst.type="text";
			tekst.value=this.niz[i].poeni;
			tekst.ref=this;
			tekst.ind=i;
			tekst.onblur=function()
			{
				this.ref.niz[this.ind].poeni=parseInt(this.value);
				
				this.ref.noviProsek(this);
				
					
			}
			
			poen.appendChild(tekst);
			
			
			
			std.appendChild(ind);
			std.appendChild(ime);
			std.appendChild(poen);
			
			tbody.appendChild(std);
		}
		
		zadnja=document.createElement("tr");
		
		
		prosek=document.createElement("td");
		prosek.colSpan="2";
		prosek.innerHTML="Prosecna ocena";
		
		racunaj=document.createElement("td");
		racunaj.innerHTML=this.prosek;
		racunaj.id="last"+this.atribut;
				
		zadnja.appendChild(prosek);
		zadnja.appendChild(racunaj);
		
		tbody.appendChild(zadnja);
		table.appendChild(tbody);
		
		glavni.appendChild(table);
		
		
	}
	
	
		
}	

// Ivan Petkovic:
// main f-ja mora da ide u zaseban fajl
// css i js fajlove treba odvojiti u posebne direktorijume

function funkcija()
{
	var lista1=new Lista(1);
	lista1.dodajStudenta(13311, "Marko", "Krstic", 90);
	lista1.dodajStudenta(13222, "Milan", "Petrovic", 80);
	lista1.draw();
	
	var lista2=new Lista(2);
	lista2.dodajStudenta(11111, "miroslav", "Djordjevic", 50);
	lista2.dodajStudenta(12345, "Slobodan", "Petrovic", 80);
	lista2.dodajStudenta(12312, "Djordje", "Golubovic", 70);
	lista2.draw();
}

