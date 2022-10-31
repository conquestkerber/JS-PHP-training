 window.onload=function()
 {
	 
	 //p.prikaziPolicu(document.getElementById("main"));
	 //p.dodajKnjigu();
	 //p.nacrtajKnjigu();
	 //p.nacrtajKnjigu();
	 //p.nacrtajKnjigu();
	 var b=new Biblioteka("Biblioteka 1");
	 b.dodajPolicu(new Polica("Beletristika",10,5));
	 b.dodajPolicu(new Polica("Epska fantastika",9,4));
	 b.dodajPolicu(new Polica("Naucna fantastika",5,1));
	 b.dodajPolicu(new Polica("Krimi romani",7,2));
	 b.prikaziBiblioteku(document.getElementById("main"));
 }