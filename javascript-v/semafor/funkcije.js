 function Semafor(serijski_broj,interval)
 {
	 var that=this;
	 this.serijski_broj=serijski_broj;
	 this.interval=interval;
	 this.nizStanja=[];
	 var timer;
	 this.dodajStanje=function(stanje)
	 {
		 that.nizStanja.push(stanje);
	 }
	 
	 this.menjajBoje=function()
	 {
		 var s=document.querySelectorAll(".stanje[data-index='"+that.serijski_broj+"']");
			 
			
			 var s2;
			 s.forEach(function(el,index){
				 if(el.style.background!="black")
				 {
					 el.style.background="black"
					 console.log("index"+index);
					 if(index==(that.nizStanja.length-1))
						 s2=0;
					 else s2=index+1;
					 
				 }
			 })
			 console.log("s2"+s2);
			 s[s2].style.background=that.nizStanja[s2].boja;
	 }
	 
	 this.prikaziSemafor=function(main)
	 {
		 var kontejner=document.createElement("div");
		 kontejner.className="kontejner";
		 main.appendChild(kontejner);
		 
		 var semafor=document.createElement("div");
		 semafor.className="semafor";
		 semafor.style.height=(that.nizStanja.length*140)+"px";
		 //semafor.style.background="red";
		 kontejner.appendChild(semafor);
		 
		 that.nizStanja.forEach(function(el,index){
			 
			 el.prikaziStanje(semafor,that.serijski_broj);
		 })
		 
		 var btn1=document.createElement("button");
		 btn1.innerHTML="start";
		 btn1.onclick=function()
		 {
			 var s=document.querySelectorAll(".stanje[data-index='"+that.serijski_broj+"']");
			 
			 s[0].style.background=that.nizStanja[0].boja;
			 
			 timer=setInterval(that.menjajBoje,2000);
			 
		 }
		 kontejner.appendChild(btn1);
		 
		 var btn2=document.createElement("button");
		 btn2.innerHTML="stop";
		 btn2.onclick=function()
		 {
			 clearInterval(timer);
			 var s=document.querySelectorAll(".stanje[data-index='"+that.serijski_broj+"']");
			 
			 s.forEach(function(el,index){
				 if(el.style.background!="black")
				 {
					 el.style.background="black"
					
				 }
			 })
		 }
		 kontejner.appendChild(btn2);
		 
		 var btn3=document.createElement("button");
		 btn3.innerHTML="kvar";
		 btn3.onclick=function()
		 {
			 var s=document.querySelectorAll(".stanje[data-index='"+that.serijski_broj+"']");
			 
			 s[0].style.background=that.nizStanja[0].boja;
			 
			 clearInterval(timer);
			 timer=setInterval(that.menjajBoje,800);
		 }
		 kontejner.appendChild(btn3);
	 }
 }
 
 function Stanje(boja,ispis)
 {
	 var that=this;
	 this.boja=boja;
	 this.ispis=ispis;
	 
	 this.prikaziStanje=function(main,i)
	 {
		 var stanje=document.createElement("div");
		 stanje.className="stanje";
		 stanje.dataset.index=i;
		 stanje.style.background="black";
		 main.appendChild(stanje);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>"+that.ispis;
		 stanje.appendChild(l);
	 }
	 
	 
 }