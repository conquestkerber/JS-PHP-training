 function Silos(oznaka,kapacitet,kolicina)
 {
	 var that=this;
	 this.oznaka=oznaka;
	 this.kapacitet=kapacitet;
	 this.trenutna_kolicina=kolicina;
	 
	 (function(){
		 if(that.oznaka===null || that.oznaka===undefined || that.oznaka==="")
			 that.oznaka="Silos_n";
		 if(that.kapacitet===null || that.kapacitet===undefined || that.kapacitet==="")
			 that.kapacitet=2000;
		 if(that.trenutna_kolicina===null || that.trenutna_kolicina===undefined || that.trenutna_kolicina==="")
			 that.trenutna_kolicina=0;
	 })();
	 
	 this.visina=function()
	 {
		 var v=that.kapacitet/100;
		 var res=that.trenutna_kolicina/v;
		 var r=100-res;
		 return r;
	 }
	 
	 this.azurirajSilos=function(k)
	 {
		 var s=document.querySelector(".proizvod[data-index='"+that.oznaka+"']")
		 that.trenutna_kolicina=k;
		 s.style.height=that.visina()+"%";
		 console.log(s);
	 }
	 
	 this.prikaziSilos=function(main)
	 {
		 if(main===null)
			 throw Error ("Parent element nije prosledjen");
		 
		 var kontejnerSilosa=document.createElement("div");
		 kontejnerSilosa.className="kontejnerSilosa";
		 main.appendChild(kontejnerSilosa);
		 
		 var kapacitetSilosa=document.createElement("div");
		 kapacitetSilosa.className="kapacitetSilosa";
		 kontejnerSilosa.appendChild(kapacitetSilosa);
		 
		 var p=document.createElement("label");
		 p.innerHTML=that.oznaka;
		 kapacitetSilosa.appendChild(p);
		 
		 p=document.createElement("label");
		 p.innerHTML="<br>"+that.trenutna_kolicina+"t/"+that.kapacitet+"t";
		 kapacitetSilosa.appendChild(p);
		 
		 var silos=document.createElement("div");
		 silos.className="silos";
		 kontejnerSilosa.appendChild(silos);
		 
		 var proizvod=document.createElement("div");
		 proizvod.className="proizvod";
		 proizvod.dataset.index=that.oznaka;
		 proizvod.style.height=that.visina()+"%";
		 silos.appendChild(proizvod);
		 
		 
		 
	 }
 }
 
 function Fabrika(naziv)
 {
	 var that=this;
	 this.naziv=naziv;
	 this.listaSilosa=[];
	 
	 (function(){
		 if(that.naziv===null || that.naziv===undefined || that.naziv==="")
			 that.naziv="bez naziva";
	 })();
	 
	 this.dodajSilos=function(silos)
	 {
		 that.listaSilosa.push(silos);
	 }
	 
	 
	 this.prikaziFabriku=function(main)
	 {
		 var glavniKontejner=document.createElement("div");
		 glavniKontejner.className="glavniKontejner";
		 main.appendChild(glavniKontejner);
		 
		 var h=document.createElement("h2");
		 h.innerHTML=that.naziv;
		 glavniKontejner.appendChild(h);
		 
		 that.listaSilosa.forEach(function(el,index){
			 
			 el.prikaziSilos(glavniKontejner);
		 })
		 
		 var kontejnerUnosa=document.createElement("div");
		 kontejnerUnosa.className="kontejnerUnosa";
		 main.appendChild(kontejnerUnosa);
		 
		 var l=document.createElement("label");
		 l.innerHTML="Silos";
		 kontejnerUnosa.appendChild(l);
		 
		 var s=document.createElement("select");
		 s.className="sel";
		 
		 that.listaSilosa.forEach(function(el,index){
			 
			 var o=document.createElement("option");
			 o.value=el.oznaka;
			 o.innerHTML=el.oznaka;
			 s.appendChild(o);
		 })
		 
		 kontejnerUnosa.appendChild(s);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br>Kolicina<br>";
		 kontejnerUnosa.appendChild(l);
		 
		 var t=document.createElement("input");
		 t.type="text";
		 t.className="kolicina_text";
		 kontejnerUnosa.appendChild(t);
		 
		 var btn=document.createElement("button");
		 btn.innerHTML="Dodaj u silos";
		 btn.onclick=function()
		 {
			 var op=document.querySelector("option:checked");
			 console.log(t.value);
			 that.listaSilosa.forEach(function(el,index){
				 
				 if(el.oznaka==op.value)
					 el.azurirajSilos(t.value);
			 })
			 
			 alert("test");
		 }
		 
		 kontejnerUnosa.appendChild(btn);
	 }
	 
 }