window.onload = function()
{
var parcela = new Parcela(4,6);
for(var i=0;i<2 ;i++)
    for(var j=0;j<6;j++)
	{
	var suncokret = new Biljka("Suncokret","S",1,"yellow");
	parcela.dodajBiljku(suncokret,i,j);
	}
	 for(var j=0;j<6;j++)
	{
	var suncokret = new Biljka("Jagoda","J",7,"red");
	parcela.dodajBiljku(suncokret,2,j);
	}
	 for(var j=0;j<6;j++)
	{
	var suncokret = new Biljka("Kupina","K",3,"blue");
	parcela.dodajBiljku(suncokret,3,j);
	}
parcela.crtajParcelu(document.getElementById("main"));
	
}