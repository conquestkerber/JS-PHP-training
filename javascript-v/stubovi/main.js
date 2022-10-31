 window.onload=function()
 {
	 //var i=new Izvestaj(1,"januar",30000);
	 //i.crtaj(document.getElementById("main"),0.7);
	 
	 var r=new Radnik("Nikola");
	 r.dodajIzvestaj(new Izvestaj(2017,"januar",30000));
	 r.dodajIzvestaj(new Izvestaj(2017,"februar",15000));
	  r.dodajIzvestaj(new Izvestaj(2017,"mart",25000));
	   r.dodajIzvestaj(new Izvestaj(2017,"april",18000));
	    r.dodajIzvestaj(new Izvestaj(2017,"maj",45000));
		 r.dodajIzvestaj(new Izvestaj(2017,"jun",10000));
		  r.dodajIzvestaj(new Izvestaj(2017,"januar",30000));
	 r.dodajIzvestaj(new Izvestaj(2017,"februar",15000));
	  r.dodajIzvestaj(new Izvestaj(2017,"mart",25000));
	   r.dodajIzvestaj(new Izvestaj(2017,"april",18000));
	 r.prikazi(document.getElementById("main"));
 }