window.onload = function()
{
	var r = new Radnik("pera","peric");
	r.dodajIzvestaj(new Izvestaj(2015,5000,"jan"));
	r.dodajIzvestaj(new Izvestaj(2015,6000,"feb"));
	r.dodajIzvestaj(new Izvestaj(2015,7000,"mart"));
	r.dodajIzvestaj(new Izvestaj(2015,6000,"apr"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"maj"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"jun"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"jul"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"avg"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"sep"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"okt"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"nov"));
	r.dodajIzvestaj(new Izvestaj(2015,5000,"dec"));
}