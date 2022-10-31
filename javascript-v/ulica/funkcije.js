 function Ulica(naziv,grad)
 {
	 var that=this;
	 this.naziv=naziv;
	 this.grad=grad;
	 this.listaObjekata=[];
	 
	 (function(){
		 if(that.naziv===null || that.naziv===undefined || that.naziv==="")
			 that.naziv="Bulevar";
		 if(that.grad===null || that.grad===undefined || that.grad==="")
			 that.grad="Nis";
	 })();
	 
	 this.dodajObjekat=function(objekat)
	 {
		 that.listaObjekata.push(objekat);
	 }
	 
	 
	 
	 this.prikaziUlicu=function(main)
	 {
		 if(main===null)
			 throw Error ("Parent element nije prosledjen");
		 
		 var glavniKontejner=document.createElement("div");
		 glavniKontejner.className="glavniKontejner";
		 main.appendChild(glavniKontejner);
		 
		 var neparnaUlica=document.createElement("div");
		 neparnaUlica.className="neparnaUlica";
		 glavniKontejner.appendChild(neparnaUlica);
		 
		 var ulica=document.createElement("div");
		 ulica.className="ulica";
		 ulica.onclick=function()
		 {
			 var l=document.querySelector(".podaci");
			 
		 l.innerHTML=that.naziv+"<br>"+that.grad+"<br>broj objekata:"+that.listaObjekata.length;
		 }
		 glavniKontejner.appendChild(ulica);
		 
		 var l=document.createElement("label");
		 l.innerHTML=that.naziv;
		 ulica.appendChild(l);
		 
		 var parnaUlica=document.createElement("div");
		 parnaUlica.className="parnaUlica";
		 glavniKontejner.appendChild(parnaUlica);
		 
		 //console.log(that.listaObjekata);
		 
		 that.listaObjekata.sort(function(a,b){
			 if(a.broj>b.broj) return 1;
			 else return -1;
		 });
		 
		 //console.log(that.listaObjekata);
		 that.listaObjekata.forEach(function(el,index){
			 if(el.broj%2===0)
			 {
				 el.prikaziObjekat(parnaUlica);
			 }
			 else
			 {
				 el.prikaziObjekat(neparnaUlica);
			 }
			 
		 })
		 
		 
		 var podaci=document.createElement("label");
		 podaci.className="podaci";
		 main.appendChild(podaci);
	 }
 }
 
 function Objekat(broj,vlasnik,spratnost,tip)
 {
	 var that=this;
	 this.broj=broj;
	 this.vlasnik=vlasnik;
	 this.spratnos=spratnost;
	 this.tip=tip;
	 
	 (function(){
		 if(that.broj===null || that.broj===undefined || that.broj==="")
			 that.broj=1;
		 if(that.vlasnik===null || that.vlasnik===undefined || that.vlasnik==="")
			 that.vlasnik="Pera Peric";
		 if(that.spratnost===null || that.spratnost===undefined || that.spratnost==="")
			 that.spratnost=10;
		 if(that.tip===null || that.tip===undefined || that.tip==="")
			 that.tip="poslovni";
	 })();
	 
	 this.prikaziObjekat=function(main)
	 {
		 if(main===null)
			 throw Error ("Parent element nije prosledjen");
		 
		 var objekat=document.createElement("div");
		 objekat.className="objekat";
		 objekat.innerHTML=that.broj;
		 objekat.onclick=function()
		 {
			 var t=that.broj;
			 alert(t);
		 }
		 main.appendChild(objekat);
	 }
 }