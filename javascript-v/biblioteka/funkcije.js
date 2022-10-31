 function Polica(oznaka,maxBrojKnjiga,trenutniBrojKnjiga)
 {
	 var that=this;
	 this.oznaka=oznaka;
	 this.maxBrojKnjiga=maxBrojKnjiga;
	 this.trenutniBrojKnjiga=trenutniBrojKnjiga;
	 
	 (function(){
		 if(that.oznaka===null || that.oznaka===undefined || that.oznaka==="")
			 that.oznaka="bez oznake";
		 if(that.maxBrojKnjiga===null || that.maxBrojKnjiga===undefined || that.maxBrojKnjiga==="")
			that.maxBrojKnjiga=10;
		 if(that.trenutniBrojKnjiga===null || that.trenutniBrojKnjiga===undefined || that.trenutniBrojKnjiga==="")
			 that.trenutniBrojKnjiga=0;
			
	 })();
	 
	 
	 this.dodajKnjigu=function()
	 {
		 if(that.trenutniBrojKnjiga<that.maxBrojKnjiga)
		 {
			 that.trenutniBrojKnjiga++;
			 that.nacrtajKnjigu();
			 var stanje=document.querySelector(".stanjeKnjiga[data-index='"+that.oznaka+"']");
			 stanje.innerHTML="<br>"+that.maxBrojKnjiga+"/"+that.trenutniBrojKnjiga;
		 }
		 
	 }
	 
	 this.nacrtajKnjigu=function()
	 {
		 var main=document.querySelector(".okvirPolice[data-index='"+that.oznaka+"']");
		 
		 console.log(main);
		 var knjiga=document.createElement("div");
		 knjiga.className="knjiga";
		 knjiga.style.width=(100/that.maxBrojKnjiga-2)+"%";
		 main.appendChild(knjiga);
	 }
	 
	 this.prikaziPolicu=function(main)
	 {
		 if(main===null)
			 throw Error ("Parent element nije prosledjen");
		 
		 var kontejnerPolice=document.createElement("div");
		 kontejnerPolice.className="kontejnerPolice";
		 main.appendChild(kontejnerPolice);
		 
		 var oznakaPolice=document.createElement("div");
		 oznakaPolice.className="oznakaPolice";
		 
		 kontejnerPolice.appendChild(oznakaPolice);
		 
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br>"+that.oznaka;
		 l.className="labela";
		 oznakaPolice.appendChild(l);
		 
		 var okvirPolice=document.createElement("div");
		 okvirPolice.className="okvirPolice";
		 okvirPolice.style.width=(that.maxBrojKnjiga*5.5)+"%";
		 okvirPolice.dataset.index=that.oznaka;
		 kontejnerPolice.appendChild(okvirPolice);
		 
		 var stanjeKnjiga=document.createElement("div");
		 stanjeKnjiga.className="stanjeKnjiga";
		 stanjeKnjiga.dataset.index=that.oznaka;
		 kontejnerPolice.appendChild(stanjeKnjiga);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br>"+that.maxBrojKnjiga+"/"+that.trenutniBrojKnjiga;
		 l.className="labela";
		 stanjeKnjiga.appendChild(l);
		 
		 for(var i=0; i<that.trenutniBrojKnjiga; i++)
		 {
			 that.nacrtajKnjigu();
		 }
	 }
 }
 
 function Biblioteka(naziv)
 {
	 var that=this;
	 this.naziv=naziv;
	 this.listaPolica=[];
	 
	 (function(){
		 if(that.naziv===null || that.naziv===undefined || that.naziv==="")
			 that.naziv="bez naziva";
	 })();
	 
	 this.dodajPolicu=function(polica)
	 {
		 that.listaPolica.push(polica);
	 }
	 
	 
	 this.prikaziBiblioteku=function(main)
	 {
		 if(main===null)
			 throw Error ("Parent element nije prosledjen");
		 
		 var glavniKontejner=document.createElement("div");
		 glavniKontejner.className="glavniKontejner";
		 main.appendChild(glavniKontejner);	 
		 
		 ///////////levi deo
		 
		 var kontejnerZaUnos=document.createElement("div");
		 kontejnerZaUnos.className="kontejnerZaUnos";
		 glavniKontejner.appendChild(kontejnerZaUnos);
		 
		 //////////////desni deo
		 
		 var kontejnerZaPolice=document.createElement("div");
		 kontejnerZaPolice.className="kontejnerZaPolice";
		 glavniKontejner.appendChild(kontejnerZaPolice);
		 
		 
		 that.listaPolica.forEach(function(el,index){
			
			var r=document.createElement("input");
			r.type="radio";
			r.name="r";
			r.className="rad";
			r.value=el.oznaka;
			kontejnerZaUnos.appendChild(r);
			
			var l=document.createElement("label");
			l.innerHTML=el.oznaka+"<br>";
			kontejnerZaUnos.appendChild(l);
			
			el.prikaziPolicu(kontejnerZaPolice);
			
		 })
		 
		 var l=document.createElement("label");
		 l.innerHTML="Broj knjiga";
		 kontejnerZaUnos.appendChild(l);
		 
		 var t=document.createElement("input");
		 t.type="text";
		 kontejnerZaUnos.appendChild(t);
		 
		 var pr="test";
		 
		 var btn=document.createElement("button");
		 btn.innerHTML="Dodaj na policu";
		 kontejnerZaUnos.appendChild(btn);
		 btn.onclick=function()
		 {
			 var dugmici=document.querySelectorAll(".rad");
			 console.log(dugmici);
			 
			 var broj=t.value;
			 
			 for(var i=0; i<dugmici.length; i++)
			 {
				 if(dugmici[i].checked===true)
				 {
					 var d=dugmici[i];
					 that.listaPolica.forEach(function(el,index){
						 if(el.oznaka===d.value)
						 {
							 for(var j=0; j<broj; j++)
							 {
								el.dodajKnjigu();
							 }
						 }
						 
					 })
				 }
			 }
		 }
		 
	}
	 
 }