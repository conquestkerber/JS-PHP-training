window.onload=function()
{
	var p=new Prodavnica("Prodavnica 1");
	
	p.dodajProizvod( new Proizvod("001","Prozivod 1", 50, 100));
	p.dodajProizvod( new Proizvod("002","Prozivod 2", 60, 11));
	p.dodajProizvod( new Proizvod("003","Prozivod 3", 100, 10));
	p.dodajProizvod( new Proizvod("004","Prozivod 4", 27, 20));
	
	p.crtaj(document.getElementById("main"));
}