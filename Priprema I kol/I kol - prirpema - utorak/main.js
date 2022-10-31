window.onload = function () {
	var parcela = new Parcela(4,6);
	for(var i=0;i<2;i++){
		for(var j=0;j<6;j++){
			parcela.dodaj_u_matricu(i,j,new Biljka("Suncokret",1,"S","yellow",i,j));
		}
	}
	for(var j=0;j<6;j++){
		parcela.dodaj_u_matricu(2,j,new Biljka("Jagode",6,"J","red",2,j));
	}
	for(var j=0;j<6;j++){
		parcela.dodaj_u_matricu(3,j,new Biljka("Borovnice",3,"B","purple",3,j));
	}
	parcela.crtaj(document.getElementById("main"));
	
	
}