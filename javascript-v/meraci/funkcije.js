 function Merac(naziv,donjaGranica,gornjaGranica,interval,boja,trenutnaVrednost)
 {
	 var that=this;
	 this.naziv=naziv;
	 this.donjaGranica=donjaGranica;
	 this.gornjaGranica=gornjaGranica;
	 this.interval=interval;
	 this.boja=boja;
	 this.trenutnaVrednost=trenutnaVrednost;
	 
	 this.brojPodeoka=function()
	 {
		 var broj=that.gornjaGranica/that.interval;
		 //console.log(broj);
		 return broj;
	 }
	 
	 this.prikazi=function(main)
	 {
		 if(main===null)
			 throw Error ("Parent element nije prosledjen");
		 
		 var glavniKontejner=document.createElement("div");
		 glavniKontejner.className="glavniKontejner";
		 main.appendChild(glavniKontejner);
		 
		 var kontejnerUnosa=document.createElement("div");
		 kontejnerUnosa.className="kontejnerUnosa";
		 glavniKontejner.appendChild(kontejnerUnosa);
		 
		 var l=document.createElement("label");
		 l.innerHTML=that.naziv;
		 kontejnerUnosa.appendChild(l);
		 
		 var t=document.createElement("input");
		 t.type="text";
		 t.className="tekst";
		 kontejnerUnosa.appendChild(t);
		 
		 var btn=document.createElement("button");
		 kontejnerUnosa.appendChild(btn);
		 btn.innerHTML="Postavi vrednost";
		 btn.onclick=function()
		 {
			 
		 }
		 
		 var okvirMeraca=document.createElement("div");
		 okvirMeraca.className="okvirMeraca";
		 glavniKontejner.appendChild(okvirMeraca);
		 
		 
		 var leviPrikaz=document.createElement("div");
		 leviPrikaz.className="leviPrikaz";
		 okvirMeraca.appendChild(leviPrikaz);
		 
		 var desniPrikaz=document.createElement("div");
		 desniPrikaz.className="desniPrikaz";
		 okvirMeraca.appendChild(desniPrikaz);
		 
		 for(var i=0; i<that.brojPodeoka()+1; i++)
		 {
			 var podeok=document.createElement("div");
			 podeok.className="podeok";
			 podeok.style.height=(100/(that.brojPodeoka()+2))+"%";
			 podeok.innerHTML=that.gornjaGranica-(i*that.interval);
			 leviPrikaz.appendChild(podeok);
			 
			 
		 }
		 
		 var rezultat=document.createElement("div");
		 desniPrikaz.appendChild(rezultat);
		 rezultat.className="rezultat";
		 rezultat.style.height=(100/(that.brojPodeoka()+2))*((that.brojPodeoka())-(that.trenutnaVrednost/that.interval))+"%"
		 
	 }
	 
 }