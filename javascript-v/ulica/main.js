 window.onload=function()
 {
	 var o1=new Objekat(7,"Pera",5,"poslovna zgrada");
	 var o2=new Objekat(2,"Nikola",7,"stambena zgrada");
	 var o3=new Objekat(5,"Nikola",7,"stambena zgrada");
	
	 
	 var u=new Ulica("Bulevar Nikole Tesle","Nis");
	 u.dodajObjekat(o1);
	 u.dodajObjekat(o2);
	 u.dodajObjekat(o3);
	 u.prikaziUlicu(document.getElementById("main"));
 }