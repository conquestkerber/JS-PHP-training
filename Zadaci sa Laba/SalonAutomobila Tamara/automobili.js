function Automobil(naziv,sifra,proiz,boja,brojVrata)
{
	function Validacija()
	{
		if(naziv===null || naziv===undefined)			
		{
   			naziv="Nepoznat";
			return false;
		}
		if(sifra===null || sifra===undefined)
		{ 
	       sifra="000000";
		   return false;
		}
		return true;
	}
	if(Validacija())
	{
		this.naziv=naziv;
		this.sifra=sifra;
		this.proiz=proiz;
		this.boja=boja;
		this.brojVrata=brojVrata;
	}
}

function Salon(naziv)
{
	this.naziv=naziv;
	this.niz=[];
	var that=this;
	
	this.dodaj=function(automobil)
	{
		that.niz.push(automobil);
	}
	
	this.izracunaj=function(main)
	{
		var b=document.createElement("br");
		b.id="prazan";
		main.appendChild(b);
		
		var lab=document.createElement("label");
		lab.id="dole";
		lab.innerHTML="Najvise vrata ima: ";
		main.appendChild(lab);
		
		var b=document.createElement("br");
		b.id="prazan";
		main.appendChild(b);
		
		var lab=document.createElement("label");
		lab.id="doledole";
		lab.innerHTML="Najvise vrata ima AUTO: ";
		main.appendChild(lab);
		
		var max=0;
		var parmax;
		var automax;
		
		for(var i=0;i<that.niz.length;i++)
		{
			
			if(that.niz[i].brojVrata > max)
			{
				max=that.niz[i].brojVrata;
				//parmax=cel.parentElement;  //ovde ne zna koja je celija tacno
				//automax=parmax.ref;
			}
			
		}
		
		for(var i=0;i<that.niz.length;i++)
		{
			if(that.niz[i].brojVrata==max)
				automax=that.niz[i].naziv;
		}
		
		document.getElementById("dole").innerHTML+=max;  //broj koliko najvise vrata ima
		document.getElementById("doledole").innerHTML+=automax;  
		
		var b=document.createElement("br");
		b.id="prazan";
		main.appendChild(b);
	}
	
	
	this.crtaj=function(main)
	{
		var tabela=document.createElement("table");
		tabela.id="tab";
		main.appendChild(tabela);
		
		var zag=document.createElement("thead");
		tabela.appendChild(zag);
		
		var red=document.createElement("tr");
		zag.appendChild(red);
		
		var h1=document.createElement("th");
		h1.innerHTML="Naziv";
		red.appendChild(h1);
		
		var h1=document.createElement("th");
		h1.innerHTML="Sifra";
		red.appendChild(h1);
		
		var h1=document.createElement("th");
		h1.innerHTML="Proizvodjac";
		red.appendChild(h1);
		
		var h1=document.createElement("th");
		h1.innerHTML="Boja";
		red.appendChild(h1);
		
		var h1=document.createElement("th");
		h1.innerHTML="Broj vrata";
		red.appendChild(h1);
		
		var h1=document.createElement("th");
		h1.innerHTML="";
		red.appendChild(h1);
		
		var tabelaTelo=document.createElement("tbody");
		tabela.appendChild(tabelaTelo);
		
		for(var i=0; i<that.niz.length; i++)
		{
			(function(a)
			{
				var red=document.createElement("tr");
				tabelaTelo.appendChild(red);
				red.ref=that.niz[a];
				
				var cel=document.createElement("td");
				cel.innerHTML=that.niz[a].naziv;
				red.appendChild(cel);
				
				var cel=document.createElement("td");
				cel.innerHTML=that.niz[a].sifra;
				red.appendChild(cel);
				
				var cel=document.createElement("td");
				cel.innerHTML=that.niz[a].proiz;
				red.appendChild(cel);
				
				var cel=document.createElement("td");
				cel.innerHTML=that.niz[a].boja;
				cel.style.backgroundColor=that.niz[a].boja;
				red.appendChild(cel);
				
				var cel=document.createElement("td");
				cel.innerHTML=that.niz[a].brojVrata;
				red.appendChild(cel);
				
				var celD=document.createElement("td");
				red.appendChild(celD);
				
				var btn=document.createElement("button");
				btn.id="dugme";
				btn.innerHTML="Izmeni";
				celD.appendChild(btn);
				
				btn.onclick=function()
				{
					var buttons=[];
					
					var par=btn.parentElement.parentElement;
					var auto=par.ref;
					//console.log(auto);
					
					var d=document.createElement("div");
					d.id="dodatno";
					main.appendChild(d);
					
					var lab=document.createElement("label");
					lab.innerHTML="Naziv";
					d.appendChild(lab);
					
					var inp1=document.createElement("input");
					inp1.type="text";
					inp1.value=auto.naziv;
					inp1.size=10;
					inp1.className="in";
					d.appendChild(inp1);
					
					var b=document.createElement("br");
					d.appendChild(b);
					var b=document.createElement("br");
					d.appendChild(b);
					
					var lab=document.createElement("label");
					lab.innerHTML="Sifra";
					d.appendChild(lab);
					
					var inp2=document.createElement("input");
					inp2.type="text";
					inp2.value=auto.sifra;
					inp2.size=10;
					inp2.className="in";
					d.appendChild(inp2);
					
					var b=document.createElement("br");
					d.appendChild(b);
					var b=document.createElement("br");
					d.appendChild(b);
					
					var lab=document.createElement("label");
					lab.innerHTML="Proizvodjac";
					d.appendChild(lab);
					
					var inp3=document.createElement("input");
					inp3.type="text";
					inp3.value=auto.proiz;
					inp3.size=10;
					inp3.className="in";
					d.appendChild(inp3);
					
					var b=document.createElement("br");
					d.appendChild(b);
					var b=document.createElement("br");
					d.appendChild(b);
					
					var lab=document.createElement("label");
					lab.innerHTML="Boja";
					d.appendChild(lab);
					
					var inp4=document.createElement("input");
					inp4.type="text";
					inp4.value=auto.boja;
					inp4.size=10;
					inp4.className="in";
					d.appendChild(inp4);
					
					var b=document.createElement("br");
					d.appendChild(b);
					var b=document.createElement("br");
					d.appendChild(b);
					
					var lab=document.createElement("label");
					lab.innerHTML="Broj vrata";
					d.appendChild(lab);
					
					var inp5=document.createElement("input");
					inp5.type="text";
					inp5.value=auto.brojVrata;
					inp5.size=10;
					inp5.className="in";
					d.appendChild(inp5);
					
					var b=document.createElement("br");
					d.appendChild(b);
					var b=document.createElement("br");
					d.appendChild(b);
					
					var btnSnimi=document.createElement("button");
					btnSnimi.innerHTML="Snimi";
					btnSnimi.id="sn";
					d.appendChild(btnSnimi);
					buttons.push(btn);
					
					btn.disabled=true;
					
					
					btnSnimi.onclick=function()
					{
						auto.naziv=inp1.value;
						auto.sifra=inp2.value;
						auto.proiz=inp3.value;
						auto.boja=inp4.value;
						auto.brojVrata=inp5.value;
						
						var el=par.querySelectorAll("td");
						el[0].innerHTML=auto.naziv;
						el[1].innerHTML=auto.sifra;
						el[2].innerHTML=auto.proiz;
						el[3].innerHTML=auto.boja;
						el[4].innerHTML=auto.brojVrata;
						
						d.remove();
						
						btn.disabled=false;
						
						that.izracunaj(main);
						
					}
				}
			})(i);
			
			//ovde je i dalje i ne a
			
		}
		that.izracunaj(main);
		/*
		var b=document.createElement("br");
		b.id="prazan";
		main.appendChild(b);
		
		var lab=document.createElement("label");
		lab.id="dole";
		lab.innerHTML="Najvise vrata ima: ";
		main.appendChild(lab);
		
		var b=document.createElement("br");
		b.id="prazan";
		main.appendChild(b);
		
		var lab=document.createElement("label");
		lab.id="doledole";
		lab.innerHTML="Najvise vrata ima AUTO: ";
		main.appendChild(lab);
		
		var max=0;
		var parmax;
		var automax;
		
		for(var i=0;i<that.niz.length;i++)
		{
			
			if(that.niz[i].brojVrata > max)
			{
				max=that.niz[i].brojVrata;
				//parmax=cel.parentElement;  //ovde ne zna koja je celija tacno
				//automax=parmax.ref;
			}
			
		}
		
		for(var i=0;i<that.niz.length;i++)
		{
			if(that.niz[i].brojVrata==max)
				automax=that.niz[i].naziv;
		}
		
		document.getElementById("dole").innerHTML+=max;  //broj koliko najvise vrata ima
		document.getElementById("doledole").innerHTML+=automax;  
		*/
		
	}
}


















