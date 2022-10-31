window.onload = function() 
{
	var prod = new Salon("salon1");
	
	prod.dodaj( new Automobil("auto1", 1, "p","red", 4) );  //naziv, sifra, proizvodjac,boja, brojVrata
	prod.dodaj( new Automobil("auto2", 2, "p", "purple", 10) );
	prod.dodaj( new Automobil("auto3", 3, "p","green", 2) );
	prod.dodaj( new Automobil("auto4", 4, "p","yellow",  7) );
	
	prod.crtaj(document.getElementById("main"));
}