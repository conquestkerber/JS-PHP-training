 window.onload=function()
 {
	 var s1=new Silos("silos_1",2000,1002);
	 //s1.prikaziSilos(document.getElementById("main"));
	 
	 var s2=new Silos("silos_2",2000,502);
	 /*s2.prikaziSilos(document.getElementById("main")); 
	 
	 s1.azurirajSilos(1500);
	 s2.azurirajSilos(1000); */
	 
	 var f=new Fabrika("Zitopek");
	 f.dodajSilos(s1);
	 f.dodajSilos(s2);
	 f.prikaziFabriku(document.getElementById("main"));
 }