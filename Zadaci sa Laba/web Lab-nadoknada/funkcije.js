 function Lek( oznakaLeka,naziv,datum,smrtonosan)
 {
	this.oznakaLeka=oznakaNapitka;
	this.naziv=naziv;
	this.datum=datum;
	this.smrtonosan=smrtonosan;
	var that=this;
	
	(function(){
		 if(that.oznakaNapitka===null || that.oznakaNapitka===undefined || that.oznakaNapitka==="")
			 that.oznakaNapitka="nedefinisan";
		 if(that.naziv===null || that.naziv===undefined || that.naziv==="")
			 that.naziv="nedfinisan";
		 if(that.datum===null || that.datum===undefined || that.datum==="")
			 that.datum = "0";
		 if(that.smrtonosan===null || that.smrtonosan===undefined || that.smrtonosan==="")
			 that.smrtonosan="da";
			
	 })();
 }
 
 
 
 
 function Polica(oznaka,trenutniBrojNapitaka)
 {
	 var that=this;
	 this.oznaka=oznaka;
	 this.trenutniBrojNapitaka=trenutniBrojNapitaka;
	 this.listaNapitaka=[];
	 
	 (function(){
		 if(that.oznaka===null || that.oznaka===undefined || that.oznaka==="")
			 that.oznaka="bez oznake";
		 if(that.trenutniBrojNapitaka===null || that.trenutniBrojNapitaka===undefined || that.trenutniBrojNapitaka==="")
			 that.trenutniBrojNapitaka=0;
			
	 })();
	 
	 
	 this.dodajNapitak=function(n)
	 {
		 if(that.trenutniBrojNapitaka<7)
		 {
			 that.listaNapitaka.push(n);
			 that.nacrtajNapitak();
			 that.trenutniBrojNapitaka++;
			 
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
		 var m=document.querySelectorAll(".mesto[data-index='"+that.trenutniBrojNapitaka+"']");
		 var main;
		 m.forEach(function(el,index){
			 if(el.dataset.brojPolice===that.oznaka)
				 main=el;
		 })
		 console.log(main);
		 main.innerHTML=that.listaNapitaka[that.trenutniBrojNapitaka].oznakaNapitka;
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
		 okvirPolice.style.width="500px";//
		 okvirPolice.dataset.index=that.oznaka;
		 kontejnerPolice.appendChild(okvirPolice);
		 
		 
		 
		 for(var i=0; i<7; i++)
		 {
			 that.nacrtajMesto(i);
		 }
	 }
 }
 
 
 function Podrum()
 {
	 var that=this;
	 this.listaPolica=[];
	 
	 this.dodajPolicu=function(p)
	 {
		 that.listaPolica.push(p);
	 }
	 
	 
	 this.prikaziPodrum=function(main)
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
		 l.innerHTML="<br><br>Oznaka";
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
		 l.innerHTML="<br><br>Datum";
		 kontejnerZaUnos.appendChild(l);
		 
		 var dt=document.createElement("input");
		 dt.type="text";
		 kontejnerZaUnos.appendChild(dt);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>Smrtonosan";
		 kontejnerZaUnos.appendChild(l);
		 
		 var r=document.createElement("input");
			r.type="radio";
			r.name="r";
			r.className="rad";
			r.value="da";
			kontejnerZaUnos.appendChild(r);
			
			var r=document.createElement("input");
			r.type="radio";
			r.name="r";
			r.className="rad";
			r.value="ne";
			kontejnerZaUnos.appendChild(r);
			
			var btn=document.createElement("button");
		 btn.innerHTML="Dodaj na policu";
		 kontejnerZaUnos.appendChild(btn);
		 btn.onclick=function()
		 {
			
			 var smrtonosan;
			 var dugmici=document.querySelectorAll(".rad");
			 if(dugmici[0].checked===true)
				 smrtonosan="da";
			 else if(dugmici[1].checked===true)
				 smrtonosan="ne";
			 
			 var odabranaPolica = document.querySelectorAll('option:checked');
			 var n= new Napitak(oz.value,naziv.value,dt.value,"smrtonosan");
			 that.listaPolica[odabranaPolica[0].value-1].dodajNapitak(n);
			 console.log(that.listaPolica[odabranaPolica[0].value-1]);
             
		 }
		 
		 that.listaPolica.forEach(function(el,index){
			 
			 el.prikaziPolicu(kontejnerZaPolice);
		 })
	 }
 }