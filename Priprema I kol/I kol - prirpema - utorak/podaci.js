function Biljka(naziv,br_berbi,oznaka,boja,pozicija_x,pozicija_y){
	this.naziv=naziv;
	this.br_berbi=br_berbi;
	this.oznaka=oznaka;
	this.boja=boja;
	this.pozicija_x=pozicija_x;
	this.pozicija_y=pozicija_y;
	var that=this;
	(function(){
		if(that.naziv == null||that.naziv == undefined || that.naziv === "")
			that.naziv = "Nepoznato";
	})();
}

function Parcela(n,m){
	this.n=n;
	this.m=m;
	var that = this;
	this.matrica = [];
	for(var i = 0; i < that.n; i++){
		that.matrica[i]=[];
	}
	
	
	this.dodaj_u_matricu = function(i,j,el){
		that.matrica[i].push(el);
	}
	
	this.crtaj = function(node){
			
		var levi = document.createElement("div");
		levi.className="levi";
		node.appendChild(levi);
		
		var desni = document.createElement("div");
		desni.className="desni";
		node.appendChild(desni);
		
		var h1 = document.createElement("h1");
		h1.innerHTML = "Evidencija berbi";
		desni.appendChild(h1);
		
		
		for(var i=0;i<that.n;i++){
			var kontejner = document.createElement("div");
			kontejner.className="kontejner";
			levi.appendChild(kontejner);
			
			for(var j=0;j<that.m;j++){
				var celija = document.createElement("div");
				celija.innerHTML = that.matrica[i][j].oznaka;
				celija.className = "celija";
				celija.style.backgroundColor = that.matrica[i][j].boja;
				
				celija.ref = that.matrica[i][j];
				celija.onclick = function(){
					var b = this.ref;
					if(this.ref!=null){
						if(b.br_berbi>0)
							b.br_berbi--;
						var para = document.createElement("p");
						para.innerHTML = "Parcela: ["+b.pozicija_x+", "+b.pozicija_y+"] "+b.naziv+", Preostalo berbi: "+b.br_berbi;
						desni.appendChild(para);
						if(b.br_berbi===0){
							this.ref=null;
							this.innerHTML="";
							this.style.backgroundColor="white";
						}
					}
				}
				kontejner.appendChild(celija);
			}
		}
	}
}