 function Unos()
 {
	 this.prikazi=function(main)
	 {
		 
		 var l=document.createElement("label");
		 l.innerHTML="Text 1";
		 main.appendChild(l);
		 
		 var t1=document.createElement("input");
		 t1.type="text";
		 t1.className="text1";
		 main.appendChild(t1);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>Text 2";
		 main.appendChild(l);
		 
		 var t2=document.createElement("input");
		 t2.type="text";
		 t2.className="text2";
		 main.appendChild(t2);
		 
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>prvi";
		 main.appendChild(l);
		 
		 var r=document.createElement("input");
		 r.type="radio";
		 r.name="rad";
		 r.className="rad";
		 r.value="prvi";
		 main.appendChild(r);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br>drugi";
		 main.appendChild(l);
		 
		 var r=document.createElement("input");
		 r.type="radio";
		 r.name="rad";
		 r.className="rad";
		 r.value="drugi";
		 main.appendChild(r);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br>treci";
		 main.appendChild(l);
		 
		 var r=document.createElement("input");
		 r.type="radio";
		 r.name="rad";
		 r.className="rad";
		 r.value="treci";
		 main.appendChild(r);
		 
		 ////////////////////////////////////////
		 var l=document.createElement("label");
		 l.innerHTML="<br>plavo";
		 main.appendChild(l);
		 
		 var c=document.createElement("input");
		 c.type="checkbox";
		 c.className="check";
		 c.value="plavo";
		 main.appendChild(c);
		 ///////////////////////////////////////////
		 var l=document.createElement("label");
		 l.innerHTML="<br>crveno";
		 main.appendChild(l);
		 
		 var c=document.createElement("input");
		 c.type="checkbox";
		 c.className="check";
		 c.value="crveno";
		 main.appendChild(c);
		 ////////////////////////////////////////////
		 var l=document.createElement("label");
		 l.innerHTML="<br>zeleno";
		 main.appendChild(l);
		 
		 var c=document.createElement("input");
		 c.type="checkbox";
		 c.className="check";
		 c.value="zeleno";
		 main.appendChild(c);
		 /////////////////////////////////////////////
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>";
		 main.appendChild(l);
		 
		 
		 var s=document.createElement("select");
		 s.className="sel";
		 
		 var o=document.createElement("option");
		 o.value="gore";
		 o.innerHTML="gore";
		 s.appendChild(o);
		 
		 var o=document.createElement("option");
		 o.value="sredina";
		 o.innerHTML="sredina";
		 s.appendChild(o);
		 
		 var o=document.createElement("option");
		 o.value="dole";
		 o.innerHTML="dole";
		 s.appendChild(o);
		 
		 main.appendChild(s);
		 
		 var l=document.createElement("label");
		 l.innerHTML="<br><br>";
		 main.appendChild(l);
		 
		 var b=document.createElement("button");
		 b.className="prosledi";
		 b.value="prosledi";
		 b.innerHTML="Prosledi";
		 b.onclick=function()
		 {
			 //////////////////////////////////////text
			 var te1=document.querySelector(".text1");
			 var te2=document.querySelector(".text2");
			 console.log(te1.value);
			 console.log(te2.value);
			 //////////////////////////////////////radio
			 var radiran=document.querySelectorAll(".rad");
			 radiran.forEach(function(el,index){
				 if(el.checked)
					 console.log(el.value);
			 })
			 /////////////////////////////////////checkbox
			 var cekirani=document.querySelectorAll(".check");
			 cekirani.forEach(function(el,index){
				 if(el.checked)
					 console.log(el.value);
			 })
			 /////////////////////////////////////////select
			 var selektovan=document.querySelector('option:checked');
			 console.log(selektovan.value);
		 }
		 main.appendChild(b);
		 
	 }
 }