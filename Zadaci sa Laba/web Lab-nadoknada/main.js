 window.onload=function()
 {
	 
	 
	  var p=new Polica("Polica 1",0);
	  
	  //p.prikaziPolicu(document.getElementById("main"));
	  //p.dodajNapitak(n);
	  //p.dodajNapitak(n);
	  
	  var pod=new Podrum();
	  pod.dodajPolicu(new Polica("Polica 1",0));
	  pod.dodajPolicu(new Polica("Polica 2",0));
	  pod.dodajPolicu(new Polica("Polica 3",0));
	  pod.dodajPolicu(new Polica("Polica 4",0));
	  pod.prikaziPodrum(document.getElementById("main"));
 }