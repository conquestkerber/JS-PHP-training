 
 
 function Lek( oznakaLeka,naziv,cena,rokTrajanja,kolicina)
 {
	this.oznakaLeka=oznakaLeka;
	this.naziv=naziv;
	this.cena = cena;
	this.rokTrajanja=rokTrajanja;
	this.kolicina=kolicina;
	var that=this;
	
	(function(){
		 if(that.oznakaLeka===null || that.oznakaLeka===undefined || that.oznakaLeka==="")
			 that.oznakaLeka="nedefinisan";
		 if(that.naziv===null || that.naziv===undefined || that.naziv==="")
			 that.naziv="nedfinisan";
		 if(that.cena===null || that.cena===undefined || that.cena==="")
			 that.cena = "0";
		 if(that.rokTrajanja===null || that.rokTrajanja===undefined || that.rokTrajanja==="")
			 that.rokTrajanja = "0";
		 if(that.kolicina===null || that.kolicina===undefined || that.kolicina==="")
			 that.kolicina = "0";
			
	 })();
 }
 
 
 
 
 
 
 function Polica(oznaka,trenutniBrojLeka)
 {
	 this.oznaka=oznaka;
	 this.trenutniBrojLeka=trenutniBrojLeka;
	 this.listaLeka=[];
	 var that=this;
	 
	 (function(){
		 if(that.oznaka===null || that.oznaka===undefined || that.oznaka==="")
			 that.oznaka="bez oznake";
		 if(that.trenutniBrojLeka===null || that.trenutniBrojLeka===undefined || that.trenutniBrojLeka==="")
			 that.trenutniBrojNapitaka=0;
			
	 })();
	 
	 
	 //dodavanje leka u police;
	 this.dodajLek=function(n)
	 {
		 if(that.trenutniBrojLeka<7)
		 {
			 that.listaLeka.push(n);
			 that.nacrtajLek();
			 that.trenutniBrojLeka++;
			 
		 }
		 
	 }
	 
	 
	 
	 this.nacrtajMesto=function(i)
	 {
		 var main=document.querySelector(".okvirPolice[data-index='"+that.oznaka+"']");
		 var mesto=document.createElement("div");
		 mesto.className="mesto";
		 mesto.dataset.index=i;
		 mesto.dataset.brojPolice=that.oznaka;
		 main.appendChild(mesto);
		 mesto.onclick=function()
		 {
		 }
	 }
	 
	 
	 this.nacrtajNapitak=function()
	 {
		 var m=document.querySelectorAll(".mesto[data-index='"+that.trenutniBrojLeka+"']");
		 var main;
		 m.forEach(function(el,index){
			 if(el.dataset.brojPolice===that.oznaka)
				 main=el;
		 })
		 console.log(main);
		 main.innerHTML=that.listaLeka[that.trenutniBrojLeka].oznakaLeka;
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
		 okvirPolice.style.width="500px";
		 okvirPolice.dataset.index=that.oznaka;
		 kontejnerPolice.appendChild(okvirPolice);
		 
		 
		 
		 for(var i=0; i<7; i++)
		 {
			 that.nacrtajMesto(i);
		 }
	 }
 }
 
 
 
 function Stalaza()
 {
	 var that=this;
	 this.listaPolica=[];
	 
	 this.dodajPolicu=function(p)
	 {
		 that.listaPolica.push(p);
	 }
	 
	 
	 this.prikaziStalazu=function(main)
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
		 
		 var s = document.createElement("label");
		 s.innerHTML = "<br><br> Polica: ";
		 kontejnerZaUnos.appendChild(s);
		 
		 var s=document.createElement("select");
		var o=document.createElement("option");
		o.value="none";
		o.innerHTML="odaberite policu";
		s.appendChild(o);
		var o=document.createElement("option");
		o.value="1";
		o.innerHTML="polica 1";
		s.appendChild(o);
		var o=document.createElement("option");
		o.value="2";
		o.innerHTML="polica 2";
		s.appendChild(o)
		var o=document.createElement("option");
		o.value="3";
		o.innerHTML="polica 3";
		s.appendChild(o)
		var o=document.createElement("option");
		o.value="4";
		o.innerHTML="polica 4";
		s.appendChild(o)
		kontejnerZaUnos.appendChild(s);
		 
		 
		 ////
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>Oznaka: ";
		 kontejnerZaUnos.appendChild(l);
		 
		 var oz=document.createElement("input");
		 oz.type="text";
		 kontejnerZaUnos.appendChild(oz);
		 
		 
		 var nz=document.createElement("label");
		 nz.innerHTML="<br><br>Naziv";
		 kontejnerZaUnos.appendChild(nz);
		 
		 var naziv=document.createElement("input");
		 naziv.type="text";
		 kontejnerZaUnos.appendChild(naziv);
		 
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>Upotrebljivo do: ";
		 kontejnerZaUnos.appendChild(l);
		 
		 var dt=document.createElement("input");
		 dt.type="text";
		 kontejnerZaUnos.appendChild(dt);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>Cena: ";
		 kontejnerZaUnos.appendChild(l);
		 
		  var dt=document.createElement("input");
		 dt.type="text";
		 kontejnerZaUnos.appendChild(dt);
			
			var btn=document.createElement("button");
		 btn.innerHTML="Dodaj na policu";
		 kontejnerZaUnos.appendChild(btn);
		 btn.onclick=function()
		 {
			 var lek= new Lek(oz.value,naziv.value,dt.value,dt.value);
             that.listaPolica[odabranaPolica[0].value-1].dodajNapitak(lek);
			 console.log(that.listaPolica[odabranaPolica[0].value-1]);
		 }
		 
		 that.listaPolica.forEach(function(el,index){
			 
			 el.prikaziPolicu(kontejnerZaPolice);
		 })
	 }
 }