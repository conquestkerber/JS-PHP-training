document.body.onload=function()
{
	function Takmicar(ime, prezime, brbodova)
	{
		this.ime=ime;
		this.prezime=prezime;
		this.brbodova=brbodova;
		var that=this;
		(function(){
			if(that.ime==""||that.ime==null||that.ime==undefined)
				that.ime="nedefinisano";
		})();
		(function(){
			if(that.prezime==""||that.prezime==null||that.prezime==undefined)
				that.prezime="nedefinisano";
		})();
		(function(){
			if(that.brbodova==null||that.brbodova==undefined||that.brbodova=="")
				that.brbodova=0;
		})();
	}
	function Takmicenje(naziv)
	{
		this.naziv=naziv;
		var that=this;
		var niz=[];
		
		this.dodaj=function(el)
		{
			niz.push(el);
		}
		this.print=function()
		{
			for(var i=0; i<niz.length; i++)
			{
				console.log(niz[i]);
			}
		}
		
		this.crtaj=function()
		{
			var p=document.createElement("p");
			p.className="ispis";
			document.body.appendChild(p);
			for(var i=0; i<niz.length; i++)
			{
				(function(a){
					var div=document.createElement("div");
					document.body.appendChild(div);
					div.ref=niz[a];
					
					var labela=document.createElement("labela");
					labela.innerHTML=niz[a].ime + " " + niz[a].prezime;
 					div.appendChild(labela);
					
					var para=document.createElement("p");
					para.className="bodovi";
					para.innerHTML=niz[a].brbodova;
					div.appendChild(para);
					
					var btn1=document.createElement("button");
					btn1.innerHTML="+";
					div.appendChild(btn1);
					btn1.onclick=function()
					{
						var r=this.parentNode;
						var takmicar=r.ref;
						takmicar.brbodova++;
						r.querySelector("p.bodovi").innerHTML=takmicar.brbodova;
					    var drugi=document.querySelectorAll(".ispis");
                        drugi[0].innerHTML=niz[a].ime + takmicar.brbodova;			
					}
					
					var btn2=document.createElement("button");
					btn2.innerHTML="-";
					div.appendChild(btn2);
					
					btn2.onclick=function()
					{
						var r=this.parentNode;
						var takmicar=r.ref;
						if(takmicar.brbodova>0)
						{
							takmicar.brbodova--;
						}
						else
						{
							takmicar.brbodova=0;
						}
						r.querySelector("p.bodovi").innerHTML=takmicar.brbodova;
						var drugi=document.querySelectorAll(".ispis");
						drugi[0].innerHTML=niz[a].ime + takmicar.brbodova;
					}
				})(i);
			}
			
			
			
			
			
		}
	}
	
	var trka=new Takmicenje("motogp");
	var prvi=new Takmicar("djordje","nikolic",100);
	var drugi=new Takmicar("marko","nikolic",50);
	var treci=new Takmicar("stefan","mladenovic", 75);
	trka.dodaj(prvi);
	trka.dodaj(drugi);
	trka.dodaj(treci);
	trka.crtaj();
	
	
	
	
}