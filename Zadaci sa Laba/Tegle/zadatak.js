document.body.onload=function()
{
	var referenca;
	var indeks;
	function Napici(oznaka, sadrzaj, datum, smrtonosan)
	{
		this.oznaka=oznaka;
		this.sadrzaj=sadrzaj;
		this.datum=datum;
		this.smrtonosan=smrtonosan;
		var that=this;
		
		(function(){
			if(this.oznaka==null||this.oznaka==undefined||this.oznaka=="")
				this.oznaka="nedefinisano";
		})();
		
		(function(){
			if(this.sadrzaj==null||this.sadrzaj==undefined||this.sadrzaj=="")
				this.sadrzaj="nedefinisano";
		})();
		(function(){
			if(this.datum==null||this.datum==undefined||this.datum=="")
				this.datum="nedefinisano";
		})();
		(function(){
			if(this.smrtonosan==null||this.smrtonosan==undefined||this.smrtonosan=="")
				this.smrtonosan="nedefinisano";
		})();
	}
	
	
	function Polica(br)
	{
		this.br=br;
		var niz=[];
		var that=this;
		
		this.dodaj=function(el)
		{
			niz.push(el);
		}
		
		this.crtaj=function()
		{
			var div=document.createElement("div");
			div.className="polica";
			console.log(div);
			document.body.appendChild(div);
			
			var labela=document.createElement("label");
			labela.innerHTML="Polica" + that.br;
			div.appendChild(labela);
			
			for(var i=0; i<niz.length; i++)
			{
				(function(a){
					
					var btn=document.createElement("button");
				    div.appendChild(btn);
					var r=niz[a];
					btn.innerHTML=r.oznaka;
					
					btn.onclick=function()
					{
						indeks=a;
						referenca=this.parentNode;
						var inputs=document.querySelectorAll("input");
						inputs[0].value=r.oznaka;
						inputs[1].value=r.sadrzaj;
						inputs[2].value=r.datum;
						if(r.smrtonosan==="sa")
						{
							inputs[3].checked=true;
						}
						else
						{
							inputs[4].checked=true;
						}
					}
					
				})(i);
			}
		}
		
	}
	
	var div2=document.createElement("div");
			document.body.appendChild(div2);
			
			
			var l = document.createElement("label");
			l.innerHTML = "<br><br>Oznaka:";
			document.body.appendChild(l);
			
			var input=document.createElement("input");
			input.type="text";
			div2.appendChild(input);
			
			var dl = document.createElement("label");
			dl.innerHTML = "<br><br>Naziv:";
			document.body.appendChild(dl);
			
			var input=document.createElement("input");
			input.type="text";
			div2.appendChild(input);
			
			
			var dl = document.createElement("label");
			dl.innerHTML = "<br><br>Datum:";
			document.body.appendChild(dl);
			
			var input=document.createElement("input");
			input.type="text";
			div2.appendChild(input);
			
			var input=document.createElement("input");
			input.type="radio";
			input.name="smrtonosan";
			input.value="da";
			div2.appendChild(input);
			
			var input=document.createElement("input");
			input.type="radio";
			input.name="smrtonosan";
			input.value="ne";
			div2.appendChild(input);
			
			var save=document.createElement("button");
			save.innerHTML="izmeni";
			div2.appendChild(save);
			save.onclick=function()
			{
				var inputs=document.querySelectorAll("input");
				var tegla=new Tegla(inputs[0].value,inputs[1].value, inputs[2].value,inputs[3].value);
				var polica=document.querySelectorAll(".polica");
				referenca.childNodes[indeks+1].innerHTML=tegla.oznaka;
	
			}
	var p1=new Polica(1);
	var t1=new Napici();
	var t2=new Napici("N2","n2","10.10.2010", "ne");
	var t3=new Napici("N3","n3","10.10.2010", "da");
	var t4=new Napici("N4","n4","10.10.2010", "da");
	var t5=new Napici("N5","n5","10.10.2010", "da");
	
	var p2=new Polica(2);
	var t21=new Napici("N1","n1","10.10.2010", "ne");
	var t22=new Napici("N2","n2","10.10.2010", "da");
	var t23=new Napici("N3","n3","10.10.2010", "da");
	var t24=new Napici("N4","n4","10.10.2010", "ne");
	var t25=new Napici("N5","n5","10.10.2010", "ne");
	
	p1.dodaj(t1);
	p1.dodaj(t2);
	p1.dodaj(t3);
	p1.dodaj(t4);
	p1.dodaj(t5);
	p1.crtaj();
	
	p2.dodaj(t21);
	p2.dodaj(t22);
	p2.dodaj(t23);
	p2.dodaj(t24);
	p2.dodaj(t25)
	p2.crtaj();
	
	
	
}