window.onload=function()
{
	var st1=new Stanje("green","start");
	var st2=new Stanje("yellow","redy");
	var st3=new Stanje("red","stop");
	var s=new Semafor(1,2000);
	s.dodajStanje(st1);
	s.dodajStanje(st2);
	s.dodajStanje(st3);
	
	
	
	
	var s2=new Semafor(2,2000);
	s2.dodajStanje(st1);
	s2.dodajStanje(st3);
	
	
	s.prikaziSemafor(document.getElementById("main"));
	s2.prikaziSemafor(document.getElementById("main"));
	
}