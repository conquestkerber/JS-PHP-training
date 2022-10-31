document.body.onload=function()
{
	function Knjiga(ime, izdavac, primeraka)
	{
		this.ime=ime;
		this.izdavac=izdavac;
		this.primeraka=primeraka;
		var that=this;
		 (function(){
			 if(this.ime==undefined||this.ime==null||this.ime=="")
				 this.ime="nedefinisano";
		 })();
		 (function(){
			 if(this.primeraka==undefined||this.primeraka==null||this.primeraka=="")
				 this.primeraka==0;
		 })();
	}
	
	function Knjizara(naziv)
	{
		this.naziv=naziv;
		var that=this;
		var niz=[];
		
		this.dodaj=function(el)
		{
			niz.push(el);
		}
		this.crtaj=function()
		{
			var tabela=document.createElement("table");
			document.body.appendChild(tabela);
			
			var thead=document.createElement("thead");
			tabela.appendChild(thead);
			
			var row=document.createElement("tr");
			thead.appendChild(row); 
			
			var cell=document.createElement("th");
			cell.innerHTML="ime";
			row.appendChild(cell);
			
			cell=document.createElement("th");
			cell.innerHTML="izdavac";
			row.appendChild(cell);
			
			cell=document.createElement("th");
			cell.innerHTML="primeraka";
			row.appendChild(cell);
			
			cell=document.createElement("th");
			row.appendChild(cell);
			
			var tbody=document.createElement("tbody");
			tabela.appendChild(tbody);
			
			var p=document.createElement("p");
			p.className="ispis";
			document.body.appendChild(p);
			
			
			for(var i=0; i<niz.length; i++)
			{
				(function(a){
					row=document.createElement("tr");
					row.ref=niz[a];
					tbody.appendChild(row);
					
					cell=document.createElement("td");
					row.appendChild(cell);
					cell.innerHTML=niz[a].ime;
					
					cell=document.createElement("td");
					row.appendChild(cell);
					cell.innerHTML=niz[a].izdavac;
					
					cell=document.createElement("td");
					cell.className="primerak";
					row.appendChild(cell);
					cell.innerHTML=niz[a].primeraka;
					
					btn=document.createElement("button");
					btn.innerHTML="kupi";
					row.appendChild(btn);
					
					btn.onclick=function()
					{
						var r=this.parentNode;
						var knjiga=r.ref;
						knjiga.primeraka++;
						r.querySelector("td.primerak").innerHTML=knjiga.primeraka;
						var para=document.querySelectorAll("p.ispis");
						para[0].innerHTML="kupljena je knjiga: " + niz[a].ime +" " +"autora:" +niz[a].izdavac + " " + "broj prodatog primerka:" + niz[a].primeraka; 
					}
					
					
					
				})(i);
				
				
			}
		}
		
		
	}
	var knj=new Knjizara("indigo");
	var k1=new Knjiga("plavo","Ivo adnric", 20);
	var k2=new Knjiga("zeleno","MIlos", 10);
	var k3=new Knjiga("crveno","stefan", 25);
	knj.dodaj(k1);
	knj.dodaj(k2);
	knj.dodaj(k3);
	knj.crtaj();
	
	
	
	
	
	
}