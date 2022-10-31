document.body.online = function()
{
	function Takmicar(ime,prezime,brojPoena)
	{
		this.ime = ime;
		this.prezime = prezime;
		this.brojPoena = brojPoena;
		var that=this;
		(function(){
			if(that.ime == "" || that.ime == undefined || that.ime == null)
				that.ime = "nedefinisano";
		})();
		(function(){
			if(that.prezime == "" || that.prezime == undefined || that.prezime == null)
				that.prezime = "nedefinisano";
		})();
		(function(){
			if(that.brojPoena == null || that.brojPoena == undefined || that.brojPoena =="")
				that.brojPoena = 0;
		})();
	}
	
	function Takmicenje (naziv)
	{
		this.naziv = naziv;
		var niz = [];
		var that = this;
		this.dodaj = function(el){
			niz.push(el);
		}
		this.print = function() {
			for(var i=0;i<niz.length;i++)
			{
				console.log(niz[i]);
			}
		}
		
		this.crtaj = function() {
			var p = document.createElement("p");
			p.className = "ispis";
			document.body.appendChild(p);
			for(var i=0;i<niz.length;i++){
				(function(a){
					var div = document.createElement("div");
					document.body.appendChild(div);
					div.ref = niz[a];
					
					var labela = document.createElement("labela");
				    labela.innerHTML = niz[a].ime + "" + niz[a].prezime;
					div.appendChild(labela);
					
					var para = document.createElement("p");
					para.className = "Poeni";
					para.innerHTML = niz[a].brojPoena;
					div.appendChild(para);
					
					var btn1 = document.createElement("button");
					btn1.innerHTML = "+";
					div.appendChild(btn1);
					btn1.onclick = function(){
						var r = this.parentNode;
						var takmicar = r.ref;
						takmicar.brojPoena++;
						r.querySelector("p.brojPoena").innerHTML = takmicar.brojPoena;
						var drugi = document.querySelectorAll(".ispis");
						drugi[0].innerHTML = niz[a].ime + takmicar[0].brojPoena;
					}
					
					var btn2 = document.createElement("button");
					btn2.innerHTML = "-";
					div.appendChild(btn2);
					btn2.onclick = function()
					{
						var r = this.parentNode;
						var takmicar = r.ref;
						if(takmicar.brojPoena>0){
						takmicar.brojPoena--;}
						else{
							takmicar.brojPoena=0;
						}
						r.querySelector("p.brojPoena").innerHTML = takmicar.brojPoena;
						var drugi = document.querySelectorAll(".ispis");
						drugi[0].innerHTML = niz[a].ime + takmicar.brojPoena;
					}
				})(i);
			
		}


		}

}

var trka = new Takmicenje("moro");
var prvi = new Takmicar("stefan","stefan",21);
var drugi = new Takmicar("stefan","stefan",61);
var treci = new Takmicar("stefan","stefan",11);
trka.dodaj(prvi);
trka.dodaj(drugi);
trka.dodaj(treci);
trka.crtaj;
}